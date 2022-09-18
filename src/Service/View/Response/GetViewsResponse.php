<?php

namespace Deadan\MFiles\Service\View\Response;

use Deadan\MFiles\Model\Folder\MFilesFolderUIState;
use Deadan\MFiles\Model\View\MFilesView;
use Deadan\MFiles\Model\View\MFilesViewItem;
use Deadan\MFiles\Model\View\MFilesViewModeInfo;
use Deadan\MFiles\Service\Response\BaseResponse;

/**
 * Class GetViewsResponse
 *
 * @package Deadan\MFiles\Service\View\Response
 */
class GetViewsResponse extends BaseResponse
{
    /** @var string */
    private $path;

    /** @var MFilesView[] */
    private $items;

    /** @var string */
    private $viewSettingsId;

    /** @var string */
    private $levelDefinition;

    /** @var int */
    private $totalCount;

    /** @var MFilesViewModeInfo */
    private $viewModeInfo;

    /** @var MFilesFolderUIState */
    private $folderUIState;

    /** @var array */
    private $folderDefs;

    /**
     * @return array
     */
    public function getFolderDefs(): array
    {
        return $this->folderDefs;
    }

    /**
     * @param  array  $folderDefs
     */
    public function setFolderDefs(array $folderDefs)
    {
        $this->folderDefs = $folderDefs;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @param  string  $path
     */
    public function setPath(string $path)
    {
        $this->path = $path;
    }

    /**
     * @return MFilesViewItem[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param  MFilesViewItem[]  $items
     */
    public function setItems(array $items)
    {
        $this->items = $items;
    }

    /**
     * @return string
     */
    public function getLevelDefinition(): string
    {
        return $this->levelDefinition;
    }

    /**
     * @param  string  $levelDefinition
     */
    public function setLevelDefinition(string $levelDefinition)
    {
        $this->levelDefinition = $levelDefinition;
    }

    /**
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    /**
     * @param  int  $totalCount
     */
    public function setTotalCount(int $totalCount)
    {
        $this->totalCount = $totalCount;
    }

    /**
     * @return MFilesViewModeInfo
     */
    public function getViewModeInfo(): MFilesViewModeInfo
    {
        return $this->viewModeInfo;
    }

    /**
     * @param  MFilesViewModeInfo  $viewModeInfo
     */
    public function setViewModeInfo(MFilesViewModeInfo $viewModeInfo)
    {
        $this->viewModeInfo = $viewModeInfo;
    }

    /**
     * @return string
     */
    public function getViewSettingsId(): string
    {
        return $this->viewSettingsId;
    }

    /**
     * @param  string  $viewSettingsId
     */
    public function setViewSettingsId(string $viewSettingsId)
    {
        $this->viewSettingsId = $viewSettingsId;
    }

    /**
     * @return MFilesFolderUIState
     */
    public function getFolderUIState(): MFilesFolderUIState
    {
        return $this->folderUIState;
    }

    /**
     * @param  MFilesFolderUIState  $folderUIState
     */
    public function setFolderUIState(MFilesFolderUIState $folderUIState)
    {
        $this->folderUIState = $folderUIState;
    }
}
