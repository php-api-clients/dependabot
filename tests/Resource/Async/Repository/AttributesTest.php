<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Dependabot\Resource\Async\Repository;

use ApiClients\Client\Dependabot\ApiSettings;
use ApiClients\Client\Dependabot\Resource\Repository\Attributes;
use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;

/**
 * @internal
 */
class AttributesTest extends AbstractResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Async';
    }

    public function getClass(): string
    {
        return Attributes::class;
    }

    public function getNamespace(): string
    {
        return ApiSettings::NAMESPACE;
    }
}
