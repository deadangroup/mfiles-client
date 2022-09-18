<?php

namespace Deadan\MFiles\Service;

/**
 * Interface MFilesResponseInterface
 *
 * @package Deadan\MFiles\Service
 */
interface MFilesResponseInterface
{
    /**
     * @return int
     */
    public function getStatus();

    /**
     * @return string
     */
    public function getMessage();
}
