<?php declare(strict_types=1);

namespace ApiClients\Client\Dependabot\Resource\Repository;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyAttributes implements AttributesInterface, EmptyResourceInterface
{
    /**
     * @return string
     */
    public function name(): string
    {
        return null;
    }

    /**
     * @return bool
     */
    public function private(): bool
    {
        return null;
    }

    /**
     * @return bool
     */
    public function fork(): bool
    {
        return null;
    }

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
    public function installationState(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function githubUrl(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function primaryLanguage(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function defaultBranch(): string
    {
        return null;
    }
}
