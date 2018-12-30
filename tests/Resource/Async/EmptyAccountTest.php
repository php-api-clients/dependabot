<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Dependabot\Resource\Async;

use ApiClients\Client\Dependabot\Resource\Async\EmptyAccount;
use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;

/**
 * @internal
 */
final class EmptyAccountTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Async';
    }

    public function getClass(): string
    {
        return EmptyAccount::class;
    }
}
