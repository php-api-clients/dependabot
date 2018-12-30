<?php declare(strict_types=1);

namespace ApiClients\Client\Dependabot\Resource\Async;

use ApiClients\Client\Dependabot\Resource\Account as BaseAccount;

class Account extends BaseAccount
{
    public function refresh(): Account
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
