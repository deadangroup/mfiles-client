<?php

namespace Deadan\MFiles\Model\Folder;

/**
 * Class MFilesFolderListingColumnSorting
 *
 * @package Deadan\MFiles\Model\Folder
 */
class MFilesFolderListingColumnSorting
{
    /** @var int */
    private $id;

    /** @var int */
    private $index;

    /** @var bool */
    private $sortAscending;

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
    public function getIndex(): int
    {
        return $this->index;
    }

    /**
     * @param  int  $index
     */
    public function setIndex(int $index)
    {
        $this->index = $index;
    }

    /**
     * @return bool
     */
    public function getSortAscending(): bool
    {
        return $this->sortAscending;
    }

    /**
     * @param  bool  $sortAscending
     */
    public function setSortAscending(bool $sortAscending)
    {
        $this->sortAscending = $sortAscending;
    }
}
