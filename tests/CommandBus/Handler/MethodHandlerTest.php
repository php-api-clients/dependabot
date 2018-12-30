<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\Dependabot\CommandBus\Handler;

use ApiClients\Client\Dependabot\CommandBus\Command\MethodCommand;
use ApiClients\Client\Dependabot\CommandBus\Handler\MethodHandler;
use ApiClients\Client\Skeleton\Resource\ExampleInterface;
use ApiClients\Tools\Services\Client\FetchAndHydrateService;
use ApiClients\Tools\TestUtilities\TestCase;

/**
 * @internal
 */
final class MethodHandlerTest extends TestCase
{
    public function testRepositoryKey(): void
    {
        $command = new MethodCommand('input');
        $service = $this->prophesize(FetchAndHydrateService::class);
        $service->fetch('example/input', 'example', ExampleInterface::HYDRATE_CLASS)->shouldBeCalled();
        $handler = new MethodHandler($service->reveal());
        $handler->handle($command);
    }
}
