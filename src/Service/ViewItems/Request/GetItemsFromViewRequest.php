<?php

namespace Herufi\MFiles\Service\ViewItems\Request;

use Herufi\MFiles\Service\MFilesRequestInterface;

/**
 * Class GetItemsFromViewRequest
 *
 * @package Herufi\MFiles\Service\ViewItems\Request
 */
class GetItemsFromViewRequest implements MFilesRequestInterface
{
    /** @var int */
    private $viewId;

    /**
     * GetItemsFromViewRequest constructor.
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
