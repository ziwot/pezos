<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Shell\Model;

class NetworkPointsPointGetResponse200 extends \ArrayObject
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
     * @var bool
     */
    protected $trusted;
    /**
     * A timestamp as seen by the underlying, local computer: subsecond-level precision, epoch or rfc3339 based.
     */
    protected $greylistedUntil;
    /**
     * The state a connection to a peer point can be in: requested (connection open from here), accepted (handshake), running (connection already established), disconnected (no connection).
     */
    protected $state;
    protected $p2pPeerId;
    /**
     * A timestamp as seen by the underlying, local computer: subsecond-level precision, epoch or rfc3339 based.
     */
    protected $lastFailedConnection;
    /**
     * @var list<mixed>
     */
    protected $lastRejectedConnection;
    /**
     * @var list<mixed>
     */
    protected $lastEstablishedConnection;
    /**
     * @var list<mixed>
     */
    protected $lastDisconnection;
    /**
     * @var list<mixed>
     */
    protected $lastSeen;
    /**
     * A timestamp as seen by the underlying, local computer: subsecond-level precision, epoch or rfc3339 based.
     */
    protected $lastMiss;
    protected $expectedPeerId;

    public function getTrusted(): bool
    {
        return $this->trusted;
    }

    public function setTrusted(bool $trusted): self
    {
        $this->initialized['trusted'] = true;
        $this->trusted = $trusted;

        return $this;
    }

    /**
     * A timestamp as seen by the underlying, local computer: subsecond-level precision, epoch or rfc3339 based.
     */
    public function getGreylistedUntil()
    {
        return $this->greylistedUntil;
    }

    /**
     * A timestamp as seen by the underlying, local computer: subsecond-level precision, epoch or rfc3339 based.
     */
    public function setGreylistedUntil($greylistedUntil): self
    {
        $this->initialized['greylistedUntil'] = true;
        $this->greylistedUntil = $greylistedUntil;

        return $this;
    }

    /**
     * The state a connection to a peer point can be in: requested (connection open from here), accepted (handshake), running (connection already established), disconnected (no connection).
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * The state a connection to a peer point can be in: requested (connection open from here), accepted (handshake), running (connection already established), disconnected (no connection).
     */
    public function setState($state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;

        return $this;
    }

    public function getP2pPeerId()
    {
        return $this->p2pPeerId;
    }

    public function setP2pPeerId($p2pPeerId): self
    {
        $this->initialized['p2pPeerId'] = true;
        $this->p2pPeerId = $p2pPeerId;

        return $this;
    }

    /**
     * A timestamp as seen by the underlying, local computer: subsecond-level precision, epoch or rfc3339 based.
     */
    public function getLastFailedConnection()
    {
        return $this->lastFailedConnection;
    }

    /**
     * A timestamp as seen by the underlying, local computer: subsecond-level precision, epoch or rfc3339 based.
     */
    public function setLastFailedConnection($lastFailedConnection): self
    {
        $this->initialized['lastFailedConnection'] = true;
        $this->lastFailedConnection = $lastFailedConnection;

        return $this;
    }

    /**
     * @return list<mixed>
     */
    public function getLastRejectedConnection(): array
    {
        return $this->lastRejectedConnection;
    }

    /**
     * @param list<mixed> $lastRejectedConnection
     */
    public function setLastRejectedConnection(array $lastRejectedConnection): self
    {
        $this->initialized['lastRejectedConnection'] = true;
        $this->lastRejectedConnection = $lastRejectedConnection;

        return $this;
    }

    /**
     * @return list<mixed>
     */
    public function getLastEstablishedConnection(): array
    {
        return $this->lastEstablishedConnection;
    }

    /**
     * @param list<mixed> $lastEstablishedConnection
     */
    public function setLastEstablishedConnection(array $lastEstablishedConnection): self
    {
        $this->initialized['lastEstablishedConnection'] = true;
        $this->lastEstablishedConnection = $lastEstablishedConnection;

        return $this;
    }

    /**
     * @return list<mixed>
     */
    public function getLastDisconnection(): array
    {
        return $this->lastDisconnection;
    }

    /**
     * @param list<mixed> $lastDisconnection
     */
    public function setLastDisconnection(array $lastDisconnection): self
    {
        $this->initialized['lastDisconnection'] = true;
        $this->lastDisconnection = $lastDisconnection;

        return $this;
    }

    /**
     * @return list<mixed>
     */
    public function getLastSeen(): array
    {
        return $this->lastSeen;
    }

    /**
     * @param list<mixed> $lastSeen
     */
    public function setLastSeen(array $lastSeen): self
    {
        $this->initialized['lastSeen'] = true;
        $this->lastSeen = $lastSeen;

        return $this;
    }

    /**
     * A timestamp as seen by the underlying, local computer: subsecond-level precision, epoch or rfc3339 based.
     */
    public function getLastMiss()
    {
        return $this->lastMiss;
    }

    /**
     * A timestamp as seen by the underlying, local computer: subsecond-level precision, epoch or rfc3339 based.
     */
    public function setLastMiss($lastMiss): self
    {
        $this->initialized['lastMiss'] = true;
        $this->lastMiss = $lastMiss;

        return $this;
    }

    public function getExpectedPeerId()
    {
        return $this->expectedPeerId;
    }

    public function setExpectedPeerId($expectedPeerId): self
    {
        $this->initialized['expectedPeerId'] = true;
        $this->expectedPeerId = $expectedPeerId;

        return $this;
    }
}