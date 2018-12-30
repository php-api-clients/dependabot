<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Dependabot\Resource\Sync;

use ApiClients\Client\Dependabot\ApiSettings;
use ApiClients\Client\Dependabot\Resource\Repository;
use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;

/**
 * @internal
 */
class RepositoryTest extends AbstractResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Sync';
    }

    public function getClass(): string
    {
        return Repository::class;
    }

    public function getNamespace(): string
    {
        return ApiSettings::NAMESPACE;
    }
}
