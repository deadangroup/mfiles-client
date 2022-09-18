<?php

namespace Herufi\MFiles;

use Exception;

/**
 * Class MFilesBridge
 *
 * @package Herufi\MFiles
 */
class MFilesBridge
{
    /** @var MFilesClient $client */
    private $client;

    /**
     * MFilesHelper constructor.
     *
     * @throws Exception
     */
    public function __construct(MFilesClient $client)
    {
        $this->client = $client;
    }

    /**
     * @return MFilesClient
     * @throws \Herufi\MFiles\Service\Exception\AccessDeniedException
     * @throws \Herufi\MFiles\Service\Exception\ClientErrorException
     * @throws \Herufi\MFiles\Service\Exception\InvalidJsonException
     * @throws \Herufi\MFiles\Service\Exception\NotFoundException
     * @throws \Herufi\MFiles\Service\Exception\ServiceException
     *
     * @throws Exception
     */
    public function getAuthorizedClient($username, $password, $vault_guid): MFilesClient
    {
        $this->getClient()
            ->authorize($username, $password, $vault_guid);

        return $this->getClient();
    }

    /**
     * @return MFilesClient
     */
    public function getClient(): MFilesClient
    {
        return $this->client;
    }
}
