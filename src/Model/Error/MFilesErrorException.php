<?php

namespace Deadan\MFiles\Model\Error;

/**
 * Class MFilesErrorException
 *
 * @package Deadan\MFiles\Model\Error
 */
class MFilesErrorException
{
    /** @var string */
    private $name;

    /** @var string */
    private $message;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param  string  $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param  string  $message
     */
    public function setMessage($message): void
    {
        $this->message = $message;
    }
}
