<?php declare(strict_types=1);

namespace ApiClients\Client\Dependabot\Resource\Sync\Repository\UpdateConfigs;

use ApiClients\Client\Dependabot\Resource\Repository\UpdateConfigs\Atttributes as BaseAtttributes;
use ApiClients\Client\Dependabot\Resource\Repository\UpdateConfigs\AtttributesInterface;
use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;

class Atttributes extends BaseAtttributes
{
    public function refresh(): Atttributes
    {
        return $this->wait($this->handleCommand(new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this))->then(function (AtttributesInterface $atttributes) {
            return $atttributes->refresh();
        }));
    }
}
