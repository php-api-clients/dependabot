<?php declare(strict_types=1);

namespace ApiClients\Client\Dependabot\Resource\Sync;

use ApiClients\Client\Dependabot\Resource\Repository as BaseRepository;
use ApiClients\Client\Dependabot\Resource\RepositoryInterface;
use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;

class Repository extends BaseRepository
{
    public function refresh(): Repository
    {
        return $this->wait($this->handleCommand(new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this))->then(function (RepositoryInterface $repository) {
            return $repository->refresh();
        }));
    }
}
