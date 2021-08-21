<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Shell\Model;

class NetworkPeersPeerIdPatchResponse200PeerMetadata
{
    /**
     * @var NetworkPeersPeerIdPatchResponse200PeerMetadataResponses
     */
    protected $responses;
    /**
     * @var NetworkPeersPeerIdPatchResponse200PeerMetadataRequests
     */
    protected $requests;
    /**
     * Decimal representation of a big number.
     *
     * @var string
     */
    protected $validBlocks;
    /**
     * Decimal representation of a big number.
     *
     * @var string
     */
    protected $oldHeads;
    /**
     * @var NetworkPeersPeerIdPatchResponse200PeerMetadataPrevalidatorResults
     */
    protected $prevalidatorResults;
    /**
     * Decimal representation of a big number.
     *
     * @var string
     */
    protected $unactivatedChains;
    /**
     * Decimal representation of a big number.
     *
     * @var string
     */
    protected $inactiveChains;
    /**
     * Decimal representation of a big number.
     *
     * @var string
     */
    protected $futureBlocksAdvertised;
    /**
     * @var NetworkPeersPeerIdPatchResponse200PeerMetadataUnadvertised
     */
    protected $unadvertised;
    /**
     * @var NetworkPeersPeerIdPatchResponse200PeerMetadataAdvertisements
     */
    protected $advertisements;

    public function getResponses(): NetworkPeersPeerIdPatchResponse200PeerMetadataResponses
    {
        return $this->responses;
    }

    public function setResponses(NetworkPeersPeerIdPatchResponse200PeerMetadataResponses $responses): self
    {
        $this->responses = $responses;

        return $this;
    }

    public function getRequests(): NetworkPeersPeerIdPatchResponse200PeerMetadataRequests
    {
        return $this->requests;
    }

    public function setRequests(NetworkPeersPeerIdPatchResponse200PeerMetadataRequests $requests): self
    {
        $this->requests = $requests;

        return $this;
    }

    /**
     * Decimal representation of a big number.
     */
    public function getValidBlocks(): string
    {
        return $this->validBlocks;
    }

    /**
     * Decimal representation of a big number.
     */
    public function setValidBlocks(string $validBlocks): self
    {
        $this->validBlocks = $validBlocks;

        return $this;
    }

    /**
     * Decimal representation of a big number.
     */
    public function getOldHeads(): string
    {
        return $this->oldHeads;
    }

    /**
     * Decimal representation of a big number.
     */
    public function setOldHeads(string $oldHeads): self
    {
        $this->oldHeads = $oldHeads;

        return $this;
    }

    public function getPrevalidatorResults(): NetworkPeersPeerIdPatchResponse200PeerMetadataPrevalidatorResults
    {
        return $this->prevalidatorResults;
    }

    public function setPrevalidatorResults(NetworkPeersPeerIdPatchResponse200PeerMetadataPrevalidatorResults $prevalidatorResults): self
    {
        $this->prevalidatorResults = $prevalidatorResults;

        return $this;
    }

    /**
     * Decimal representation of a big number.
     */
    public function getUnactivatedChains(): string
    {
        return $this->unactivatedChains;
    }

    /**
     * Decimal representation of a big number.
     */
    public function setUnactivatedChains(string $unactivatedChains): self
    {
        $this->unactivatedChains = $unactivatedChains;

        return $this;
    }

    /**
     * Decimal representation of a big number.
     */
    public function getInactiveChains(): string
    {
        return $this->inactiveChains;
    }

    /**
     * Decimal representation of a big number.
     */
    public function setInactiveChains(string $inactiveChains): self
    {
        $this->inactiveChains = $inactiveChains;

        return $this;
    }

    /**
     * Decimal representation of a big number.
     */
    public function getFutureBlocksAdvertised(): string
    {
        return $this->futureBlocksAdvertised;
    }

    /**
     * Decimal representation of a big number.
     */
    public function setFutureBlocksAdvertised(string $futureBlocksAdvertised): self
    {
        $this->futureBlocksAdvertised = $futureBlocksAdvertised;

        return $this;
    }

    public function getUnadvertised(): NetworkPeersPeerIdPatchResponse200PeerMetadataUnadvertised
    {
        return $this->unadvertised;
    }

    public function setUnadvertised(NetworkPeersPeerIdPatchResponse200PeerMetadataUnadvertised $unadvertised): self
    {
        $this->unadvertised = $unadvertised;

        return $this;
    }

    public function getAdvertisements(): NetworkPeersPeerIdPatchResponse200PeerMetadataAdvertisements
    {
        return $this->advertisements;
    }

    public function setAdvertisements(NetworkPeersPeerIdPatchResponse200PeerMetadataAdvertisements $advertisements): self
    {
        $this->advertisements = $advertisements;

        return $this;
    }
}