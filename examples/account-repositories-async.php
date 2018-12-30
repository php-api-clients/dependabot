<?php declare(strict_types=1);

use ApiClients\Client\Dependabot\AsyncClient;
use ApiClients\Client\Dependabot\Resource\Async\Account;
use React\EventLoop\Factory;
use function ApiClients\Foundation\resource_pretty_print;
use function ApiClients\Tools\Rx\unwrapObservableFromPromise;

require \dirname(__DIR__) . \DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();
$client = AsyncClient::create($loop, require 'options.php');

unwrapObservableFromPromise($client->account(20679221)->then(function (Account $account) {
    return $account->repositories();
}))->subscribe(function ($example): void {
    resource_pretty_print($example);
}, function ($error): void {
    echo (string)$error;
});

$loop->run();
