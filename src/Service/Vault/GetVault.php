<?php

namespace Herufi\MFiles\Service\Vault;

use Herufi\MFiles\Service\MFilesGetService;
use Herufi\MFiles\Service\MFilesPostService;
use Herufi\MFiles\Service\MFilesRequestInterface;
use Herufi\MFiles\Service\MFilesResponseInterface;
use Herufi\MFiles\Service\Vault\Request\GetVaultRequest;
use Herufi\MFiles\Service\Vault\Response\GetVaultResponse;

/**
 * Class GetVault
 *
 * @package Herufi\MFiles\Service\Vault
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
