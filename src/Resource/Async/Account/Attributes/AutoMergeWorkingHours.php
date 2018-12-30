<?php declare(strict_types=1);

namespace ApiClients\Client\Dependabot\Resource\Async\Account\Attributes;

use ApiClients\Client\Dependabot\Resource\Account\Attributes\AutoMergeWorkingHours as BaseAutoMergeWorkingHours;

class AutoMergeWorkingHours extends BaseAutoMergeWorkingHours
{
    public function refresh(): AutoMergeWorkingHours
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
