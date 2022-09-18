<?php

namespace Herufi\MFiles\Model;

/**
 * Class MFilesLookup.
 */
class MFilesLookup
{
    /** @var int */
    private $item;

    /** @var int */
    private $version;

    /** @var string */
    private $displayValue;

    /**
     * @return string
     */
    public function getDisplayValue(): string
    {
        return $this->displayValue;
    }

    /**
     * @param  string  $displayValue
     */
    public function setDisplayValue(string $displayValue)
    {
        $this->displayValue = $displayValue;
    }

    /**
     * @return int
     */
    public function getItem(): int
    {
        return $this->item;
    }

    /**
     * @param  int  $item
     */
    public function setItem(int $item)
    {
        $this->item = $item;
    }

    /**
     * @return int
     */
    public function getVersion(): int
    {
        return $this->version;
    }

    /**
     * @param  int  $version
     */
    public function setVersion(int $version)
    {
        $this->version = $version;
    }
}
