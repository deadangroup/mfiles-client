<?php

namespace Deadan\MFiles;

use Deadan\MFiles\Service\File\DownloadFile;
use Deadan\MFiles\Service\File\Request\DownloadFileRequest;
use Deadan\MFiles\Service\File\Response\DownloadFileResponse;
use Deadan\MFiles\Service\Object\GetObjects;
use Deadan\MFiles\Service\Object\Request\GetObjectsRequest;
use Deadan\MFiles\Service\Search\Request\SearchRequest;
use Deadan\MFiles\Service\Search\Response\SearchResponse;
use Deadan\MFiles\Service\Search\Search;
use Deadan\MFiles\Service\User\GetAuthToken;
use Deadan\MFiles\Service\User\Request\GetAuthTokenRequest;
use Deadan\MFiles\Service\User\Response\GetAuthTokenResponse;
use Deadan\MFiles\Service\Vault\GetVault;
use Deadan\MFiles\Service\Vault\Request\GetVaultRequest;
use Deadan\MFiles\Service\Vault\Response\GetVaultResponse;
use Deadan\MFiles\Service\View\GetViews;
use Deadan\MFiles\Service\View\Request\GetViewsRequest;
use Deadan\MFiles\Service\View\Response\GetViewsResponse;
use Deadan\MFiles\Service\ViewItems\GetItemsFromView;
use Deadan\MFiles\Service\ViewItems\Request\GetItemsFromViewRequest;
use Deadan\MFiles\Service\ViewItems\Response\GetItemsFromViewResponse;
use Deadan\MFiles\Service\ViewObjects\GetObjectsFromView;
use Deadan\MFiles\Service\ViewObjects\Request\GetObjectsFromViewRequest;

/**
 * Class MFilesClient
 *
 * @package Deadan\MFiles
 */
class MFilesClient
{
    /**
     * @var \Deadan\MFiles\APIHandler
     */
    private $apiHandler;

    /**
     * MFilesClient constructor.
     * @param  \Deadan\MFiles\APIHandler  $apiHandler
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
     * @return \Deadan\MFiles\Service\Vault\Response\GetVaultResponse
     */
    public function getVaults()
    {
        $service = new GetVault($this->apiHandler);

        /** @var GetVaultResponse $response */
        $response = $service->call(new GetVaultRequest());

        return $response;
    }

    /**
     * @return \Deadan\MFiles\Service\Object\Response\GetObjectsResponse
     */
    public function getAllDocuments()
    {
        $service = new GetObjects($this->apiHandler);

        /** @var \Deadan\MFiles\Service\Object\Response\GetObjectsResponse $response */
        $response = $service->call(new GetObjectsRequest());

        return $response;
    }

    /**
     * @return \Deadan\MFiles\Service\View\Response\GetViewsResponse
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
     * @return \Deadan\MFiles\Service\ViewItems\Response\GetItemsFromViewResponse
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
     * @return \Deadan\MFiles\Service\ViewObjects\Response\GetObjectsFromViewResponse
     */
    public function getObjectsFromView(int $viewId)
    {
        $service = new GetObjectsFromView($this->apiHandler);

        /** @var \Deadan\MFiles\Service\ViewObjects\Response\GetObjectsFromViewResponse $response */
        $response = $service->call(new GetObjectsFromViewRequest($viewId));

        return $response;
    }

    /**
     * @param  int     $fileID
     * @param  int     $objectType
     * @param  int     $objectID
     * @param  string  $objectVersion
     * @return \Deadan\MFiles\Service\File\Response\DownloadFileResponse
     * @throws \Deadan\MFiles\Service\Exception\AccessDeniedException
     * @throws \Deadan\MFiles\Service\Exception\ClientErrorException
     * @throws \Deadan\MFiles\Service\Exception\NotFoundException
     * @throws \Deadan\MFiles\Service\Exception\ServiceException
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
     * @return \Deadan\MFiles\Service\Search\Response\SearchResponse
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
     * @return \Deadan\MFiles\APIHandler
     */
    public function getApiHandler()
    {
        return $this->apiHandler;
    }
}
