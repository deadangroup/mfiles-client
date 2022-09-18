<?php

namespace Herufi\MFiles\Service\Object;

use Herufi\MFiles\Service\MFilesGetService;
use Herufi\MFiles\Service\MFilesRequestInterface;
use Herufi\MFiles\Service\MFilesResponseInterface;
use Herufi\MFiles\Service\Object\Parser\ObjectParser;
use Herufi\MFiles\Service\Object\Response\GetObjectsResponse;

/**
 * Class GetObjects
 *
 * @package Herufi\MFiles\Service\Object
 */
class GetObjects extends MFilesGetService
{
    /**
     *
     */
    const URI = '/REST/objects';

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
     * @return MFilesResponseInterface
     */
    protected function parseResponse($response): MFilesResponseInterface
    {
        $objects = $this->parseItems($response->Items);

        $getObjectsResponse = new GetObjectsResponse();
        $getObjectsResponse->setObjects($objects);
        $getObjectsResponse->setMoreResults($response->MoreResults);

        return $getObjectsResponse;
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
            array_push($objects, (new ObjectParser())->parse($item));
        }

        return $objects;
    }
}
