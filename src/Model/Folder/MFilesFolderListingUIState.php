<?php

namespace Deadan\MFiles\Model\Folder;

/**
 * Class MFilesFolderListingUIState
 *
 * @package Deadan\MFiles\Model\Folder
 */
class MFilesFolderListingUIState
{
    /** @var MFilesFolderListingColumn[] */
    private $columns;

    /** @var MFilesFolderListingColumnSorting[] */
    private $columnSortings;

    /**
     * @return MFilesFolderListingColumn[]
     */
    public function getColumns(): array
    {
        return $this->columns;
    }

    /**
     * @param  MFilesFolderListingColumn[]  $columns
     */
    public function setColumns(array $columns)
    {
        $this->columns = $columns;
    }

    /**
     * @return MFilesFolderListingColumnSorting[]
     */
    public function getColumnSortings(): array
    {
        return $this->columnSortings;
    }

    /**
     * @param  MFilesFolderListingColumnSorting[]  $columnSortings
     */
    public function setColumnSortings(array $columnSortings)
    {
        $this->columnSortings = $columnSortings;
    }
}
