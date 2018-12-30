<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Dependabot\Resource\Async\Account\Attributes;

use ApiClients\Client\Dependabot\Resource\Async\Account\Attributes\EmptyAutoMergeWorkingHours;
use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;

/**
 * @internal
 */
final class EmptyAutoMergeWorkingHoursTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Async';
    }

    public function getClass(): string
    {
        return EmptyAutoMergeWorkingHours::class;
    }
}
