<?php

declare(strict_types=1);

namespace ApiClients\Client\Dependabot\CommandBus\Handler;

use ApiClients\Client\Dependabot\CommandBus\Command\UpdateConfigCommand;
use ApiClients\Foundation\Transport\Service\RequestService;
use ApiClients\Middleware\Json\JsonStream;
use React\Promise\PromiseInterface;
use RingCentral\Psr7\Request;

final class UpdateConfigHandler
{
    /**
     * @var RequestService
     */
    private $requestService;

    /**
     * @param RequestService $requestService
     */
    public function __construct(RequestService $requestService)
    {
        $this->requestService = $requestService;
    }

    /**
     * @param  UpdateConfigCommand $command
     * @return PromiseInterface
     */
    public function handle(UpdateConfigCommand $command): PromiseInterface
    {
        return $this->requestService->request(
            new Request(
                'PATCH',
                'update_configs/' . $command->getConfigId(),
                [],
                new JsonStream($command->getNewConfig())
            )
        );
    }
}
