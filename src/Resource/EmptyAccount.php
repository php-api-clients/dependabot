<?php declare(strict_types=1);

namespace ApiClients\Client\Dependabot\Resource;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyAccount implements AccountInterface, EmptyResourceInterface
{
    /**
     * @return int
     */
    public function id(): int
    {
        return null;
    }

    /**
     * @return Account\Attributes
     */
    public function attributes(): Account\Attributes
    {
        return null;
    }
}
