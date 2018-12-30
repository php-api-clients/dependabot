<?php declare(strict_types=1);

namespace ApiClients\Client\Dependabot\Resource;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyRepository implements RepositoryInterface, EmptyResourceInterface
{
    /**
     * @return int
     */
    public function id(): int
    {
        return null;
    }

    /**
     * @return Repository\Attributes
     */
    public function attributes(): Repository\Attributes
    {
        return null;
    }
}
