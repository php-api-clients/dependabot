<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Dependabot\Resource\Async;

use ApiClients\Client\Dependabot\Resource\Async\EmptyRepository;
use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;

/**
 * @internal
 */
final class EmptyRepositoryTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Async';
    }

    public function getClass(): string
    {
        return EmptyRepository::class;
    }
}
