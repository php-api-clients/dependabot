<?php declare(strict_types=1);

namespace ApiClients\Client\Dependabot\Resource\Async;

use ApiClients\Client\Dependabot\CommandBus\Command\UpdateConfigCommand;
use ApiClients\Client\Dependabot\Resource\Repository as BaseRepository;
use React\Promise\PromiseInterface;

class Repository extends BaseRepository
{
    public function refresh(): Repository
    {
        throw new \Exception('TODO: create refresh method!');
    }

    public function updateConfig(int $id, array $config): PromiseInterface
    {
        return $this->handleCommand(new UpdateConfigCommand($id, $config));
    }
}
