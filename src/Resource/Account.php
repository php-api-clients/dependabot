<?php declare(strict_types=1);

namespace ApiClients\Client\Dependabot\Resource;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Nested;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @Nested(
 *     attributes="Account\Attributes"
 * )
 * @EmptyResource("EmptyAccount")
 */
abstract class Account extends AbstractResource implements AccountInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var Account\Attributes
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
     * @return Account\Attributes
     */
    public function attributes(): Account\Attributes
    {
        return $this->attributes;
    }
}
