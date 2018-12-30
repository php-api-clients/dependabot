<?php declare(strict_types=1);

use ApiClients\Client\Dependabot\Client;
use function ApiClients\Foundation\resource_pretty_print;

require \dirname(__DIR__) . \DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$client = Client::create(require 'options.php');

foreach ($client->accounts() as $account) {
    resource_pretty_print($account);
}
