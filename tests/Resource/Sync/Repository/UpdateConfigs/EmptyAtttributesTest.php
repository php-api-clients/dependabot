<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Dependabot\Resource\Sync\Repository\UpdateConfigs;

use ApiClients\Client\Dependabot\Resource\Sync\Repository\UpdateConfigs\EmptyAtttributes;
use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;

/**
 * @internal
 */
final class EmptyAtttributesTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Sync';
    }

    public function getClass(): string
    {
        return EmptyAtttributes::class;
    }
}
