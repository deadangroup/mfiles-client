<?php

namespace Herufi\MFiles;

use Herufi\MFiles\Service\File\DownloadFile;
use Herufi\MFiles\Service\File\Request\DownloadFileRequest;
use Herufi\MFiles\Service\File\Response\DownloadFileResponse;
use Herufi\MFiles\Service\Object\GetObjects;
use Herufi\MFiles\Service\Object\Request\GetObjectsRequest;
use Herufi\MFiles\Service\Search\Request\SearchRequest;
use Herufi\MFiles\Service\Search\Response\SearchResponse;
use Herufi\MFiles\Service\Search\Search;
use Herufi\MFiles\Service\User\GetAuthToken;
use Herufi\MFiles\Service\User\Request\GetAuthTokenRequest;
use Herufi\MFiles\Service\User\Response\GetAuthTokenResponse;
use Herufi\MFiles\Service\Vault\GetVault;
use Herufi\MFiles\Service\Vault\Request\GetVaultRequest;
use Herufi\MFiles\Service\Vault\Response\GetVaultResponse;
use Herufi\MFiles\Service\View\GetViews;
use Herufi\MFiles\Service\View\Request\GetViewsRequest;
use Herufi\MFiles\Service\View\Response\GetViewsResponse;
use Herufi\MFiles\Service\ViewItems\GetItemsFromView;
use Herufi\MFiles\Service\ViewItems\Request\GetItemsFromViewRequest;
use Herufi\MFiles\Service\ViewItems\Response\GetItemsFromViewResponse;
use Herufi\MFiles\Service\ViewObjects\GetObjectsFromView;
use Herufi\MFiles\Service\ViewObjects\Request\GetObjectsFromViewRequest;

/**
 * Class MFilesClient
 *
 * @package Herufi\MFiles
 */
class MFilesClient
{
    /**
     * @var \Herufi\MFiles\APIHandler
     */
    private $apiHandler;

    /**
     * MFilesClient constructor.
     * @param  \Herufi\MFiles\APIHandler  $apiHandler
     */
    public function __construct(APIHandler $apiHandler)
    {
        $this->apiHandler = $apiHandler;
    }

    /**
     * Allows to authorize client requests to the server.
     *
     * @param  string  $username
     * @param  string  $password
     * @param  string  $vault_guid
     *
     * @return GetAuthTokenResponse
     * @throws Service\Exception\ClientErrorException
     * @throws Service\Exception\InvalidJsonException
     * @throws Service\Exception\NotFoundException
     * @throws Service\Exception\ServiceException
     *
     * @throws Service\Exception\AccessDeniedException
     */
    public function authorize(string $username, string $password, string $vault_guid)
    {
        $service = new GetAuthToken($this->apiHandler);

        /** @var GetAuthTokenResponse $response */
        $response = $service->call(new GetAuthTokenRequest($username, $password, $vault_guid));

        $this->apiHandler->setAuthToken($response->getValue());

        return $response;
    }

    /**
     * @return \Herufi\MFiles\Service\Vault\Response\GetVaultResponse
     */
    public function getVaults()
    {
        $service = new GetVault($this->apiHandler);

        /** @var GetVaultResponse $response */
        $response = $service->call(new GetVaultRequest());

        return $response;
    }

    /**
     * @return \Herufi\MFiles\Service\Object\Response\GetObjectsResponse
     */
    public function getAllDocuments()
    {
        $service = new GetObjects($this->apiHandler);

        /** @var \Herufi\MFiles\Service\Object\Response\GetObjectsResponse $response */
        $response = $service->call(new GetObjectsRequest());

        return $response;
    }

    /**
     * @return \Herufi\MFiles\Service\View\Response\GetViewsResponse
     */
    public function getRootViewItems()
    {
        $service = new GetViews($this->apiHandler);

        /** @var GetViewsResponse $response */
        $response = $service->call(new GetViewsRequest());

        return $response;
    }

    /**
     * @param  int  $viewId
     * @return \Herufi\MFiles\Service\ViewItems\Response\GetItemsFromViewResponse
     */
    public function getItemsFromView(int $viewId)
    {
        $service = new GetItemsFromView($this->apiHandler);

        /** @var GetItemsFromViewResponse $response */
        $response = $service->call(new GetItemsFromViewRequest($viewId));

        return $response;
    }

    /**
     * @param  int  $viewId
     * @return \Herufi\MFiles\Service\ViewObjects\Response\GetObjectsFromViewResponse
     */
    public function getObjectsFromView(int $viewId)
    {
        $service = new GetObjectsFromView($this->apiHandler);

        /** @var \Herufi\MFiles\Service\ViewObjects\Response\GetObjectsFromViewResponse $response */
        $response = $service->call(new GetObjectsFromViewRequest($viewId));

        return $response;
    }

    /**
     * @param  int     $fileID
     * @param  int     $objectType
     * @param  int     $objectID
     * @param  string  $objectVersion
     * @return \Herufi\MFiles\Service\File\Response\DownloadFileResponse
     * @throws \Herufi\MFiles\Service\Exception\AccessDeniedException
     * @throws \Herufi\MFiles\Service\Exception\ClientErrorException
     * @throws \Herufi\MFiles\Service\Exception\NotFoundException
     * @throws \Herufi\MFiles\Service\Exception\ServiceException
     */
    public function downloadFile(
        int $fileID,
        int $objectType,
        int $objectID,
        string $objectVersion = 'latest'
    ) {
        $service = new DownloadFile($this->apiHandler);

        /** @var DownloadFileResponse $response */
        $response = $service->call(new DownloadFileRequest($fileID, $objectType, $objectID, $objectVersion));

        return $response;
    }

    /**
     * @param  array  $searchRequest
     * @return \Herufi\MFiles\Service\Search\Response\SearchResponse
     */
    public function searchResult(
        array $searchRequest
    ) {
        $result = new Search($this->apiHandler);

        /** @var SearchResponse $response */
        $response = $result->call(new SearchRequest($searchRequest));

        return $response;
    }

    /**
     * @return \Herufi\MFiles\APIHandler
     */
    public function getApiHandler()
    {
        return $this->apiHandler;
    }
}
