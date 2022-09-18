<?php

namespace Deadan\MFiles\Service\Vault;

use Deadan\MFiles\Service\MFilesGetService;
use Deadan\MFiles\Service\MFilesPostService;
use Deadan\MFiles\Service\MFilesRequestInterface;
use Deadan\MFiles\Service\MFilesResponseInterface;
use Deadan\MFiles\Service\Vault\Request\GetVaultRequest;
use Deadan\MFiles\Service\Vault\Response\GetVaultResponse;

/**
 * Class GetVault
 *
 * @package Deadan\MFiles\Service\Vault
 */
class GetVault extends MFilesGetService
{
    /**
     *
     */
    const URI = '/REST/server/vaults';

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
        /* @var GetVaultRequest $request */
        return [

        ];
    }

    /**
     * Transform an Json response to a Response object.
     *
     * @param $response
     *
     * @return MFilesResponseInterface
     */
    protected function parseResponse($response): MFilesResponseInterface
    {
        $vaultResponse = new GetVaultResponse();
        $vaultResponse->setName($response->Name);
        $vaultResponse->setGUID($response->GUID);
        $vaultResponse->setAuthentication($response->Authentication);

        return $vaultResponse;
    }
}
