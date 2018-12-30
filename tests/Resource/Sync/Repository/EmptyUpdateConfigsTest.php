<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Dependabot\Resource\Sync\Repository;

use ApiClients\Client\Dependabot\Resource\Sync\Repository\EmptyUpdateConfigs;
use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;

/**
 * @internal
 */
final class EmptyUpdateConfigsTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Sync';
    }

    public function getClass(): string
    {
        return EmptyUpdateConfigs::class;
    }
}
