<?php

namespace Herufi\MFiles\Service\Search\Request;

use Herufi\MFiles\Service\MFilesRequestInterface;

/**
 * Class SearchRequest
 *
 * @package Herufi\MFiles\Service\Search\Request
 */
class SearchRequest implements MFilesRequestInterface
{
    /** @var string */
    private $searchRequest;

    /**
     * SearchRequest constructor.
     *
     * @param  array  $searchRequest
     */
    public function __construct(
        array $searchRequest
    ) {
        $this->setSearchRequest($searchRequest);
    }

    /**
     * @return string
     */
    public function getSearchRequest(): string
    {
        return http_build_query($this->searchRequest);
    }

    /**
     * @param  array  $searchRequest
     */
    public function setSearchRequest(array $searchRequest)
    {
        $this->searchRequest = $searchRequest;
    }
}
