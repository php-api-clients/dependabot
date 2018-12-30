<?php declare(strict_types=1);

namespace ApiClients\Client\Dependabot\Middleware;

use ApiClients\Foundation\Middleware\Annotation\ThirdLast;
use ApiClients\Foundation\Middleware\ErrorTrait;
use ApiClients\Foundation\Middleware\MiddlewareInterface;
use ApiClients\Foundation\Middleware\PreTrait;
use ApiClients\Foundation\Transport\ParsedContentsInterface;
use ApiClients\Middleware\Json\JsonStream;
use Psr\Http\Message\ResponseInterface;
use React\Promise\CancellablePromiseInterface;
use function React\Promise\resolve;

/**
 * TODO: Do better then this. This works for the short term be this project needs a proper openapi response handling
 */
final class RelationsMiddleware implements MiddlewareInterface
{
    use PreTrait;
    use ErrorTrait;

    /**
     * @param  ResponseInterface           $response
     * @param  string                      $transactionId
     * @param  array                       $options
     * @return CancellablePromiseInterface
     *
     * @ThirdLast()
     */
    public function post(
        ResponseInterface $response,
        string $transactionId,
        array $options = []
    ): CancellablePromiseInterface {
        $body = $response->getBody();
        if (!($body instanceof ParsedContentsInterface)) {
            return resolve($response);
        }

        $parsedContents = $body->getParsedContents();
        if (!isset($parsedContents['included']) || \count($parsedContents['included']) === 0) {
            return resolve($response);
        }

        $includes = [];
        foreach ($parsedContents['included'] as $include) {
            unset($include['relationships']);
            $includes[$include['type']][$include['id']] = $include;
        }

        foreach ($parsedContents['data'] as $id => $item) {
            if (!isset($item['relationships']) || \count($item['relationships']) === 0) {
                continue;
            }

            foreach ($item['relationships'] as $relationshipTypes) {
                foreach ($relationshipTypes as $type => $typeLinks) {
                    foreach ($typeLinks as $link) {
                        if (!isset($link['id']) || !isset($link['type']) || !isset($includes[$link['type']][$link['id']])) {
                            continue;
                        }

                        $parsedContents['data'][$id][$link['type']][] = $includes[$link['type']][$link['id']];
                    }
                }
            }
        }

        return resolve($response->withBody(new JsonStream($parsedContents)));
    }
}
