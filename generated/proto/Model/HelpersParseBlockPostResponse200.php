<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Proto\Model;

class HelpersParseBlockPostResponse200 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    protected $payloadHash;
    /**
     * @var int
     */
    protected $payloadRound;
    /**
     * @var string
     */
    protected $proofOfWorkNonce;
    protected $seedNonceHash;
    protected $liquidityBakingToggleVote;
    protected $adaptiveIssuanceVote;
    protected $signature;

    public function getPayloadHash()
    {
        return $this->payloadHash;
    }

    public function setPayloadHash($payloadHash): self
    {
        $this->initialized['payloadHash'] = true;
        $this->payloadHash = $payloadHash;

        return $this;
    }

    public function getPayloadRound(): int
    {
        return $this->payloadRound;
    }

    public function setPayloadRound(int $payloadRound): self
    {
        $this->initialized['payloadRound'] = true;
        $this->payloadRound = $payloadRound;

        return $this;
    }

    public function getProofOfWorkNonce(): string
    {
        return $this->proofOfWorkNonce;
    }

    public function setProofOfWorkNonce(string $proofOfWorkNonce): self
    {
        $this->initialized['proofOfWorkNonce'] = true;
        $this->proofOfWorkNonce = $proofOfWorkNonce;

        return $this;
    }

    public function getSeedNonceHash()
    {
        return $this->seedNonceHash;
    }

    public function setSeedNonceHash($seedNonceHash): self
    {
        $this->initialized['seedNonceHash'] = true;
        $this->seedNonceHash = $seedNonceHash;

        return $this;
    }

    public function getLiquidityBakingToggleVote()
    {
        return $this->liquidityBakingToggleVote;
    }

    public function setLiquidityBakingToggleVote($liquidityBakingToggleVote): self
    {
        $this->initialized['liquidityBakingToggleVote'] = true;
        $this->liquidityBakingToggleVote = $liquidityBakingToggleVote;

        return $this;
    }

    public function getAdaptiveIssuanceVote()
    {
        return $this->adaptiveIssuanceVote;
    }

    public function setAdaptiveIssuanceVote($adaptiveIssuanceVote): self
    {
        $this->initialized['adaptiveIssuanceVote'] = true;
        $this->adaptiveIssuanceVote = $adaptiveIssuanceVote;

        return $this;
    }

    public function getSignature()
    {
        return $this->signature;
    }

    public function setSignature($signature): self
    {
        $this->initialized['signature'] = true;
        $this->signature = $signature;

        return $this;
    }
}