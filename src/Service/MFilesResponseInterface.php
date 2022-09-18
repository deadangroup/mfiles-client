<?php

namespace Herufi\MFiles\Service;

/**
 * Interface MFilesResponseInterface
 *
 * @package Herufi\MFiles\Service
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
