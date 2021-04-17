<?php

namespace Pezos\Generated\Proto\Model;

class HelpersPreapplyBlockPostBodyProtocolData
{
    /**
     * 
     *
     * @var string
     */
    protected $protocol;
    /**
     * 
     *
     * @var int
     */
    protected $priority;
    /**
     * 
     *
     * @var string
     */
    protected $proofOfWorkNonce;
    /**
     * 
     *
     * @var mixed
     */
    protected $seedNonceHash;
    /**
     * 
     *
     * @var mixed
     */
    protected $signature;
    /**
     * 
     *
     * @return string
     */
    public function getProtocol() : string
    {
        return $this->protocol;
    }
    /**
     * 
     *
     * @param string $protocol
     *
     * @return self
     */
    public function setProtocol(string $protocol) : self
    {
        $this->protocol = $protocol;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPriority() : int
    {
        return $this->priority;
    }
    /**
     * 
     *
     * @param int $priority
     *
     * @return self
     */
    public function setPriority(int $priority) : self
    {
        $this->priority = $priority;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProofOfWorkNonce() : string
    {
        return $this->proofOfWorkNonce;
    }
    /**
     * 
     *
     * @param string $proofOfWorkNonce
     *
     * @return self
     */
    public function setProofOfWorkNonce(string $proofOfWorkNonce) : self
    {
        $this->proofOfWorkNonce = $proofOfWorkNonce;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getSeedNonceHash()
    {
        return $this->seedNonceHash;
    }
    /**
     * 
     *
     * @param mixed $seedNonceHash
     *
     * @return self
     */
    public function setSeedNonceHash($seedNonceHash) : self
    {
        $this->seedNonceHash = $seedNonceHash;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getSignature()
    {
        return $this->signature;
    }
    /**
     * 
     *
     * @param mixed $signature
     *
     * @return self
     */
    public function setSignature($signature) : self
    {
        $this->signature = $signature;
        return $this;
    }
}