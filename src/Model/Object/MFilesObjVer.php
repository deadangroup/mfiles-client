<?php

namespace Deadan\MFiles\Model\Object;

/**
 * Class MFilesObjVer.
 */
class MFilesObjVer
{
    /** @var int */
    private $id;

    /** @var int */
    private $type;

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
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * @param  int  $type
     */
    public function setType(int $type)
    {
        $this->type = $type;
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
