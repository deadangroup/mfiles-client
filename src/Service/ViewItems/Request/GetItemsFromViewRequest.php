<?php

namespace Deadan\MFiles\Service\ViewItems\Request;

use Deadan\MFiles\Service\MFilesRequestInterface;

/**
 * Class GetItemsFromViewRequest
 *
 * @package Deadan\MFiles\Service\ViewItems\Request
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
