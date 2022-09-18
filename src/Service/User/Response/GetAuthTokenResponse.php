<?php

namespace Herufi\MFiles\Service\User\Response;

use Herufi\MFiles\Service\Response\BaseResponse;

/**
 * Class GetVaultResponse
 *
 * @package Herufi\MFiles\Service\User\Response
 */
class GetAuthTokenResponse extends BaseResponse
{
    /** @var string */
    private $value;

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param  string  $value
     */
    public function setValue(string $value)
    {
        $this->value = $value;
    }
}
