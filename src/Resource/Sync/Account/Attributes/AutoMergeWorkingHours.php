<?php declare(strict_types=1);

namespace ApiClients\Client\Dependabot\Resource\Sync\Account\Attributes;

use ApiClients\Client\Dependabot\Resource\Account\Attributes\AutoMergeWorkingHours as BaseAutoMergeWorkingHours;
use ApiClients\Client\Dependabot\Resource\Account\Attributes\AutoMergeWorkingHoursInterface;
use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;

class AutoMergeWorkingHours extends BaseAutoMergeWorkingHours
{
    public function refresh(): AutoMergeWorkingHours
    {
        return $this->wait($this->handleCommand(new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this))->then(function (AutoMergeWorkingHoursInterface $autoMergeWorkingHours) {
            return $autoMergeWorkingHours->refresh();
        }));
    }
}
