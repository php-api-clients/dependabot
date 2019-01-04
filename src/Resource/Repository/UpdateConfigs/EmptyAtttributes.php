<?php declare(strict_types=1);

namespace ApiClients\Client\Dependabot\Resource\Repository\UpdateConfigs;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyAtttributes implements AtttributesInterface, EmptyResourceInterface
{
    /**
     * @return string
     */
    public function language(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function directory(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function packageManager(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function updateSchedule(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function targetBranch(): string
    {
        return null;
    }

    /**
     * @return bool
     */
    public function lockfileOnly(): bool
    {
        return null;
    }

    /**
     * @return bool
     */
    public function securityUpdatesOnly(): bool
    {
        return null;
    }

    /**
     * @return bool
     */
    public function updateSubdependencies(): bool
    {
        return null;
    }

    /**
     * @return bool
     */
    public function automergeRuleRuntimeDeps(): bool
    {
        return null;
    }

    /**
     * @return bool
     */
    public function automergeRuleDevelopmentDeps(): bool
    {
        return null;
    }

    /**
     * @return bool
     */
    public function requirementsUpdateStrategy(): bool
    {
        return null;
    }
}
