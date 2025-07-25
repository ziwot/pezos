<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Dal\Model;

class P2pGossipsubFanoutGetResponse200Item extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var P2pGossipsubFanoutGetResponse200ItemTopic
     */
    protected $topic;
    /**
     * @var list<P2pGossipsubFanoutGetResponse200ItemPeersItem>
     */
    protected $peers;
    /**
     * A timestamp as seen by the underlying, local computer: subsecond-level precision, epoch or rfc3339 based.
     */
    protected $lastPublicationTime;

    public function getTopic(): P2pGossipsubFanoutGetResponse200ItemTopic
    {
        return $this->topic;
    }

    public function setTopic(P2pGossipsubFanoutGetResponse200ItemTopic $topic): self
    {
        $this->initialized['topic'] = true;
        $this->topic = $topic;

        return $this;
    }

    /**
     * @return list<P2pGossipsubFanoutGetResponse200ItemPeersItem>
     */
    public function getPeers(): array
    {
        return $this->peers;
    }

    /**
     * @param list<P2pGossipsubFanoutGetResponse200ItemPeersItem> $peers
     */
    public function setPeers(array $peers): self
    {
        $this->initialized['peers'] = true;
        $this->peers = $peers;

        return $this;
    }

    /**
     * A timestamp as seen by the underlying, local computer: subsecond-level precision, epoch or rfc3339 based.
     */
    public function getLastPublicationTime()
    {
        return $this->lastPublicationTime;
    }

    /**
     * A timestamp as seen by the underlying, local computer: subsecond-level precision, epoch or rfc3339 based.
     */
    public function setLastPublicationTime($lastPublicationTime): self
    {
        $this->initialized['lastPublicationTime'] = true;
        $this->lastPublicationTime = $lastPublicationTime;

        return $this;
    }
}
