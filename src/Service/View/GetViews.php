<?php

namespace Deadan\MFiles\Service\View;

use Deadan\MFiles\Service\MFilesGetService;
use Deadan\MFiles\Service\MFilesRequestInterface;
use Deadan\MFiles\Service\MFilesResponseInterface;
use Deadan\MFiles\Service\View\Parser\FolderUIStateParser;
use Deadan\MFiles\Service\View\Parser\ViewParser;
use Deadan\MFiles\Service\View\Parser\ViewModeInfoParser;
use Deadan\MFiles\Service\View\Response\GetViewsResponse;

/**
 * Class GetViews
 *
 * @package Deadan\MFiles\Service\View
 */
class GetViews extends MFilesGetService
{
    /**
     *
     */
    const URI = '/REST/views/items';

    /**
     * Return the service URI.
     * Follow the rules from RFC 3986 http://tools.ietf.org/html/rfc3986#section-5.2.
     *
     * @param  MFilesRequestInterface|null  $request
     *
     * @return string
     */
    public function getUri($request = null): string
    {
        return self::URI;
    }

    /**
     * Transform an Request to POST parameters.
     *
     * @param  MFilesRequestInterface  $request
     *
     * @return array
     */
    public function getRequestOptions(MFilesRequestInterface $request): array
    {
        return [

        ];
    }

    /**
     * Transform an JSON response to a Response object.
     *
     * @param $response
     *
     * @return GetViewsResponse
     */
    protected function parseResponse($response): MFilesResponseInterface
    {
        $items = $this->parseItems($response->Items);
//        $viewMode = (new ViewModeInfoParser())->parse($response->ViewModeInfo);
        $folderUIState = (new FolderUIStateParser())->parse($response->FolderUIState);

        $getViewsResponse = new GetViewsResponse();

        $getViewsResponse->setPath($response->Path);
        $getViewsResponse->setViewSettingsID($response->ViewSettingsID);
        $getViewsResponse->setLevelDefinition($response->LevelDefinition);
        $getViewsResponse->setTotalCount($response->TotalCount);
        $getViewsResponse->setFolderDefs($response->FolderDefs);

//        $getViewsResponse->setViewModeInfo($viewMode);
        $getViewsResponse->setItems($items);
        $getViewsResponse->setFolderUIState($folderUIState);

        return $getViewsResponse;
    }

    /**
     * Parse JSON to object items.
     *
     * @param  array  $items
     *
     * @return array
     */
    protected function parseItems(array $items)
    {
        $objects = [];

        foreach ($items as $item) {
            array_push($objects, (new ViewParser())->parse($item));
        }

        return $objects;
    }
}
