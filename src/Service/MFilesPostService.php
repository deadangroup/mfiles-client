<?php

namespace Herufi\MFiles\Service;

/**
 * Class MFilesPostService
 *
 * @package Herufi\MFiles\Service
 */
abstract class MFilesPostService extends MFilesBaseService
{
    /**
     * @param  \Herufi\MFiles\Service\MFilesRequestInterface  $request
     * @return \Herufi\MFiles\Service\MFilesResponseInterface
     */
    public function call(MFilesRequestInterface $request)
    {
        $decodedResponse = $this->getClient()
            ->post($this->getUri(), $this->getRequestOptions($request));

        return $this->parseResponse($decodedResponse);
    }
}
