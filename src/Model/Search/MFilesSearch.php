<?php

namespace Deadan\MFiles\Model\Search;

use DateTimeInterface;

/**
 * Class MFilesSearch
 *
 * @package Deadan\MFiles\Model\Search
 */
class MFilesSearch
{
    /** @var string */
    private $title;

    /** @var int */
    private $displayId;

    /** @var int */
    private $class;

    /** @var \DateTimeInterface */
    private $lastModified;

    /** @var \DateTimeInterface */
    private $lastModifiedUTC;

    /** @var bool */
    private $singleFile;

    /** @var \DateTimeInterface */
    private $created;

    /** @var \DateTimeInterface */
    private $createdUTC;

    /** @var string */
    private $escapedTitleWithId;

    /** @var \DateTimeInterface */
    private $checkedOutAtUTC;

    /** @var \DateTimeInterface */
    private $checkedOutAt;

    /** @var bool */
    private $objectCheckedOut;

    /** @var bool */
    private $objectCheckedOutToThisUser;

    /** @var int */
    private $checkedOutTo;

    /** @var bool */
    private $thisVersionLatestToThisUser;

    /** @var bool */
    private $visibleAfterOperation;

    /** @var string */
    private $pathInIdView;

    /** @var \DateTimeInterface */
    private $lastModifiedDisplayValue;

    /** @var \DateTimeInterface */
    private $checkedOutAtDisplayValue;

    /** @var \DateTimeInterface */
    private $createdDisplayValue;

    /** @var string */
    private $objectVersionFlags;

    /** @var int */
    private $score;

    /** @var \DateTimeInterface */
    private $lastAccessedByMe;

    /** @var \DateTimeInterface */
    private $accessedByMeUTC;

    /** @var \DateTimeInterface */
    private $accessedByMe;

    /** @var string */
    private $objectGUID;

    /** @var MFilesObjectVersion */
    private $objVer;

    /** @var MFilesFile[] */
    private $files = [];

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
    public function getAccessedByMe(): DateTimeInterface
    {
        return $this->accessedByMe;
    }

    /**
     * @param  \DateTimeInterface  $accessedByMe
     */
    public function setAccessedByMe(DateTimeInterface $accessedByMe)
    {
        $this->accessedByMe = $accessedByMe;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getAccessedByMeUTC(): DateTimeInterface
    {
        return $this->accessedByMeUTC;
    }

    /**
     * @param  \DateTimeInterface  $accessedByMeUTC
     */
    public function setAccessedByMeUTC(DateTimeInterface $accessedByMeUTC)
    {
        $this->accessedByMeUTC = $accessedByMeUTC;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCheckedOutAt(): DateTimeInterface
    {
        return $this->checkedOutAt;
    }

    /**
     * @param  \DateTimeInterface  $checkedOutAt
     */
    public function setCheckedOutAt(DateTimeInterface $checkedOutAt)
    {
        $this->checkedOutAt = $checkedOutAt;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCheckedOutAtDisplayValue(): DateTimeInterface
    {
        return $this->checkedOutAtDisplayValue;
    }

    /**
     * @param  \DateTimeInterface  $checkedOutAtDisplayValue
     */
    public function setCheckedOutAtDisplayValue(DateTimeInterface $checkedOutAtDisplayValue)
    {
        $this->checkedOutAtDisplayValue = $checkedOutAtDisplayValue;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCheckedOutAtUTC(): DateTimeInterface
    {
        return $this->checkedOutAtUTC;
    }

    /**
     * @param  \DateTimeInterface  $checkedOutAtUTC
     */
    public function setCheckedOutAtUTC(DateTimeInterface $checkedOutAtUTC)
    {
        $this->checkedOutAtUTC = $checkedOutAtUTC;
    }

    /**
     * @return int
     */
    public function getCheckedOutTo(): int
    {
        return $this->checkedOutTo;
    }

    /**
     * @param  int  $checkedOutTo
     */
    public function setCheckedOutTo(int $checkedOutTo)
    {
        $this->checkedOutTo = $checkedOutTo;
    }

    /**
     * @return int
     */
    public function getClass(): int
    {
        return $this->class;
    }

    /**
     * @param  int  $class
     */
    public function setClass(int $class)
    {
        $this->class = $class;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCreated(): DateTimeInterface
    {
        return $this->created;
    }

    /**
     * @param  \DateTimeInterface  $created
     */
    public function setCreated(DateTimeInterface $created)
    {
        $this->created = $created;
    }

    /**
     * @return int
     */
    public function getDisplayId(): int
    {
        return $this->displayId;
    }

    /**
     * @param  int  $displayId
     */
    public function setDisplayId(int $displayId)
    {
        $this->displayId = $displayId;
    }

    /**
     * @return string
     */
    public function getEscapedTitleWithId(): string
    {
        return $this->escapedTitleWithId;
    }

    /**
     * @param  string  $escapedTitleWithId
     */
    public function setEscapedTitleWithId(string $escapedTitleWithId)
    {
        $this->escapedTitleWithId = $escapedTitleWithId;
    }

    /**
     * @return MFilesFile[]
     */
    public function getFiles(): array
    {
        return $this->files;
    }

    /**
     * @param  MFilesFile[]  $files
     */
    public function setFiles(array $files)
    {
        $this->files = $files;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLastAccessedByMe(): DateTimeInterface
    {
        return $this->lastAccessedByMe;
    }

    /**
     * @param  \DateTimeInterface  $lastAccessedByMe
     */
    public function setLastAccessedByMe(DateTimeInterface $lastAccessedByMe)
    {
        $this->lastAccessedByMe = $lastAccessedByMe;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLastModifiedUTC(): DateTimeInterface
    {
        return $this->lastModifiedUTC;
    }

    /**
     * @param  \DateTimeInterface  $lastModifiedUTC
     */
    public function setLastModifiedUTC(DateTimeInterface $lastModifiedUTC)
    {
        $this->lastModifiedUTC = $lastModifiedUTC;
    }

    /**
     * @return string
     */
    public function getObjectGUID(): string
    {
        return $this->objectGUID;
    }

    /**
     * @param  string  $objectGUID
     */
    public function setObjectGUID(string $objectGUID)
    {
        $this->objectGUID = $objectGUID;
    }

    /**
     * @return string
     */
    public function getObjectVersionFlags(): string
    {
        return $this->objectVersionFlags;
    }

    /**
     * @param  string  $objectVersionFlags
     */
    public function setObjectVersionFlags(string $objectVersionFlags)
    {
        $this->objectVersionFlags = $objectVersionFlags;
    }

    /**
     * @return MFilesObjectVersion
     */
    public function getObjVer(): MFilesObjectVersion
    {
        return $this->objVer;
    }

    /**
     * @param  MFilesObjectVersion  $objVer
     */
    public function setObjVer(MFilesObjectVersion $objVer)
    {
        $this->objVer = $objVer;
    }

    /**
     * @return string
     */
    public function getPathInIdView(): string
    {
        return $this->pathInIdView;
    }

    /**
     * @param  string  $pathInIdView
     */
    public function setPathInIdView(string $pathInIdView)
    {
        $this->pathInIdView = $pathInIdView;
    }

    /**
     * @return int
     */
    public function getScore(): int
    {
        return $this->score;
    }

    /**
     * @param  int  $score
     */
    public function setScore(int $score)
    {
        $this->score = $score;
    }

    /**
     * @return bool
     */
    public function getSingleFile(): bool
    {
        return $this->singleFile;
    }

    /**
     * @param  bool  $singleFile
     */
    public function setSingleFile(bool $singleFile)
    {
        $this->singleFile = $singleFile;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param  string  $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * @return bool
     */
    public function getObjectCheckedOutToThisUser(): bool
    {
        return $this->objectCheckedOutToThisUser;
    }

    /**
     * @param  bool  $objectCheckedOutToThisUser
     */
    public function setObjectCheckedOutToThisUser(bool $objectCheckedOutToThisUser)
    {
        $this->objectCheckedOutToThisUser = $objectCheckedOutToThisUser;
    }

    /**
     * @param  bool  $objectCheckedOut
     */
    public function setObjectCheckedOut(bool $objectCheckedOut)
    {
        $this->objectCheckedOut = $objectCheckedOut;
    }

    /**
     * @param  bool  $thisVersionLatestToThisUser
     */
    public function setThisVersionLatestToThisUser(bool $thisVersionLatestToThisUser)
    {
        $this->thisVersionLatestToThisUser = $thisVersionLatestToThisUser;
    }

    /**
     * @param  bool  $visibleAfterOperation
     */
    public function setVisibleAfterOperation(bool $visibleAfterOperation)
    {
        $this->visibleAfterOperation = $visibleAfterOperation;
    }
}
