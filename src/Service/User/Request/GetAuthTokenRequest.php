<?php

namespace Herufi\MFiles\Service\User\Request;

use Herufi\MFiles\Service\MFilesRequestInterface;

/**
 * Class GetVaultRequest
 *
 * @package Herufi\MFiles\Service\User\Request
 */
class GetAuthTokenRequest implements MFilesRequestInterface
{
    /** @var string */
    private $username;

    /** @var string */
    private $password;

    /** @var string */
    private $vault_guid;

    /**
     * Authentication constructor.
     *
     * @param  string  $username
     * @param  string  $password
     * @param  string  $vault_guid
     */
    public function __construct(
        string $username,
        string $password,
        string $vault_guid
    ) {
        $this->username = $username;
        $this->password = $password;
        $this->vault_guid = $vault_guid;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param  string  $username
     */
    public function setUsername(string $username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param  string  $password
     */
    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getVaultGuid(): string
    {
        return $this->vault_guid;
    }

    /**
     * @param  string  $vault_guid
     */
    public function setVaultGuid(string $vault_guid)
    {
        $this->vault_guid = $vault_guid;
    }
}
