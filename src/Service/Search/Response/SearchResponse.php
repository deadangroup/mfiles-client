<?php

namespace Deadan\MFiles\Service\Search\Response;

use Deadan\MFiles\Model\Object\MFilesObject;
use Deadan\MFiles\Service\Response\BaseResponse;

/**
 * Class SearchResponse
 *
 * @package Deadan\MFiles\Service\Search\Response
 */
class SearchResponse extends BaseResponse
{
    /** @var
     * \Deadan\MFiles\Model\Object\MFilesObject[]
     */
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
