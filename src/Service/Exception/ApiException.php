<?php

declare(strict_types=1);

namespace Herufi\MFiles\Service\Exception;

use Exception;

/**
 * Class ApiException
 *
 * @package Herufi\MFiles\Service\Exception
 */
class ApiException extends Exception
{
    /**
     * @var string|null
     */
    private $httpMethod;

    /**
     * @var string|null
     */
    private $url;

    /**
     * ApiException constructor.
     *
     * @param  string       $message
     * @param  int          $code
     * @param  string|null  $url
     * @param  string|null  $httpMethod
     */
    public function __construct(string $message, int $code = 0, string $url = null, string $httpMethod = null)
    {
        $this->httpMethod = $httpMethod;
        $this->url = $url;

        $message = 'MFile API Error: '.$message;

        parent::__construct($message, $code);
    }

    /**
     * @return string|null
     */
    public function getHttpMethod()
    {
        return $this->httpMethod;
    }

    /**
     * @return string|null
     */
    public function getUrl()
    {
        return $this->url;
    }
}
