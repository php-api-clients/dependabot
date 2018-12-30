<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Dependabot\Resource\Sync;

use ApiClients\Client\Dependabot\Resource\Sync\EmptyRepository;
use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;

/**
 * @internal
 */
final class EmptyRepositoryTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Sync';
    }

    public function getClass(): string
    {
        return EmptyRepository::class;
    }
}
