<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Shell\Model;

class MonitorReceivedBlocksChainIdGetResponse200 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    protected $hash;

    public function getHash()
    {
        return $this->hash;
    }

    public function setHash($hash): self
    {
        $this->initialized['hash'] = true;
        $this->hash = $hash;

        return $this;
    }
}
