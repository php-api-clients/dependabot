<?php declare(strict_types=1);

namespace ApiClients\Client\Dependabot\Resource\Sync\Repository;

use ApiClients\Client\Dependabot\Resource\Repository\Attributes as BaseAttributes;
use ApiClients\Client\Dependabot\Resource\Repository\AttributesInterface;
use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;

class Attributes extends BaseAttributes
{
    public function refresh(): Attributes
    {
        return $this->wait($this->handleCommand(new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this))->then(function (AttributesInterface $attributes) {
            return $attributes->refresh();
        }));
    }
}
