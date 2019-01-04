<?php declare(strict_types=1);

namespace ApiClients\Client\Dependabot\Resource\Repository\UpdateConfigs;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Rename;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @Rename(
 *     package_manager="package-manager",
 *     update_schedule="update-schedule",
 *     target_branch="target-branch",
 *     lockfile_only="lockfile-only",
 *     security_updates_only="security-updates-only",
 *     update_subdependencies="update-subdependencies",
 *     automerge_rule_runtime_deps="automerge-rule-runtime-deps",
 *     automerge_rule_development_deps="automerge-rule-development-deps",
 *     requirements_update_strategy="requirements-update-strategy"
 * )
 * @EmptyResource("Repository\UpdateConfigs\EmptyAtttributes")
 */
abstract class Atttributes extends AbstractResource implements AtttributesInterface
{
    /**
     * @var string
     */
    protected $language;

    /**
     * @var string
     */
    protected $directory;

    /**
     * @var string
     */
    protected $package_manager;

    /**
     * @var string
     */
    protected $update_schedule;

    /**
     * @var string
     */
    protected $target_branch;

    /**
     * @var bool
     */
    protected $lockfile_only;

    /**
     * @var bool
     */
    protected $security_updates_only;

    /**
     * @var bool
     */
    protected $update_subdependencies;

    /**
     * @var bool
     */
    protected $automerge_rule_runtime_deps;

    /**
     * @var bool
     */
    protected $automerge_rule_development_deps;

    /**
     * @var bool
     */
    protected $requirements_update_strategy;

    /**
     * @return string
     */
    public function language(): string
    {
        return $this->language;
    }

    /**
     * @return string
     */
    public function directory(): string
    {
        return $this->directory;
    }

    /**
     * @return string
     */
    public function packageManager(): string
    {
        return $this->package_manager;
    }

    /**
     * @return string
     */
    public function updateSchedule(): string
    {
        return $this->update_schedule;
    }

    /**
     * @return string
     */
    public function targetBranch(): string
    {
        return $this->target_branch;
    }

    /**
     * @return bool
     */
    public function lockfileOnly(): bool
    {
        return $this->lockfile_only;
    }

    /**
     * @return bool
     */
    public function securityUpdatesOnly(): bool
    {
        return $this->security_updates_only;
    }

    /**
     * @return bool
     */
    public function updateSubdependencies(): bool
    {
        return $this->update_subdependencies;
    }

    /**
     * @return bool
     */
    public function automergeRuleRuntimeDeps(): bool
    {
        return $this->automerge_rule_runtime_deps;
    }

    /**
     * @return bool
     */
    public function automergeRuleDevelopmentDeps(): bool
    {
        return $this->automerge_rule_development_deps;
    }

    /**
     * @return bool
     */
    public function requirementsUpdateStrategy(): bool
    {
        return $this->requirements_update_strategy;
    }
}
