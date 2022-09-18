<?php

namespace Deadan\MFiles\Service;

/**
 * Class MFilesPostService
 *
 * @package Deadan\MFiles\Service
 */
abstract class MFilesPostService extends MFilesBaseService
{
    /**
     * @param  \Deadan\MFiles\Service\MFilesRequestInterface  $request
     * @return \Deadan\MFiles\Service\MFilesResponseInterface
     */
    public function call(MFilesRequestInterface $request)
    {
        $decodedResponse = $this->getClient()
            ->post($this->getUri(), $this->getRequestOptions($request));

        return $this->parseResponse($decodedResponse);
    }
}
