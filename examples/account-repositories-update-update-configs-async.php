<?php declare(strict_types=1);

use ApiClients\Client\Dependabot\AsyncClient;
use ApiClients\Client\Dependabot\Resource\Async\Account;
use ApiClients\Client\Dependabot\Resource\Async\Repository;
use React\EventLoop\Factory;
use function ApiClients\Foundation\resource_pretty_print;
use function ApiClients\Tools\Rx\unwrapObservableFromPromise;

require \dirname(__DIR__) . \DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();
$client = AsyncClient::create($loop, require 'options.php');

unwrapObservableFromPromise($client->account($argv[1])->then(function (Account $account) {
    return $account->repositories();
}))->filter(function (Repository $repository) {
    return $repository->attributes()->installationState() === 'active';
})->filter(function (Repository $repository) {
    return in_array('php', array_map(function ($updateConfigs) {
        return $updateConfigs['attributes']['language'];
    }, $repository->updateConfigs()));
})->subscribe(function (Repository $repository) use ($argv) : void {
    resource_pretty_print($repository);

    $config = current($repository->updateConfigs());
    $configId = (int)$config['id'];
    $repository->updateConfig($configId, [
        'requirements-update-strategy' => $argv[2],
    ])->done(null, function ($e) {
        echo (string)$e;
    });
}, function ($error): void {
    echo (string)$error;
});

$loop->run();
