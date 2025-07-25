<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Shell\Model;

class ChainsChainIdProtocolsGetResponse200Item extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    protected $protocol;
    /**
     * Level of protocol in the sequence of protocol activations.
     *
     * @var int
     */
    protected $protoLevel;
    /**
     * The activation block for a protocol is the migration block, i.e. the last level of the previous protocol.
     *
     * @var ChainsChainIdProtocolsGetResponse200ItemActivationBlock
     */
    protected $activationBlock;

    public function getProtocol()
    {
        return $this->protocol;
    }

    public function setProtocol($protocol): self
    {
        $this->initialized['protocol'] = true;
        $this->protocol = $protocol;

        return $this;
    }

    /**
     * Level of protocol in the sequence of protocol activations.
     */
    public function getProtoLevel(): int
    {
        return $this->protoLevel;
    }

    /**
     * Level of protocol in the sequence of protocol activations.
     */
    public function setProtoLevel(int $protoLevel): self
    {
        $this->initialized['protoLevel'] = true;
        $this->protoLevel = $protoLevel;

        return $this;
    }

    /**
     * The activation block for a protocol is the migration block, i.e. the last level of the previous protocol.
     */
    public function getActivationBlock(): ChainsChainIdProtocolsGetResponse200ItemActivationBlock
    {
        return $this->activationBlock;
    }

    /**
     * The activation block for a protocol is the migration block, i.e. the last level of the previous protocol.
     */
    public function setActivationBlock(ChainsChainIdProtocolsGetResponse200ItemActivationBlock $activationBlock): self
    {
        $this->initialized['activationBlock'] = true;
        $this->activationBlock = $activationBlock;

        return $this;
    }
}
