<?php

namespace Deadan\MFiles\Model\View;

/**
 * Class MFilesView
 *
 * @package Deadan\MFiles\Model\View
 */
class MFilesView
{
    /** @var int */
    private $id;

    /** @var bool */
    private $common;

    /** @var int */
    private $parent;

    /** @var int */
    private $depth;

    /** @var string */
    private $name;

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
     * @return int
     */
    public function getDepth(): int
    {
        return $this->depth;
    }

    /**
     * @param  int  $depth
     */
    public function setDepth(int $depth)
    {
        $this->depth = $depth;
    }

    /**
     * @return int
     */
    public function getParent(): int
    {
        return $this->parent;
    }

    /**
     * @param  int  $parent
     */
    public function setParent(int $parent)
    {
        $this->parent = $parent;
    }

    /**
     * @param  bool  $common
     */
    public function setCommon(bool $common)
    {
        $this->common = $common;
    }
}
