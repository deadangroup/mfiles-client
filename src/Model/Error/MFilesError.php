<?php

namespace Deadan\MFiles\Model\Error;

/**
 * Class MFilesError
 *
 * @package Deadan\MFiles\Model\Error
 */
class MFilesError
{
    /** @var int */
    private $status;

    /** @var string */
    private $url;

    /** @var string */
    private $method;

    /** @var MFilesErrorException */
    private $exception;

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param  int  $status
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param  string  $url
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @param  string  $method
     */
    public function setMethod(string $method): void
    {
        $this->method = $method;
    }

    /**
     * @return MFilesErrorException
     */
    public function getException(): MFilesErrorException
    {
        return $this->exception;
    }

    /**
     * @param  MFilesErrorException  $exception
     */
    public function setException(MFilesErrorException $exception): void
    {
        $this->exception = $exception;
    }
}
