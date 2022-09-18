<?php

namespace Deadan\MFiles\Service\ViewObjects\Request;

use Deadan\MFiles\Service\MFilesRequestInterface;

/**
 * Class GetObjectsFromViewRequest
 *
 * @package Deadan\MFiles\Service\ViewObjects\Request
 */
class GetObjectsFromViewRequest implements MFilesRequestInterface
{
    /** @var int */
    private $viewId;

    /**
     * GetObjectsFromViewRequest constructor.
     *
     * @param  int  $viewId
     */
    public function __construct(int $viewId)
    {
        $this->viewId = $viewId;
    }

    /**
     * @return int
     */
    public function getViewId(): int
    {
        return $this->viewId;
    }
}
