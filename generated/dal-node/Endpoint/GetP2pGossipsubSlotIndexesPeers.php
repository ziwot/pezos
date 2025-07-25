<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Dal\Endpoint;

class GetP2pGossipsubSlotIndexesPeers extends \Pezos\Generated\Dal\Runtime\Client\BaseEndpoint implements \Pezos\Generated\Dal\Runtime\Client\Endpoint
{
    use \Pezos\Generated\Dal\Runtime\Client\EndpointTrait;

    /**
     * When the 'all' flag is given, get an association list between each public key hash part of a topic subscribed to by the connected peers and the remote peers subscribed to such topics. If the 'all' flag is not given, then restrict the output to the topics this peer is subscribed to.
     *
     * @param array $queryParameters {
     *
     * @var string $all
     *             }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/p2p/gossipsub/slot_indexes/peers';
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
        $optionsResolver->setDefined(['all']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('all', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \Pezos\Generated\Dal\Model\P2pGossipsubSlotIndexesPeersGetResponse200Item[]|null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Pezos\\Generated\\Dal\\Model\\P2pGossipsubSlotIndexesPeersGetResponse200Item[]', 'json');
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
