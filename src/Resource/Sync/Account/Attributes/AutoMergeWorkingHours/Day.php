<?php declare(strict_types=1);

namespace ApiClients\Client\Dependabot\Resource\Sync\Account\Attributes\AutoMergeWorkingHours;

use ApiClients\Client\Dependabot\Resource\Account\Attributes\AutoMergeWorkingHours\Day as BaseDay;
use ApiClients\Client\Dependabot\Resource\Account\Attributes\AutoMergeWorkingHours\DayInterface;
use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;

class Day extends BaseDay
{
    public function refresh(): Day
    {
        return $this->wait($this->handleCommand(new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this))->then(function (DayInterface $day) {
            return $day->refresh();
        }));
    }
}
