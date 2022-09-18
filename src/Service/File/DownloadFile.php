<?php

namespace Deadan\MFiles\Service\File;

use Deadan\MFiles\Service\File\Request\DownloadFileRequest;
use Deadan\MFiles\Service\File\Response\DownloadFileResponse;
use Deadan\MFiles\Service\MFilesGetService;
use Deadan\MFiles\Service\MFilesRequestInterface;
use Deadan\MFiles\Service\MFilesResponseInterface;

/**
 * Class DownloadFile
 *
 * @package Deadan\MFiles\Service\File
 */
class DownloadFile extends MFilesGetService
{
    /**
     *
     */
    const URI = '/REST/objects/{{ObjectType}}/{{ObjectID}}/{{ObjectVersion}}/files/{{FileID}}/content';

    /**
     * @param  MFilesRequestInterface  $request
     *
     * @return MFilesResponseInterface
     * @throws \Deadan\MFiles\Service\Exception\ClientErrorException
     * @throws \Deadan\MFiles\Service\Exception\NotFoundException
     * @throws \Deadan\MFiles\Service\Exception\ServiceException
     *
     * @throws \Deadan\MFiles\Service\Exception\AccessDeniedException
     */
    public function call(MFilesRequestInterface $request)
    {
        $response = $this->getClient()
            ->get($this->getUri($request), $this->getRequestOptions($request));

        return $this->parseResponse($response->body());
    }

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
        /** @var DownloadFileRequest $request */
        $uri = $this->generateDynamicUriFromParams([
            'ObjectType'    => $request->getObjectType(),
            'ObjectID'      => $request->getObjectID(),
            'ObjectVersion' => $request->getObjectVersion(),
            'FileID'        => $request->getFileID(),
        ], self::URI);

        return $uri;
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
        return [];
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
        $downloadFileResponse = new DownloadFileResponse();

        $downloadFileResponse->setFile($response);

        return $downloadFileResponse;
    }
}
