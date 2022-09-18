<?php

namespace Herufi\MFiles\Model;

use DateTimeInterface;

/**
 * Class MFilesFile
 *
 * @package Herufi\MFiles\Model
 */
class MFilesFile
{
    /** @var int */
    private $id;

    /** @var string */
    private $name;

    /** @var string */
    private $escapedName;

    /** @var string */
    private $extension;

    /** @var int */
    private $size;

    /** @var \DateTimeInterface */
    private $lastModified;

    /** @var \DateTimeInterface */
    private $changeTimeUTC;

    /** @var \DateTimeInterface */
    private $changeTime;

    /** @var \DateTimeInterface */
    private $createdUTC;

    /** @var \DateTimeInterface */
    private $createdDisplayValue;

    /** @var \DateTimeInterface */
    private $lastModifiedDisplayValue;

    /** @var string */
    private $fileGUID;

    /** @var int */
    private $version;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param  int  $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param  string  $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @param  int  $size
     */
    public function setSize(int $size)
    {
        $this->size = $size;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLastModifiedDisplayValue(): DateTimeInterface
    {
        return $this->lastModifiedDisplayValue;
    }

    /**
     * @param  \DateTimeInterface  $lastModifiedDisplayValue
     */
    public function setLastModifiedDisplayValue(DateTimeInterface $lastModifiedDisplayValue)
    {
        $this->lastModifiedDisplayValue = $lastModifiedDisplayValue;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLastModified(): DateTimeInterface
    {
        return $this->lastModified;
    }

    /**
     * @param  \DateTimeInterface  $lastModified
     */
    public function setLastModified(DateTimeInterface $lastModified)
    {
        $this->lastModified = $lastModified;
    }

    /**
     * @return string
     */
    public function getFileGUID(): string
    {
        return $this->fileGUID;
    }

    /**
     * @param  string  $fileGUID
     */
    public function setFileGUID(string $fileGUID)
    {
        $this->fileGUID = $fileGUID;
    }

    /**
     * @return string
     */
    public function getExtension(): string
    {
        return $this->extension;
    }

    /**
     * @param  string  $extension
     */
    public function setExtension(string $extension)
    {
        $this->extension = $extension;
    }

    /**
     * @return string
     */
    public function getEscapedName(): string
    {
        return $this->escapedName;
    }

    /**
     * @param  string  $escapedName
     */
    public function setEscapedName(string $escapedName)
    {
        $this->escapedName = $escapedName;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCreatedUTC(): DateTimeInterface
    {
        return $this->createdUTC;
    }

    /**
     * @param  \DateTimeInterface  $createdUTC
     */
    public function setCreatedUTC(DateTimeInterface $createdUTC)
    {
        $this->createdUTC = $createdUTC;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCreatedDisplayValue(): DateTimeInterface
    {
        return $this->createdDisplayValue;
    }

    /**
     * @param  \DateTimeInterface  $createdDisplayValue
     */
    public function setCreatedDisplayValue(DateTimeInterface $createdDisplayValue)
    {
        $this->createdDisplayValue = $createdDisplayValue;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getChangeTimeUTC(): DateTimeInterface
    {
        return $this->changeTimeUTC;
    }

    /**
     * @param  \DateTimeInterface  $changeTimeUTC
     */
    public function setChangeTimeUTC(DateTimeInterface $changeTimeUTC)
    {
        $this->changeTimeUTC = $changeTimeUTC;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getChangeTime(): DateTimeInterface
    {
        return $this->changeTime;
    }

    /**
     * @param  \DateTimeInterface  $changeTime
     */
    public function setChangeTime(DateTimeInterface $changeTime)
    {
        $this->changeTime = $changeTime;
    }

    /**
     * @return int
     */
    public function getVersion(): int
    {
        return $this->version;
    }

    /**
     * @param  int  $version
     */
    public function setVersion(int $version)
    {
        $this->version = $version;
    }
}
