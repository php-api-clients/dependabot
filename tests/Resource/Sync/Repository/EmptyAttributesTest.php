<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Dependabot\Resource\Sync\Repository;

use ApiClients\Client\Dependabot\Resource\Sync\Repository\EmptyAttributes;
use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;

/**
 * @internal
 */
final class EmptyAttributesTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Sync';
    }

    public function getClass(): string
    {
        return EmptyAttributes::class;
    }
}
