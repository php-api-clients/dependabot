<?php declare(strict_types=1);

namespace ApiClients\Client\Dependabot\Resource\Account\Attributes;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Nested;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @Nested(
 *     monday="Account\Attributes\AutoMergeWorkingHours\Day",
 *     tuesday="Account\Attributes\AutoMergeWorkingHours\Day",
 *     wednesday="Account\Attributes\AutoMergeWorkingHours\Day",
 *     thursday="Account\Attributes\AutoMergeWorkingHours\Day",
 *     friday="Account\Attributes\AutoMergeWorkingHours\Day",
 *     saterday="Account\Attributes\AutoMergeWorkingHours\Day",
 *     sunday="Account\Attributes\AutoMergeWorkingHours\Day"
 * )
 * @EmptyResource("Account\Attributes\EmptyAutoMergeWorkingHours")
 */
abstract class AutoMergeWorkingHours extends AbstractResource implements AutoMergeWorkingHoursInterface
{
    /**
     * @var Account\Attributes\AutoMergeWorkingHours\Day
     */
    protected $monday;

    /**
     * @var Account\Attributes\AutoMergeWorkingHours\Day
     */
    protected $tuesday;

    /**
     * @var Account\Attributes\AutoMergeWorkingHours\Day
     */
    protected $wednesday;

    /**
     * @var Account\Attributes\AutoMergeWorkingHours\Day
     */
    protected $thursday;

    /**
     * @var Account\Attributes\AutoMergeWorkingHours\Day
     */
    protected $friday;

    /**
     * @var Account\Attributes\AutoMergeWorkingHours\Day
     */
    protected $saterday;

    /**
     * @var Account\Attributes\AutoMergeWorkingHours\Day
     */
    protected $sunday;

    /**
     * @return Account\Attributes\AutoMergeWorkingHours\Day
     */
    public function monday(): Account\Attributes\AutoMergeWorkingHours\Day
    {
        return $this->monday;
    }

    /**
     * @return Account\Attributes\AutoMergeWorkingHours\Day
     */
    public function tuesday(): Account\Attributes\AutoMergeWorkingHours\Day
    {
        return $this->tuesday;
    }

    /**
     * @return Account\Attributes\AutoMergeWorkingHours\Day
     */
    public function wednesday(): Account\Attributes\AutoMergeWorkingHours\Day
    {
        return $this->wednesday;
    }

    /**
     * @return Account\Attributes\AutoMergeWorkingHours\Day
     */
    public function thursday(): Account\Attributes\AutoMergeWorkingHours\Day
    {
        return $this->thursday;
    }

    /**
     * @return Account\Attributes\AutoMergeWorkingHours\Day
     */
    public function friday(): Account\Attributes\AutoMergeWorkingHours\Day
    {
        return $this->friday;
    }

    /**
     * @return Account\Attributes\AutoMergeWorkingHours\Day
     */
    public function saterday(): Account\Attributes\AutoMergeWorkingHours\Day
    {
        return $this->saterday;
    }

    /**
     * @return Account\Attributes\AutoMergeWorkingHours\Day
     */
    public function sunday(): Account\Attributes\AutoMergeWorkingHours\Day
    {
        return $this->sunday;
    }
}
