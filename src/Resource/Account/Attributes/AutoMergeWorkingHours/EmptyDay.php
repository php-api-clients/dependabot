<?php declare(strict_types=1);

namespace ApiClients\Client\Dependabot\Resource\Account\Attributes\AutoMergeWorkingHours;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyDay implements DayInterface, EmptyResourceInterface
{
    /**
     * @return string
     */
    public function end(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function start(): string
    {
        return null;
    }

    /**
     * @return bool
     */
    public function workingDay(): bool
    {
        return null;
    }
}
