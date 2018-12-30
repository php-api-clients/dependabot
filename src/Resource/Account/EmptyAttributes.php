<?php declare(strict_types=1);

namespace ApiClients\Client\Dependabot\Resource\Account;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyAttributes implements AttributesInterface, EmptyResourceInterface
{
    /**
     * @return int
     */
    public function githubId(): int
    {
        return null;
    }

    /**
     * @return string
     */
    public function githubLogin(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function githubAccountType(): string
    {
        return null;
    }

    /**
     * @return bool
     */
    public function accessGrantedToAllRepos(): bool
    {
        return null;
    }

    /**
     * @return int
     */
    public function currentInstallationId(): int
    {
        return null;
    }

    /**
     * @return string
     */
    public function planName(): string
    {
        return null;
    }

    /**
     * @return int
     */
    public function planNumber(): int
    {
        return null;
    }

    /**
     * @return string
     */
    public function freeTrialEndDate(): string
    {
        return null;
    }

    /**
     * @return bool
     */
    public function automaticallyRebasePrs(): bool
    {
        return null;
    }

    /**
     * @return string
     */
    public function updateRunTime(): string
    {
        return null;
    }

    /**
     * @return bool
     */
    public function createMergeCommits(): bool
    {
        return null;
    }

    /**
     * @return string
     */
    public function weeklyUpdateRunDay(): string
    {
        return null;
    }

    /**
     * @return bool
     */
    public function limitInitialUpdateRuns(): bool
    {
        return null;
    }

    /**
     * @return Attributes\AutoMergeWorkingHours
     */
    public function automergeWorkingHours(): Attributes\AutoMergeWorkingHours
    {
        return null;
    }
}
