<?php

namespace Herufi\MFiles\Service\View\Parser;

use Herufi\MFiles\Model\Folder\MFilesPropertyFolder;
use Herufi\MFiles\Model\Folder\MFilesTraditionalFolder;
use Herufi\MFiles\Model\MFilesLookup;
use Herufi\MFiles\Model\View\MFilesView;
use Herufi\MFiles\Model\View\MFilesViewItem;
use Herufi\MFiles\Service\Object\Parser\ObjectParser;
use stdClass;

/**
 * Class ViewParser
 *
 * @package Herufi\MFiles\Service\View\Parser
 */
class ViewParser
{
    /**
     * Parse object item JSON to object item.
     *
     * @param  \stdClass  $item
     *
     * @return MFilesViewItem
     */
    public function parse(stdClass $item)
    {
        $object = new MFilesViewItem();

        $object->setFolderContentItemType($item->FolderContentItemType);

        if (isset($item->View)) {
            $object->setView($this->parseView($item->View));
        }

        if (isset($item->TraditionalFolder)) {
            $object->setTraditionalFolder($this->parseTraditionalFolder($item->TraditionalFolder));
        }

        if (isset($item->PropertyFolder)) {
            $object->setPropertyFolder($this->parsePropertyFolder($item->PropertyFolder));
        }

        if (isset($item->ObjectVersion)) {
            $object->setObjectVersion((new ObjectParser())->parse($item->ObjectVersion));
        }

        return $object;
    }

    /**
     * Parse view item JSON to object view.
     *
     * @param  \stdClass  $view
     *
     * @return MFilesView
     */
    private function parseView(stdClass $view): MFilesView
    {
        $newView = new MFilesView();

        $newView->setId($view->ID);
        $newView->setCommon($view->Common);
        $newView->setParent($view->Parent);
        $newView->setDepth($view->Depth);
        $newView->setName($view->Name);

        return $newView;
    }

    /**
     * Parse traditional folder JSON to object.
     *
     * @param  \stdClass  $traditionalFolder
     *
     * @return MFilesTraditionalFolder
     */
    private function parseTraditionalFolder(stdClass $traditionalFolder): MFilesTraditionalFolder
    {
        $newTraditionalFolder = new MFilesTraditionalFolder();

        $newTraditionalFolder->setItem($traditionalFolder->Item);
        $newTraditionalFolder->setVersion($traditionalFolder->Version);
        $newTraditionalFolder->setDisplayValue($traditionalFolder->DisplayValue);

        return $newTraditionalFolder;
    }

    /**
     * Parse property folder JSON to object.
     *
     * @param  \stdClass  $propertyFolder
     *
     * @return MFilesPropertyFolder
     */
    private function parsePropertyFolder(stdClass $propertyFolder): MFilesPropertyFolder
    {
        $newPropertyFolder = new MFilesPropertyFolder();

        if (isset($propertyFolder->Lookup)) {
            $lookup = $this->parseLookup($propertyFolder->Lookup);

            $newPropertyFolder->setLookup($lookup);
        }

        $newPropertyFolder->setHasValue($propertyFolder->HasValue);
        $newPropertyFolder->setDisplayValue($propertyFolder->DisplayValue);
        $newPropertyFolder->setDataType($propertyFolder->DataType);
        $newPropertyFolder->setSerializedValue($propertyFolder->SerializedValue);
        $newPropertyFolder->setSortingKey($propertyFolder->SortingKey);
        $newPropertyFolder->setHasAutomaticPermission($propertyFolder->HasAutomaticPermission);

        return $newPropertyFolder;
    }

    /**
     * @param  \stdClass  $lookup
     *
     * @return MFilesLookup
     */
    private function parseLookup(stdClass $lookup)
    {
        $newLookup = new MFilesLookup();

        $newLookup->setItem($lookup->Item);
        $newLookup->setVersion($lookup->Version);
        $newLookup->setDisplayValue($lookup->DisplayValue);

        return $newLookup;
    }
}
