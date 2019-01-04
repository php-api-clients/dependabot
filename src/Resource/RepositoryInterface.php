<?php declare(strict_types=1);

namespace ApiClients\Client\Dependabot\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;

interface RepositoryInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Repository';

    /**
     * @return int
     */
    public function id(): int;

    /**
     * @return Repository\Attributes
     */
    public function attributes(): Repository\Attributes;

    /**
     * @return Repository\UpdateConfigs
     */
    public function updateConfigs(): array;
}
