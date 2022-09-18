<?php

namespace Deadan\MFiles\Service;

/**
 * Class MFilesGetService
 *
 * @package Deadan\MFiles\Service
 */
abstract class MFilesGetService extends MFilesBaseService
{
    /**
     * @param  \Deadan\MFiles\Service\MFilesRequestInterface  $request
     * @return \Deadan\MFiles\Service\MFilesResponseInterface|object
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
