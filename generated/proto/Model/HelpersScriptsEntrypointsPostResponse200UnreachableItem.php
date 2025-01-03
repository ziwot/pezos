<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Proto\Model;

class HelpersScriptsEntrypointsPostResponse200UnreachableItem extends \ArrayObject
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
     * @var list<string>
     */
    protected $path;

    /**
     * @return list<string>
     */
    public function getPath(): array
    {
        return $this->path;
    }

    /**
     * @param list<string> $path
     */
    public function setPath(array $path): self
    {
        $this->initialized['path'] = true;
        $this->path = $path;

        return $this;
    }
}
