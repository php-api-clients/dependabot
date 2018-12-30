<?php declare(strict_types=1);

namespace ApiClients\Client\Dependabot\Resource\Account;

use ApiClients\Foundation\Resource\ResourceInterface;

interface AttributesInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Account\\Attributes';

    /**
     * @return int
     */
    public function githubId(): int;

    /**
     * @return string
     */
    public function githubLogin(): string;

    /**
     * @return string
     */
    public function githubAccountType(): string;

    /**
     * @return bool
     */
    public function accessGrantedToAllRepos(): bool;

    /**
     * @return int
     */
    public function currentInstallationId(): int;

    /**
     * @return string
     */
    public function planName(): string;

    /**
     * @return int
     */
    public function planNumber(): int;

    /**
     * @return string
     */
    public function freeTrialEndDate(): string;

    /**
     * @return bool
     */
    public function automaticallyRebasePrs(): bool;

    /**
     * @return string
     */
    public function updateRunTime(): string;

    /**
     * @return bool
     */
    public function createMergeCommits(): bool;

    /**
     * @return string
     */
    public function weeklyUpdateRunDay(): string;

    /**
     * @return bool
     */
    public function limitInitialUpdateRuns(): bool;

    /**
     * @return Attributes\AutoMergeWorkingHours
     */
    public function automergeWorkingHours(): Attributes\AutoMergeWorkingHours;
}
