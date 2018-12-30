<?php declare(strict_types=1);

namespace ApiClients\Client\Dependabot\Resource\Account\Attributes\AutoMergeWorkingHours;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Rename;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @Rename(
 *     working_day="working-day"
 * )
 * @EmptyResource("Account\Attributes\AutoMergeWorkingHours\EmptyDay")
 */
abstract class Day extends AbstractResource implements DayInterface
{
    /**
     * @var string
     */
    protected $end;

    /**
     * @var string
     */
    protected $start;

    /**
     * @var bool
     */
    protected $working_day;

    /**
     * @return string
     */
    public function end(): string
    {
        return $this->end;
    }

    /**
     * @return string
     */
    public function start(): string
    {
        return $this->start;
    }

    /**
     * @return bool
     */
    public function workingDay(): bool
    {
        return $this->working_day;
    }
}
