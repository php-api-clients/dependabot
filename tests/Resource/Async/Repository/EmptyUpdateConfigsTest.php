<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Dependabot\Resource\Async\Repository;

use ApiClients\Client\Dependabot\Resource\Async\Repository\EmptyUpdateConfigs;
use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;

/**
 * @internal
 */
final class EmptyUpdateConfigsTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Async';
    }

    public function getClass(): string
    {
        return EmptyUpdateConfigs::class;
    }
}
