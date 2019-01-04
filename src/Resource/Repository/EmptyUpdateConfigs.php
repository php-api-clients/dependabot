<?php declare(strict_types=1);

namespace ApiClients\Client\Dependabot\Resource\Repository;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyUpdateConfigs implements UpdateConfigsInterface, EmptyResourceInterface
{
    /**
     * @return int
     */
    public function id(): int
    {
        return null;
    }

    /**
     * @return Repository\UpdateConfigs\Attributes
     */
    public function attributes(): Repository\UpdateConfigs\Attributes
    {
        return null;
    }
}
