<?php

declare(strict_types=1);

namespace ApiClients\Client\Dependabot\CommandBus\Handler;

use ApiClients\Client\Dependabot\CommandBus\Command\AccountsCommand;
use ApiClients\Client\Dependabot\Resource\AccountInterface;
use ApiClients\Tools\Services\Client\FetchAndHydrateService;
use ApiClients\Tools\Services\Client\FetchAndIterateService;
use React\Promise\PromiseInterface;
use function React\Promise\resolve;

final class AccountsHandler
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
     * @param  AccountsCommand  $command
     * @return PromiseInterface
     */
    public function handle(AccountsCommand $command): PromiseInterface
    {
        return resolve($this->service->iterate('accounts', 'data', AccountInterface::HYDRATE_CLASS));
    }
}
