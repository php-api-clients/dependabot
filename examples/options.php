<?php declare(strict_types=1);

use ApiClients\Foundation\Options;
use ApiClients\Foundation\Transport\Options as TransportOptions;
use ApiClients\Middleware;

return (function () {
    return [
        Options::TRANSPORT_OPTIONS => [
            TransportOptions::DEFAULT_REQUEST_OPTIONS => [
                Middleware\PersonalAuthorization\PersonalAuthorizationHeaderMiddleware::class => [
                    Middleware\PersonalAuthorization\Options::TOKEN => require \dirname(__DIR__) . \DIRECTORY_SEPARATOR . 'token.php',
                ],
            ],
            TransportOptions::MIDDLEWARE => [
                Middleware\PersonalAuthorization\PersonalAuthorizationHeaderMiddleware::class,
            ],
        ],
    ];
})();
