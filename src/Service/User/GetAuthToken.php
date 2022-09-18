<?php

namespace Deadan\MFiles\Service\User;

use Deadan\MFiles\Service\Exception\InvalidJsonException;
use Deadan\MFiles\Service\MFilesPostService;
use Deadan\MFiles\Service\MFilesRequestInterface;
use Deadan\MFiles\Service\MFilesResponseInterface;
use Deadan\MFiles\Service\User\Request\GetAuthTokenRequest;
use Deadan\MFiles\Service\User\Response\GetAuthTokenResponse;

/**
 * Class GetAuthToken
 *
 * @package Deadan\MFiles\Service\User
 */
class GetAuthToken extends MFilesPostService
{
    /**
     *
     */
    const URI = '/REST/server/authenticationtokens.aspx';

    /**
     * Return the service URI.
     *
     * @param  null  $request
     *
     * @return string
     */
    public function getUri($request = null): string
    {
        return self::URI;
    }

    /**
     * Transform an Request to POST options.
     *
     * @param  MFilesRequestInterface  $request
     *
     * @return array
     */
    public function getRequestOptions(MFilesRequestInterface $request): array
    {
        /* @var GetAuthTokenRequest $request */
        return [
            'Username'  => $request->getUsername(),
            'Password'  => $request->getPassword(),
            'VaultGuid' => $request->getVaultGuid(),
        ];
    }

    /**
     * Transform an Json response to a Response object.
     *
     * @param $response
     *
     * @return MFilesResponseInterface
     * @throws InvalidJsonException
     *
     */
    protected function parseResponse($response): MFilesResponseInterface
    {
        if ($this->isValidResponse($response)) {
            $authTokenResponse = new GetAuthTokenResponse();
            $authTokenResponse->setValue($response->Value);

            return $authTokenResponse;
        } else {
            throw new InvalidJsonException();
        }
    }

    /**
     * Verifies the correctness of the API response.
     *
     * @param  \stdClass  $response
     *
     * @return bool
     */
    protected function isValidResponse($response)
    {
        if (isset($response->Value) && !empty($response->Value)) {
            return true;
        }

        return false;
    }
}
