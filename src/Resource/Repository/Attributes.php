<?php declare(strict_types=1);

namespace ApiClients\Client\Dependabot\Resource\Repository;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Rename;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @Rename(
 *     github_id="github-id",
 *     installation_state="installation-state",
 *     github_url="github-url",
 *     primary_language="primary-language",
 *     default_branch="default-branch"
 * )
 * @EmptyResource("Repository\EmptyAttributes")
 */
abstract class Attributes extends AbstractResource implements AttributesInterface
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var bool
     */
    protected $private;

    /**
     * @var bool
     */
    protected $fork;

    /**
     * @var int
     */
    protected $github_id;

    /**
     * @var string
     */
    protected $installation_state;

    /**
     * @var string
     */
    protected $github_url;

    /**
     * @var string
     */
    protected $primary_language;

    /**
     * @var string
     */
    protected $default_branch;

    /**
     * @return string
     */
    public function name(): string
    {
        return $this->name;
    }

    /**
     * @return bool
     */
    public function private(): bool
    {
        return $this->private;
    }

    /**
     * @return bool
     */
    public function fork(): bool
    {
        return $this->fork;
    }

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
    public function installationState(): string
    {
        return $this->installation_state;
    }

    /**
     * @return string
     */
    public function githubUrl(): string
    {
        return $this->github_url;
    }

    /**
     * @return string
     */
    public function primaryLanguage(): string
    {
        return $this->primary_language;
    }

    /**
     * @return string
     */
    public function defaultBranch(): string
    {
        return $this->default_branch;
    }
}
