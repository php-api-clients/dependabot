<?php declare(strict_types=1);

namespace ApiClients\Client\Dependabot\Resource\Async\Account;

use ApiClients\Client\Dependabot\Resource\Account\Attributes as BaseAttributes;

class Attributes extends BaseAttributes
{
    public function refresh(): Attributes
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
