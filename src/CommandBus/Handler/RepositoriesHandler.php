<?php

declare(strict_types=1);

namespace ApiClients\Client\Dependabot\CommandBus\Handler;

use ApiClients\Client\Dependabot\CommandBus\Command\RepositoriesCommand;
use ApiClients\Client\Dependabot\Resource\RepositoryInterface;
use ApiClients\Tools\Services\Client\FetchAndHydrateService;
use ApiClients\Tools\Services\Client\FetchAndIterateService;
use React\Promise\PromiseInterface;
use function React\Promise\resolve;

final class RepositoriesHandler
{
    /**
     * @var FetchAndHydrateService
     */
    private $service;

    /**
     * @param FetchAndIterateService $service
     */
    public function __construct(FetchAndIterateService $service)
    {
        $this->service = $service;
    }

    /**
     * @param  RepositoriesCommand $command
     * @return PromiseInterface
     */
    public function handle(RepositoriesCommand $command): PromiseInterface
    {
        return resolve($this->service->iterate(
            'repos?account-id=' . $command->getGithubId() .
                '&account-type=' . $command->getGithubAccountType(),
            'data',
            RepositoryInterface::HYDRATE_CLASS
        ));
    }
}
