<?php declare(strict_types=1);

namespace ApiClients\Client\Dependabot\Resource;

use ApiClients\Foundation\Hydrator\Annotation\Collection;
use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Nested;
use ApiClients\Foundation\Hydrator\Annotation\Rename;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @Collection(
 *     update_configs="Repository\UpdateConfigs"
 * )
 * @Nested(
 *     attributes="Repository\Attributes"
 * )
 * @Rename(
 *     update_configs="update-configs"
 * )
 * @EmptyResource("EmptyRepository")
 */
abstract class Repository extends AbstractResource implements RepositoryInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var Repository\Attributes
     */
    protected $attributes;

    /**
     * @var Repository\UpdateConfigs[]
     */
    protected $update_configs;

    /**
     * @return int
     */
    public function id(): int
    {
        return $this->id;
    }

    /**
     * @return Repository\Attributes
     */
    public function attributes(): Repository\Attributes
    {
        return $this->attributes;
    }

    public function updateConfigs(): array
    {
        return $this->update_configs;
    }
}
