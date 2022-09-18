<?php

namespace Herufi\MFiles\Model\Folder;

/**
 * Class MFilesFolderListingColumn
 *
 * @package Herufi\MFiles\Model\Folder
 */
class MFilesFolderListingColumn
{
    /** @var string */
    private $name;

    /** @var int */
    private $id;

    /** @var bool */
    private $visible;

    /** @var int */
    private $width;

    /** @var int */
    private $flags;

    /** @var int */
    private $position;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param  int  $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param  string  $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getFlags(): int
    {
        return $this->flags;
    }

    /**
     * @param  int  $flags
     */
    public function setFlags(int $flags)
    {
        $this->flags = $flags;
    }

    /**
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }

    /**
     * @param  int  $position
     */
    public function setPosition(int $position)
    {
        $this->position = $position;
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param  int  $width
     */
    public function setWidth(int $width)
    {
        $this->width = $width;
    }

    /**
     * @param  bool  $visible
     */
    public function setVisible(bool $visible)
    {
        $this->visible = $visible;
    }
}
