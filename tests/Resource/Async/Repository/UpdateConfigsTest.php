<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Dependabot\Resource\Async\Repository;

use ApiClients\Client\Dependabot\ApiSettings;
use ApiClients\Client\Dependabot\Resource\Repository\UpdateConfigs;
use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;

/**
 * @internal
 */
class UpdateConfigsTest extends AbstractResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Async';
    }

    public function getClass(): string
    {
        return UpdateConfigs::class;
    }

    public function getNamespace(): string
    {
        return ApiSettings::NAMESPACE;
    }
}
