<?php declare(strict_types=1);

namespace ApiClients\Client\Dependabot\Resource\Async\Repository;

use ApiClients\Client\Dependabot\Resource\Repository\UpdateConfigs as BaseUpdateConfigs;

class UpdateConfigs extends BaseUpdateConfigs
{
    public function refresh(): UpdateConfigs
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
