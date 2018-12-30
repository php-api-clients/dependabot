<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\Dependabot\CommandBus\Handler;

use ApiClients\Client\Dependabot\CommandBus\Command\StreamCommand;
use ApiClients\Client\Dependabot\CommandBus\Handler\StreamHandler;
use ApiClients\Client\Skeleton\Resource\ExampleInterface;
use ApiClients\Tools\Services\Client\FetchAndIterateService;
use ApiClients\Tools\TestUtilities\TestCase;

/**
 * @internal
 */
final class StreamHandlerTest extends TestCase
{
    public function testBroadcasts(): void
    {
        $command = new StreamCommand('input');
        $service = $this->prophesize(FetchAndIterateService::class);
        $service->iterate('stream/input', 'stream', ExampleInterface::HYDRATE_CLASS)->shouldBeCalled();
        $handler = new StreamHandler($service->reveal());
        $handler->handle($command);
    }
}
