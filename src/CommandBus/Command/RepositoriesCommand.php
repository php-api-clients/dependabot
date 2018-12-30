<?php

declare(strict_types=1);

namespace ApiClients\Client\Dependabot\CommandBus\Command;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Dependabot\CommandBus\Handler\RepositoriesHandler")
 */
final class RepositoriesCommand
{
    /** @var int */
    private $githubId;

    /** @var string */
    private $githubAccountType;

    /**
     * @param int    $githubId
     * @param string $githubAccountType
     */
    public function __construct(int $githubId, string $githubAccountType)
    {
        $this->githubId = $githubId;
        $this->githubAccountType = $githubAccountType;
    }

    /**
     * @return int
     */
    public function getGithubId(): int
    {
        return $this->githubId;
    }

    /**
     * @return string
     */
    public function getGithubAccountType(): string
    {
        return $this->githubAccountType;
    }
}
