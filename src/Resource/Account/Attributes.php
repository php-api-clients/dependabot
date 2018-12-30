<?php declare(strict_types=1);

namespace ApiClients\Client\Dependabot\Resource\Account;

use ApiClients\Foundation\Hydrator\Annotation\Collection;
use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Rename;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @Collection(
 *     automerge_working_hours="Attributes\AutoMergeWorkingHours"
 * )
 * @Rename(
 *     github_id="github-id",
 *     github_login="github-login",
 *     github_account_type="github-account-type",
 *     access_granted_to_all_repos="access-granted-to-all-repos",
 *     current_installation_id="current-installation-id",
 *     plan_name="plan-name",
 *     plan_number="plan-number",
 *     free_trial_end_date="free-trial-end-date",
 *     automatically_rebase_prs="automatically-rebase-prs",
 *     update_run_time="update-run-time",
 *     create_merge_commits="create-merge-commits",
 *     weekly_update_run_day="weekly-update-run-day",
 *     limit_initial_update_runs="limit-initial-update-runs",
 *     automerge_working_hours="automerge-working-hours"
 * )
 * @EmptyResource("Account\EmptyAttributes")
 */
abstract class Attributes extends AbstractResource implements AttributesInterface
{
    /**
     * @var int
     */
    protected $github_id;

    /**
     * @var string
     */
    protected $github_login;

    /**
     * @var string
     */
    protected $github_account_type;

    /**
     * @var bool
     */
    protected $access_granted_to_all_repos;

    /**
     * @var int
     */
    protected $current_installation_id;

    /**
     * @var string
     */
    protected $plan_name;

    /**
     * @var int
     */
    protected $plan_number;

    /**
     * @var string
     */
    protected $free_trial_end_date;

    /**
     * @var bool
     */
    protected $automatically_rebase_prs;

    /**
     * @var string
     */
    protected $update_run_time;

    /**
     * @var bool
     */
    protected $create_merge_commits;

    /**
     * @var string
     */
    protected $weekly_update_run_day;

    /**
     * @var bool
     */
    protected $limit_initial_update_runs;

    /**
     * @var Attributes\AutoMergeWorkingHours
     */
    protected $automerge_working_hours;

    /**
     * @return int
     */
    public function githubId(): int
    {
        return $this->github_id;
    }

    /**
     * @return string
     */
    public function githubLogin(): string
    {
        return $this->github_login;
    }

    /**
     * @return string
     */
    public function githubAccountType(): string
    {
        return $this->github_account_type;
    }

    /**
     * @return bool
     */
    public function accessGrantedToAllRepos(): bool
    {
        return $this->access_granted_to_all_repos;
    }

    /**
     * @return int
     */
    public function currentInstallationId(): int
    {
        return $this->current_installation_id;
    }

    /**
     * @return string
     */
    public function planName(): string
    {
        return $this->plan_name;
    }

    /**
     * @return int
     */
    public function planNumber(): int
    {
        return $this->plan_number;
    }

    /**
     * @return string
     */
    public function freeTrialEndDate(): string
    {
        return $this->free_trial_end_date;
    }

    /**
     * @return bool
     */
    public function automaticallyRebasePrs(): bool
    {
        return $this->automatically_rebase_prs;
    }

    /**
     * @return string
     */
    public function updateRunTime(): string
    {
        return $this->update_run_time;
    }

    /**
     * @return bool
     */
    public function createMergeCommits(): bool
    {
        return $this->create_merge_commits;
    }

    /**
     * @return string
     */
    public function weeklyUpdateRunDay(): string
    {
        return $this->weekly_update_run_day;
    }

    /**
     * @return bool
     */
    public function limitInitialUpdateRuns(): bool
    {
        return $this->limit_initial_update_runs;
    }

    /**
     * @return Attributes\AutoMergeWorkingHours
     */
    public function automergeWorkingHours(): Attributes\AutoMergeWorkingHours
    {
        return $this->automerge_working_hours;
    }
}
