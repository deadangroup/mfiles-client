<?php

namespace Herufi\MFiles\Service\ViewItems\Response;

use Herufi\MFiles\Model\Folder\MFilesFolderDef;
use Herufi\MFiles\Model\Folder\MFilesFolderUIState;
use Herufi\MFiles\Model\View\MFilesViewItem;
use Herufi\MFiles\Model\View\MFilesViewModeInfo;
use Herufi\MFiles\Model\View\MFilesViewPathInfo;
use Herufi\MFiles\Service\Response\BaseResponse;

/**
 * Class GetItemsFromViewResponse.
 */
class GetItemsFromViewResponse extends BaseResponse
{
    /**@var string */
    private $path;

    /** @var MFilesViewItem[] */
    private $items;

    /** @var string */
    private $viewSettingsId;

    /** @var bool|null */
    private $isGroupingEnabled = null;

    /** @var string */
    private $levelDefinition;

    /** @var int */
    private $totalCount;

    /** @var MFilesViewModeInfo */
    private $viewModeInfo;

    /** @var MFilesViewPathInfo[] */
    private $viewPathInfos;

    /** @var MFilesFolderUIState */
    private $folderUIState;

    /** @var MFilesFolderDef[] */
    private $folderDefs;

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
     * @return bool|null
     */
    public function getIsGroupingEnabled()
    {
        return $this->isGroupingEnabled;
    }

    /**
     * @param  bool  $isGroupingEnabled
     */
    public function setIsGroupingEnabled(bool $isGroupingEnabled)
    {
        $this->isGroupingEnabled = $isGroupingEnabled;
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
     * @return MFilesViewPathInfo[]
     */
    public function getViewPathInfos(): array
    {
        return $this->viewPathInfos;
    }

    /**
     * @param  MFilesViewPathInfo[]  $viewPathInfos
     */
    public function setViewPathInfos(array $viewPathInfos)
    {
        $this->viewPathInfos = $viewPathInfos;
    }

    /**
     * @return MFilesFolderDef[]
     */
    public function getFolderDefs()
    {
        return $this->folderDefs;
    }

    /**
     * @param  MFilesFolderDef[]  $folderDefs
     */
    public function setFolderDefs(array $folderDefs)
    {
        $this->folderDefs = $folderDefs;
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
