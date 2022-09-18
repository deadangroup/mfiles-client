<?php

namespace Deadan\MFiles\Service;

use Deadan\MFiles\Service\Exception\MFilesException;

/**
 * Interface MFilesServiceInterface
 *
 * @package Deadan\MFiles\Service
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
