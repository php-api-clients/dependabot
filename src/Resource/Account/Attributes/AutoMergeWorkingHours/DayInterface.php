<?php declare(strict_types=1);

namespace ApiClients\Client\Dependabot\Resource\Account\Attributes\AutoMergeWorkingHours;

use ApiClients\Foundation\Resource\ResourceInterface;

interface DayInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Account\\Attributes\\AutoMergeWorkingHours\\Day';

    /**
     * @return string
     */
    public function end(): string;

    /**
     * @return string
     */
    public function start(): string;

    /**
     * @return bool
     */
    public function workingDay(): bool;
}
