<?php declare(strict_types=1);

use ApiClients\Client\Dependabot\AsyncClient;
use ApiClients\Client\Dependabot\Resource\AccountInterface;
use React\EventLoop\Factory;
use function ApiClients\Foundation\resource_pretty_print;

require \dirname(__DIR__) . \DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();
$client = AsyncClient::create($loop, require 'options.php');

$client->account(20679221)->done(function (AccountInterface $account): void {
    resource_pretty_print($account);
});

$loop->run();
