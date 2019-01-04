<?php declare(strict_types=1);

namespace ApiClients\Client\Dependabot\Resource\Sync\Repository;

use ApiClients\Client\Dependabot\Resource\Repository\UpdateConfigs as BaseUpdateConfigs;
use ApiClients\Client\Dependabot\Resource\Repository\UpdateConfigsInterface;
use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;

class UpdateConfigs extends BaseUpdateConfigs
{
    public function refresh(): UpdateConfigs
    {
        return $this->wait($this->handleCommand(new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this))->then(function (UpdateConfigsInterface $updateConfigs) {
            return $updateConfigs->refresh();
        }));
    }
}
