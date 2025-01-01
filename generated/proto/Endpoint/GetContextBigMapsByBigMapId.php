<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Proto\Endpoint;

class GetContextBigMapsByBigMapId extends \Pezos\Generated\Proto\Runtime\Client\BaseEndpoint implements \Pezos\Generated\Proto\Runtime\Client\Endpoint
{
    use \Pezos\Generated\Proto\Runtime\Client\EndpointTrait;
    protected $big_map_id;

    /**
     * Get the (optionally paginated) list of values in a big map. Order of values is unspecified, but is guaranteed to be consistent.
     *
     * @param string $bigMapId        A big map identifier
     * @param array  $queryParameters {
     *
     * @var string $offset A non-negative integer (greater than or equal to 0). Skip the first [offset] values. Useful in combination with [length] for pagination.
     * @var string $length A non-negative integer (greater than or equal to 0). Only retrieve [length] values. Useful in combination with [offset] for pagination.
     *             }
     */
    public function __construct(string $bigMapId, array $queryParameters = [])
    {
        $this->big_map_id = $bigMapId;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{big_map_id}'], [$this->big_map_id], '/context/big_maps/{big_map_id}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['offset', 'length']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('offset', ['string']);
        $optionsResolver->addAllowedTypes('length', ['string']);

        return $optionsResolver;
    }

    /**
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return json_decode($body);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}