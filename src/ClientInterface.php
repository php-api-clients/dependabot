<?php

declare(strict_types=1);

namespace ApiClients\Client\Dependabot;

interface ClientInterface
{
    public function accounts(): array;
}
