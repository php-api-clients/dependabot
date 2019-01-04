<?php declare(strict_types=1);

namespace ApiClients\Client\Dependabot\Resource\Repository\UpdateConfigs;

use ApiClients\Foundation\Resource\ResourceInterface;

interface AtttributesInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Repository\\UpdateConfigs\\Atttributes';

    /**
     * @return string
     */
    public function language(): string;

    /**
     * @return string
     */
    public function directory(): string;

    /**
     * @return string
     */
    public function packageManager(): string;

    /**
     * @return string
     */
    public function updateSchedule(): string;

    /**
     * @return string
     */
    public function targetBranch(): string;

    /**
     * @return bool
     */
    public function lockfileOnly(): bool;

    /**
     * @return bool
     */
    public function securityUpdatesOnly(): bool;

    /**
     * @return bool
     */
    public function updateSubdependencies(): bool;

    /**
     * @return bool
     */
    public function automergeRuleRuntimeDeps(): bool;

    /**
     * @return bool
     */
    public function automergeRuleDevelopmentDeps(): bool;

    /**
     * @return bool
     */
    public function requirementsUpdateStrategy(): bool;
}
