<?php declare(strict_types=1);

namespace ApiClients\Client\Dependabot\Resource\Async\Repository\UpdateConfigs;

use ApiClients\Client\Dependabot\Resource\Repository\UpdateConfigs\Atttributes as BaseAtttributes;

class Atttributes extends BaseAtttributes
{
    public function refresh(): Atttributes
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
