<?php

namespace Deadan\MFiles\Service\Response;

use Deadan\MFiles\Service\MFilesResponseInterface;

/**
 * Class BaseResponse
 *
 * @package Deadan\MFiles\Service\Response
 */
abstract class BaseResponse implements MFilesResponseInterface
{
    /**
     * A status code in response to the operation.
     *
     * @var int
     */
    private $status;

    /**
     * Additional information about the operation - human readable.
     *
     * @var string
     */
    private $message;

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param  int  $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param  string  $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }
}
