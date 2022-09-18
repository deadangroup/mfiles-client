<?php

namespace Herufi\MFiles\Service\Object\Response;

use Herufi\MFiles\Model\Object\MFilesObject;
use Herufi\MFiles\Service\Response\BaseResponse;

/**
 * Class GetObjectsResponse
 *
 * @package Herufi\MFiles\Service\Object\Response
 */
class GetObjectsResponse extends BaseResponse
{
    /** @var MFilesObject[] */
    private $objects;

    /** @var bool */
    private $moreResults;

    /**
     * @return MFilesObject[]
     */
    public function getObjects(): array
    {
        return $this->objects;
    }

    /**
     * @param  MFilesObject[]  $objects
     */
    public function setObjects(array $objects)
    {
        $this->objects = $objects;
    }

    /**
     * @return bool
     */
    public function getMoreResults()
    {
        return $this->moreResults;
    }

    /**
     * @param  bool  $moreResults
     */
    public function setMoreResults(bool $moreResults)
    {
        $this->moreResults = $moreResults;
    }
}
