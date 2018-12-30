<?php declare(strict_types=1);

namespace ApiClients\Client\Dependabot\Resource\Async\Repository;

use ApiClients\Client\Dependabot\Resource\Repository\Attributes as BaseAttributes;

class Attributes extends BaseAttributes
{
    public function refresh(): Attributes
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
