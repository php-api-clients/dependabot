<?php declare(strict_types=1);

namespace ApiClients\Client\Dependabot\Resource\Repository;

use ApiClients\Foundation\Resource\ResourceInterface;

interface UpdateConfigsInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Repository\\UpdateConfigs';

    /**
     * @return int
     */
    public function id(): int;

    /**
     * @return Repository\UpdateConfigs\Attributes
     */
    public function attributes(): Repository\UpdateConfigs\Attributes;
}
