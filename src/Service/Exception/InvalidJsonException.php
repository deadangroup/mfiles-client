<?php

namespace Deadan\MFiles\Service\Exception;

/**
 * Class InvalidJsonException
 *
 * @package Deadan\MFiles\Service\Exception
 */
class InvalidJsonException extends MFilesException
{
    /**
     * InvalidJsonException constructor.
     */
    public function __construct()
    {
        parent::__construct('Invalid Json Error');
    }
}
