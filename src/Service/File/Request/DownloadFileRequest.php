<?php

namespace Deadan\MFiles\Service\File\Request;

use Deadan\MFiles\Service\MFilesRequestInterface;

/**
 * Class DownloadFileRequest
 *
 * @package Deadan\MFiles\Service\File\Request
 */
class DownloadFileRequest implements MFilesRequestInterface
{
    /** @var int */
    private $fileID;

    /** @var int */
    private $objectType;

    /** @var int */
    private $objectID;

    /** @var string */
    private $objectVersion;

    /**
     * DownloadFileRequest constructor.
     *
     * @param  int     $fileID
     * @param  int     $objectType
     * @param  int     $objectID
     * @param  string  $objectVersion
     */
    public function __construct(
        int $fileID,
        int $objectType,
        int $objectID,
        string $objectVersion
    ) {
        $this->setFileID($fileID);
        $this->setObjectID($objectID);
        $this->setObjectType($objectType);
        $this->setObjectVersion($objectVersion);
    }

    /**
     * @return int
     */
    public function getFileID(): int
    {
        return $this->fileID;
    }

    /**
     * @param  int  $fileID
     */
    public function setFileID(int $fileID)
    {
        $this->fileID = $fileID;
    }

    /**
     * @return int
     */
    public function getObjectID(): int
    {
        return $this->objectID;
    }

    /**
     * @param  int  $objectID
     */
    public function setObjectID(int $objectID)
    {
        $this->objectID = $objectID;
    }

    /**
     * @return int
     */
    public function getObjectType(): int
    {
        return $this->objectType;
    }

    /**
     * @param  int  $objectType
     */
    public function setObjectType(int $objectType)
    {
        $this->objectType = $objectType;
    }

    /**
     * @return string
     */
    public function getObjectVersion(): string
    {
        return $this->objectVersion;
    }

    /**
     * @param  string  $objectVersion
     */
    public function setObjectVersion(string $objectVersion)
    {
        $this->objectVersion = $objectVersion;
    }
}
