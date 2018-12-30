<?php declare(strict_types=1);

namespace ApiClients\Client\Dependabot\Resource\Repository;

use ApiClients\Foundation\Resource\ResourceInterface;

interface AttributesInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Repository\\Attributes';

    /**
     * @return string
     */
    public function name(): string;

    /**
     * @return bool
     */
    public function private(): bool;

    /**
     * @return bool
     */
    public function fork(): bool;

    /**
     * @return int
     */
    public function githubId(): int;

    /**
     * @return string
     */
    public function installationState(): string;

    /**
     * @return string
     */
    public function githubUrl(): string;

    /**
     * @return string
     */
    public function primaryLanguage(): string;

    /**
     * @return string
     */
    public function defaultBranch(): string;
}
