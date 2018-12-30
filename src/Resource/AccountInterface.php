<?php declare(strict_types=1);

namespace ApiClients\Client\Dependabot\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;

interface AccountInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Account';

    /**
     * @return int
     */
    public function id(): int;

    /**
     * @return Account\Attributes
     */
    public function attributes(): Account\Attributes;
}
