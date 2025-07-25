<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Proto\Model;

class ContextConstantsGetResponse200DalParametric extends \ArrayObject
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
    protected $featureEnable;
    /**
     * @var bool
     */
    protected $incentivesEnable;
    /**
     * @var int
     */
    protected $numberOfSlots;
    /**
     * @var int
     */
    protected $attestationLag;
    /**
     * @var int
     */
    protected $attestationThreshold;
    /**
     * @var ContextConstantsGetResponse200DalParametricMinimalParticipationRatio
     */
    protected $minimalParticipationRatio;
    /**
     * @var ContextConstantsGetResponse200DalParametricRewardsRatio
     */
    protected $rewardsRatio;
    /**
     * @var ContextConstantsGetResponse200DalParametricTrapsFraction
     */
    protected $trapsFraction;
    /**
     * @var int
     */
    protected $redundancyFactor;
    /**
     * @var int
     */
    protected $pageSize;
    /**
     * @var int
     */
    protected $slotSize;
    /**
     * @var int
     */
    protected $numberOfShards;

    public function getFeatureEnable(): bool
    {
        return $this->featureEnable;
    }

    public function setFeatureEnable(bool $featureEnable): self
    {
        $this->initialized['featureEnable'] = true;
        $this->featureEnable = $featureEnable;

        return $this;
    }

    public function getIncentivesEnable(): bool
    {
        return $this->incentivesEnable;
    }

    public function setIncentivesEnable(bool $incentivesEnable): self
    {
        $this->initialized['incentivesEnable'] = true;
        $this->incentivesEnable = $incentivesEnable;

        return $this;
    }

    public function getNumberOfSlots(): int
    {
        return $this->numberOfSlots;
    }

    public function setNumberOfSlots(int $numberOfSlots): self
    {
        $this->initialized['numberOfSlots'] = true;
        $this->numberOfSlots = $numberOfSlots;

        return $this;
    }

    public function getAttestationLag(): int
    {
        return $this->attestationLag;
    }

    public function setAttestationLag(int $attestationLag): self
    {
        $this->initialized['attestationLag'] = true;
        $this->attestationLag = $attestationLag;

        return $this;
    }

    public function getAttestationThreshold(): int
    {
        return $this->attestationThreshold;
    }

    public function setAttestationThreshold(int $attestationThreshold): self
    {
        $this->initialized['attestationThreshold'] = true;
        $this->attestationThreshold = $attestationThreshold;

        return $this;
    }

    public function getMinimalParticipationRatio(): ContextConstantsGetResponse200DalParametricMinimalParticipationRatio
    {
        return $this->minimalParticipationRatio;
    }

    public function setMinimalParticipationRatio(ContextConstantsGetResponse200DalParametricMinimalParticipationRatio $minimalParticipationRatio): self
    {
        $this->initialized['minimalParticipationRatio'] = true;
        $this->minimalParticipationRatio = $minimalParticipationRatio;

        return $this;
    }

    public function getRewardsRatio(): ContextConstantsGetResponse200DalParametricRewardsRatio
    {
        return $this->rewardsRatio;
    }

    public function setRewardsRatio(ContextConstantsGetResponse200DalParametricRewardsRatio $rewardsRatio): self
    {
        $this->initialized['rewardsRatio'] = true;
        $this->rewardsRatio = $rewardsRatio;

        return $this;
    }

    public function getTrapsFraction(): ContextConstantsGetResponse200DalParametricTrapsFraction
    {
        return $this->trapsFraction;
    }

    public function setTrapsFraction(ContextConstantsGetResponse200DalParametricTrapsFraction $trapsFraction): self
    {
        $this->initialized['trapsFraction'] = true;
        $this->trapsFraction = $trapsFraction;

        return $this;
    }

    public function getRedundancyFactor(): int
    {
        return $this->redundancyFactor;
    }

    public function setRedundancyFactor(int $redundancyFactor): self
    {
        $this->initialized['redundancyFactor'] = true;
        $this->redundancyFactor = $redundancyFactor;

        return $this;
    }

    public function getPageSize(): int
    {
        return $this->pageSize;
    }

    public function setPageSize(int $pageSize): self
    {
        $this->initialized['pageSize'] = true;
        $this->pageSize = $pageSize;

        return $this;
    }

    public function getSlotSize(): int
    {
        return $this->slotSize;
    }

    public function setSlotSize(int $slotSize): self
    {
        $this->initialized['slotSize'] = true;
        $this->slotSize = $slotSize;

        return $this;
    }

    public function getNumberOfShards(): int
    {
        return $this->numberOfShards;
    }

    public function setNumberOfShards(int $numberOfShards): self
    {
        $this->initialized['numberOfShards'] = true;
        $this->numberOfShards = $numberOfShards;

        return $this;
    }
}
