<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Dependabot\Resource\Sync\Account\Attributes;

use ApiClients\Client\Dependabot\Resource\Sync\Account\Attributes\EmptyAutoMergeWorkingHours;
use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;

/**
 * @internal
 */
final class EmptyAutoMergeWorkingHoursTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Sync';
    }

    public function getClass(): string
    {
        return EmptyAutoMergeWorkingHours::class;
    }
}
