<?php

namespace Deadan\MFiles\Service\User\Response;

use Deadan\MFiles\Service\Response\BaseResponse;

/**
 * Class GetVaultResponse
 *
 * @package Deadan\MFiles\Service\User\Response
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
