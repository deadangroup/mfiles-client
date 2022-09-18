<?php

namespace Deadan\MFiles\Service\View\Parser;

use Deadan\MFiles\Model\View\MFilesViewModeInfo;
use stdClass;

/**
 * Class ViewModeInfoParser
 *
 * @package Deadan\MFiles\Service\View\Parser
 */
class ViewModeInfoParser
{
    /**
     * Parse ViewModeInfo JSON to view mode info object.
     *
     * @param  \stdClass  $viewModeInfo
     *
     * @return MFilesViewModeInfo
     */
    public function parse(stdClass $viewModeInfo): MFilesViewModeInfo
    {
        $newViewModeInfo = new MFilesViewModeInfo();

        $newViewModeInfo->setViewMode($viewModeInfo->ViewMode);
        $newViewModeInfo->setDisplayMode($viewModeInfo->DisplayMode);
        $newViewModeInfo->setMetadataAtRightPane($viewModeInfo->MetadataAtRightPane);

        return $newViewModeInfo;
    }
}
