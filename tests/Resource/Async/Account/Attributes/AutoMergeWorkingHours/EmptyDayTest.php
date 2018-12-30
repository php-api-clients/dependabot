<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Dependabot\Resource\Async\Account\Attributes\AutoMergeWorkingHours;

use ApiClients\Client\Dependabot\Resource\Async\Account\Attributes\AutoMergeWorkingHours\EmptyDay;
use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;

/**
 * @internal
 */
final class EmptyDayTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Async';
    }

    public function getClass(): string
    {
        return EmptyDay::class;
    }
}
