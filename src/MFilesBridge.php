<?php

namespace Deadan\MFiles;

use Exception;

/**
 * Class MFilesBridge
 *
 * @package Deadan\MFiles
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
     * @throws \Deadan\MFiles\Service\Exception\AccessDeniedException
     * @throws \Deadan\MFiles\Service\Exception\ClientErrorException
     * @throws \Deadan\MFiles\Service\Exception\InvalidJsonException
     * @throws \Deadan\MFiles\Service\Exception\NotFoundException
     * @throws \Deadan\MFiles\Service\Exception\ServiceException
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
