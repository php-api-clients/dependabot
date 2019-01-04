<?php declare(strict_types=1);

namespace ApiClients\Client\Dependabot\Resource\Repository;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Nested;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @Nested(
 *     attributes="Repository\UpdateConfigs\Attributes"
 * )
 * @EmptyResource("Repository\EmptyUpdateConfigs")
 */
abstract class UpdateConfigs extends AbstractResource implements UpdateConfigsInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var Repository\UpdateConfigs\Attributes
     */
    protected $attributes;

    /**
     * @return int
     */
    public function id(): int
    {
        return $this->id;
    }

    /**
     * @return Repository\UpdateConfigs\Attributes
     */
    public function attributes(): UpdateConfigs\Attributes
    {
        return $this->attributes;
    }
}
