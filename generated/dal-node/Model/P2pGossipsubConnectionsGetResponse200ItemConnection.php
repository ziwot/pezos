<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Dal\Model;

class P2pGossipsubConnectionsGetResponse200ItemConnection extends \ArrayObject
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
     * @var list<P2pGossipsubConnectionsGetResponse200ItemConnectionTopicsItem>
     */
    protected $topics;
    /**
     * @var bool
     */
    protected $direct;
    /**
     * @var bool
     */
    protected $outbound;
    /**
     * @var bool
     */
    protected $bootstrap;

    /**
     * @return list<P2pGossipsubConnectionsGetResponse200ItemConnectionTopicsItem>
     */
    public function getTopics(): array
    {
        return $this->topics;
    }

    /**
     * @param list<P2pGossipsubConnectionsGetResponse200ItemConnectionTopicsItem> $topics
     */
    public function setTopics(array $topics): self
    {
        $this->initialized['topics'] = true;
        $this->topics = $topics;

        return $this;
    }

    public function getDirect(): bool
    {
        return $this->direct;
    }

    public function setDirect(bool $direct): self
    {
        $this->initialized['direct'] = true;
        $this->direct = $direct;

        return $this;
    }

    public function getOutbound(): bool
    {
        return $this->outbound;
    }

    public function setOutbound(bool $outbound): self
    {
        $this->initialized['outbound'] = true;
        $this->outbound = $outbound;

        return $this;
    }

    public function getBootstrap(): bool
    {
        return $this->bootstrap;
    }

    public function setBootstrap(bool $bootstrap): self
    {
        $this->initialized['bootstrap'] = true;
        $this->bootstrap = $bootstrap;

        return $this;
    }
}
