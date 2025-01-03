<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Proto\Model;

class HelpersScriptsNormalizeStackPostBody extends \ArrayObject
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
     * @var list<HelpersScriptsNormalizeStackPostBodyInputItem>
     */
    protected $input;
    protected $unparsingMode;
    /**
     * @var bool
     */
    protected $legacy;
    /**
     * @var list<HelpersScriptsNormalizeStackPostBodyOtherContractsItem>
     */
    protected $otherContracts;
    /**
     * @var list<HelpersScriptsNormalizeStackPostBodyExtraBigMapsItem>
     */
    protected $extraBigMaps;

    /**
     * @return list<HelpersScriptsNormalizeStackPostBodyInputItem>
     */
    public function getInput(): array
    {
        return $this->input;
    }

    /**
     * @param list<HelpersScriptsNormalizeStackPostBodyInputItem> $input
     */
    public function setInput(array $input): self
    {
        $this->initialized['input'] = true;
        $this->input = $input;

        return $this;
    }

    public function getUnparsingMode()
    {
        return $this->unparsingMode;
    }

    public function setUnparsingMode($unparsingMode): self
    {
        $this->initialized['unparsingMode'] = true;
        $this->unparsingMode = $unparsingMode;

        return $this;
    }

    public function getLegacy(): bool
    {
        return $this->legacy;
    }

    public function setLegacy(bool $legacy): self
    {
        $this->initialized['legacy'] = true;
        $this->legacy = $legacy;

        return $this;
    }

    /**
     * @return list<HelpersScriptsNormalizeStackPostBodyOtherContractsItem>
     */
    public function getOtherContracts(): array
    {
        return $this->otherContracts;
    }

    /**
     * @param list<HelpersScriptsNormalizeStackPostBodyOtherContractsItem> $otherContracts
     */
    public function setOtherContracts(array $otherContracts): self
    {
        $this->initialized['otherContracts'] = true;
        $this->otherContracts = $otherContracts;

        return $this;
    }

    /**
     * @return list<HelpersScriptsNormalizeStackPostBodyExtraBigMapsItem>
     */
    public function getExtraBigMaps(): array
    {
        return $this->extraBigMaps;
    }

    /**
     * @param list<HelpersScriptsNormalizeStackPostBodyExtraBigMapsItem> $extraBigMaps
     */
    public function setExtraBigMaps(array $extraBigMaps): self
    {
        $this->initialized['extraBigMaps'] = true;
        $this->extraBigMaps = $extraBigMaps;

        return $this;
    }
}
