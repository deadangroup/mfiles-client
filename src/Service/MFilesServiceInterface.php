<?php

namespace Herufi\MFiles\Service;

use Herufi\MFiles\Service\Exception\MFilesException;

/**
 * Interface MFilesServiceInterface
 *
 * @package Herufi\MFiles\Service
 */
interface MFilesServiceInterface
{
    /**
     * @param  MFilesRequestInterface  $request
     *
     * @return MFilesResponseInterface
     * @throws MFilesException
     *
     */
    public function call(MFilesRequestInterface $request);
}
