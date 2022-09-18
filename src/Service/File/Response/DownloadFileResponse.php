<?php

namespace Deadan\MFiles\Service\File\Response;

use Deadan\MFiles\Service\Response\BaseResponse;

/**
 * Class DownloadFileResponse
 *
 * @package Deadan\MFiles\Service\File\Response
 */
class DownloadFileResponse extends BaseResponse
{
    /** @var string */
    private $file;

    /**
     * @return string
     */
    public function getFile(): string
    {
        return $this->file;
    }

    /**
     * @param  string  $file
     */
    public function setFile(string $file)
    {
        $this->file = $file;
    }
}
