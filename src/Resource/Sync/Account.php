<?php declare(strict_types=1);

namespace ApiClients\Client\Dependabot\Resource\Sync;

use ApiClients\Client\Dependabot\Resource\Account as BaseAccount;
use ApiClients\Client\Dependabot\Resource\AccountInterface;
use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;

class Account extends BaseAccount
{
    public function refresh(): Account
    {
        return $this->wait($this->handleCommand(new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this))->then(function (AccountInterface $account) {
            return $account->refresh();
        }));
    }
}
