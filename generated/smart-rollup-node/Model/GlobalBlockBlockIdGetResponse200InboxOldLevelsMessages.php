<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Rollup\Model;

class GlobalBlockBlockIdGetResponse200InboxOldLevelsMessages extends \ArrayObject
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
     * Decimal representation of a positive big number.
     *
     * @var string
     */
    protected $index;
    /**
     * @var GlobalBlockBlockIdGetResponse200InboxOldLevelsMessagesContent
     */
    protected $content;
    /**
     * @var list<mixed>
     */
    protected $backPointers;

    /**
     * Decimal representation of a positive big number.
     */
    public function getIndex(): string
    {
        return $this->index;
    }

    /**
     * Decimal representation of a positive big number.
     */
    public function setIndex(string $index): self
    {
        $this->initialized['index'] = true;
        $this->index = $index;

        return $this;
    }

    public function getContent(): GlobalBlockBlockIdGetResponse200InboxOldLevelsMessagesContent
    {
        return $this->content;
    }

    public function setContent(GlobalBlockBlockIdGetResponse200InboxOldLevelsMessagesContent $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;

        return $this;
    }

    /**
     * @return list<mixed>
     */
    public function getBackPointers(): array
    {
        return $this->backPointers;
    }

    /**
     * @param list<mixed> $backPointers
     */
    public function setBackPointers(array $backPointers): self
    {
        $this->initialized['backPointers'] = true;
        $this->backPointers = $backPointers;

        return $this;
    }
}
