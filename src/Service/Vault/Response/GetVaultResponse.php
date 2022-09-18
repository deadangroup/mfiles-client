<?php

namespace Herufi\MFiles\Service\Vault\Response;

use Herufi\MFiles\Service\Response\BaseResponse;

/**
 * Class GetVaultResponse
 *
 * @package Herufi\MFiles\Service\Vault\Response
 */
class GetVaultResponse extends BaseResponse
{
    /** @var string */
    private $Name;

    /**
     * @var string
     */
    private $GUID;

    /**
     * @var string
     */
    private $Authentication;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * @param  string  $Name
     */
    public function setName(string $Name): void
    {
        $this->Name = $Name;
    }

    /**
     * @return mixed
     */
    public function getGUID(): string
    {
        return $this->GUID;
    }

    /**
     * @param  mixed  $GUID
     */
    public function setGUID($GUID): void
    {
        $this->GUID = $GUID;
    }

    /**
     * @return mixed
     */
    public function getAuthentication(): string
    {
        return $this->Authentication;
    }

    /**
     * @param  mixed  $Authentication
     */
    public function setAuthentication($Authentication): void
    {
        $this->Authentication = $Authentication;
    }
}
