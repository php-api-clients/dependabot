<?php declare(strict_types=1);

namespace ApiClients\Client\Dependabot\Resource\Async;

use ApiClients\Client\Dependabot\Resource\Repository as BaseRepository;

class Repository extends BaseRepository
{
    public function refresh(): Repository
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
