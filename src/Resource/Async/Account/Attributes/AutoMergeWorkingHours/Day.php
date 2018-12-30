<?php declare(strict_types=1);

namespace ApiClients\Client\Dependabot\Resource\Async\Account\Attributes\AutoMergeWorkingHours;

use ApiClients\Client\Dependabot\Resource\Account\Attributes\AutoMergeWorkingHours\Day as BaseDay;

class Day extends BaseDay
{
    public function refresh(): Day
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
