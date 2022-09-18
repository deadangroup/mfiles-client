<?php

namespace Herufi\MFiles\Service;

/**
 * Class MFilesGetService
 *
 * @package Herufi\MFiles\Service
 */
abstract class MFilesGetService extends MFilesBaseService
{
    /**
     * @param  \Herufi\MFiles\Service\MFilesRequestInterface  $request
     * @return \Herufi\MFiles\Service\MFilesResponseInterface|object
     */
    public function call(MFilesRequestInterface $request)
    {
        $response = $this->getClient()
            ->get($this->getUri($request), $this->getRequestOptions($request));

        $decodedResponse = $response->object();

        if (isset($decodedResponse->Status) && $decodedResponse->Status > 400) {
            return $decodedResponse;
        } else {
            return $this->parseResponse($decodedResponse);
        }
    }
}
