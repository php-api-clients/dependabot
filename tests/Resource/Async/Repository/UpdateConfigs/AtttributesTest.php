<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Dependabot\Resource\Async\Repository\UpdateConfigs;

use ApiClients\Client\Dependabot\ApiSettings;
use ApiClients\Client\Dependabot\Resource\Repository\UpdateConfigs\Atttributes;
use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;

/**
 * @internal
 */
class AtttributesTest extends AbstractResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Async';
    }

    public function getClass(): string
    {
        return Atttributes::class;
    }

    public function getNamespace(): string
    {
        return ApiSettings::NAMESPACE;
    }
}
