<?php

namespace Deadan\MFiles\Service\Exception;

use GuzzleHttp\Message\RequestInterface;
use GuzzleHttp\Message\ResponseInterface;

/**
 * Class ServiceException
 *
 * @package Deadan\MFiles\Service\Exception
 */
class ServiceException extends MFilesException
{
    /** @var RequestInterface */
    private $request;

    /** @var ResponseInterface */
    private $response;

    /**
     * ServiceException constructor.
     *
     * @param                     $message
     * @param  RequestInterface   $request
     * @param  ResponseInterface  $response
     */
    public function __construct($message, RequestInterface $request, ResponseInterface $response)
    {
        parent::__construct($message);
        $this->request = $request;
        $this->response = $response;
    }

    /**
     * @return RequestInterface
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @return ResponseInterface
     */
    public function getResponse()
    {
        return $this->response;
    }
}
