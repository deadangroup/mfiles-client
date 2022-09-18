<?php

namespace Deadan\MFiles\Model\Folder;

/**
 * Class MFilesTraditionalFolder
 *
 * @package Deadan\MFiles\Model\Folder
 */
class MFilesTraditionalFolder
{
    /** @var int */
    private $item;

    /** @var int */
    private $version;

    /** @var string */
    private $displayValue;

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
}
