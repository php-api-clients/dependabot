<?php declare(strict_types=1);

namespace ApiClients\Client\Dependabot\Resource\Async;

use ApiClients\Client\Dependabot\CommandBus\Command\RepositoriesCommand;
use ApiClients\Client\Dependabot\Resource\Account as BaseAccount;
use Rx\Observable;
use function ApiClients\Tools\Rx\unwrapObservableFromPromise;

class Account extends BaseAccount
{
    public function refresh(): Account
    {
        throw new \Exception('TODO: create refresh method!');
    }

    public function repositories(): Observable
    {
        return unwrapObservableFromPromise($this->handleCommand(
            new RepositoriesCommand(
                $this->attributes->githubId(),
                $this->attributes->githubAccountType()
            )
        ));
    }
}
