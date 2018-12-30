<?php declare(strict_types=1);

namespace ApiClients\Client\Dependabot\Resource\Account\Attributes;

use ApiClients\Foundation\Resource\ResourceInterface;

interface AutoMergeWorkingHoursInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Account\\Attributes\\AutoMergeWorkingHours';

    /**
     * @return Account\Attributes\AutoMergeWorkingHours\Day
     */
    public function monday(): Account\Attributes\AutoMergeWorkingHours\Day;

    /**
     * @return Account\Attributes\AutoMergeWorkingHours\Day
     */
    public function tuesday(): Account\Attributes\AutoMergeWorkingHours\Day;

    /**
     * @return Account\Attributes\AutoMergeWorkingHours\Day
     */
    public function wednesday(): Account\Attributes\AutoMergeWorkingHours\Day;

    /**
     * @return Account\Attributes\AutoMergeWorkingHours\Day
     */
    public function thursday(): Account\Attributes\AutoMergeWorkingHours\Day;

    /**
     * @return Account\Attributes\AutoMergeWorkingHours\Day
     */
    public function friday(): Account\Attributes\AutoMergeWorkingHours\Day;

    /**
     * @return Account\Attributes\AutoMergeWorkingHours\Day
     */
    public function saterday(): Account\Attributes\AutoMergeWorkingHours\Day;

    /**
     * @return Account\Attributes\AutoMergeWorkingHours\Day
     */
    public function sunday(): Account\Attributes\AutoMergeWorkingHours\Day;
}
