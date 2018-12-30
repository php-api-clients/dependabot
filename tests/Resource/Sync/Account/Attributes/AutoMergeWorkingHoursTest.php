<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Dependabot\Resource\Sync\Account\Attributes;

use ApiClients\Client\Dependabot\ApiSettings;
use ApiClients\Client\Dependabot\Resource\Account\Attributes\AutoMergeWorkingHours;
use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;

/**
 * @internal
 */
class AutoMergeWorkingHoursTest extends AbstractResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Sync';
    }

    public function getClass(): string
    {
        return AutoMergeWorkingHours::class;
    }

    public function getNamespace(): string
    {
        return ApiSettings::NAMESPACE;
    }
}
