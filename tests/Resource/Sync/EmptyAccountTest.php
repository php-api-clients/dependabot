<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Dependabot\Resource\Sync;

use ApiClients\Client\Dependabot\Resource\Sync\EmptyAccount;
use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;

/**
 * @internal
 */
final class EmptyAccountTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Sync';
    }

    public function getClass(): string
    {
        return EmptyAccount::class;
    }
}
