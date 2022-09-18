<?php

namespace Deadan\MFiles\Model\View;

use Deadan\MFiles\Model\Folder\MFilesPropertyFolder;
use Deadan\MFiles\Model\Folder\MFilesTraditionalFolder;
use Deadan\MFiles\Model\Object\MFilesObject;

/**
 * Class MFilesViewItem
 *
 * @package Deadan\MFiles\Model\View
 */
class MFilesViewItem
{
    /** @var int */
    private $folderContentItemType;

    /** @var MFilesView|null */
    private $view = null;

    /** @var MFilesTraditionalFolder|null */
    private $traditionalFolder = null;

    /** @var MFilesPropertyFolder|null */
    private $propertyFolder = null;

    /** @var MFilesObject|null */
    private $objectVersion = null;

    /**
     * @return int
     */
    public function getFolderContentItemType(): int
    {
        return $this->folderContentItemType;
    }

    /**
     * @param  int  $folderContentItemType
     */
    public function setFolderContentItemType(int $folderContentItemType)
    {
        $this->folderContentItemType = $folderContentItemType;
    }

    /**
     * @return MFilesView|null
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * @param  MFilesView  $view
     */
    public function setView(MFilesView $view)
    {
        $this->view = $view;
    }

    /**
     * @return MFilesTraditionalFolder|null
     */
    public function getTraditionalFolder()
    {
        return $this->traditionalFolder;
    }

    /**
     * @param  MFilesTraditionalFolder  $traditionalFolder
     */
    public function setTraditionalFolder(MFilesTraditionalFolder $traditionalFolder)
    {
        $this->traditionalFolder = $traditionalFolder;
    }

    /**
     * @return MFilesObject|null
     */
    public function getObjectVersion(): MFilesObject
    {
        return $this->objectVersion;
    }

    /**
     * @param  MFilesObject|null  $objectVersion
     */
    public function setObjectVersion(MFilesObject $objectVersion)
    {
        $this->objectVersion = $objectVersion;
    }

    /**
     * @return MFilesPropertyFolder|null
     */
    public function getPropertyFolder(): MFilesPropertyFolder
    {
        return $this->propertyFolder;
    }

    /**
     * @param  MFilesPropertyFolder|null  $propertyFolder
     */
    public function setPropertyFolder(MFilesPropertyFolder $propertyFolder)
    {
        $this->propertyFolder = $propertyFolder;
    }
}
