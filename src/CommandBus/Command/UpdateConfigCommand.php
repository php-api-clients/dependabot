<?php

declare(strict_types=1);

namespace ApiClients\Client\Dependabot\CommandBus\Command;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Dependabot\CommandBus\Handler\UpdateConfigHandler")
 */
final class UpdateConfigCommand
{
    /** @var int */
    private $configId;

    /** @var array */
    private $newConfig;

    /**
     * @param int $configId
     * @param array $newConfig
     */
    public function __construct(int $configId, array $newConfig)
    {
        $this->configId = $configId;
        $this->newConfig = $newConfig;
    }

    /**
     * @return int
     */
    public function getConfigId(): int
    {
        return $this->configId;
    }

    /**
     * @return array
     */
    public function getNewConfig(): array
    {
        return $this->newConfig;
    }
}
