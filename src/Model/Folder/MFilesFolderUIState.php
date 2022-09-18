<?php

namespace Deadan\MFiles\Model\Folder;

/**
 * Class MFilesFolderUIState
 *
 * @package Deadan\MFiles\Model\Folder
 */
class MFilesFolderUIState
{
    /** @var bool */
    private $bottomPaneBarMinimized;

    /** @var bool */
    private $hitHighlightingEnabled;

    /** @var bool */
    private $metadataEditorInRightPane;

    /** @var int */
    private $relativeBottomPaneHeight;

    /** @var int */
    private $relativeRightPaneWidth;

    /** @var bool */
    private $rightPaneBarMinimized;

    /** @var bool */
    private $showBottomPaneBar;

    /** @var bool */
    private $showRightPaneBar;

    /** @var MFilesFolderListingUIState */
    private $listingUIState;

    /**
     * @return bool
     */
    public function getHitHighlightingEnabled(): bool
    {
        return $this->hitHighlightingEnabled;
    }

    /**
     * @param  bool  $hitHighlightingEnabled
     */
    public function setHitHighlightingEnabled(bool $hitHighlightingEnabled)
    {
        $this->hitHighlightingEnabled = $hitHighlightingEnabled;
    }

    /**
     * @return MFilesFolderListingUIState
     */
    public function getListingUIState(): MFilesFolderListingUIState
    {
        return $this->listingUIState;
    }

    /**
     * @param  MFilesFolderListingUIState  $listingUIState
     */
    public function setListingUIState(MFilesFolderListingUIState $listingUIState)
    {
        $this->listingUIState = $listingUIState;
    }

    /**
     * @return bool
     */
    public function getShowRightPaneBar(): bool
    {
        return $this->showRightPaneBar;
    }

    /**
     * @param  bool  $showRightPaneBar
     */
    public function setShowRightPaneBar(bool $showRightPaneBar)
    {
        $this->showRightPaneBar = $showRightPaneBar;
    }

    /**
     * @return bool
     */
    public function getShowBottomPaneBar(): bool
    {
        return $this->showBottomPaneBar;
    }

    /**
     * @param  bool  $showBottomPaneBar
     */
    public function setShowBottomPaneBar(bool $showBottomPaneBar)
    {
        $this->showBottomPaneBar = $showBottomPaneBar;
    }

    /**
     * @return bool
     */
    public function getMetadataEditorInRightPane(): bool
    {
        return $this->metadataEditorInRightPane;
    }

    /**
     * @param  bool  $metadataEditorInRightPane
     */
    public function setMetadataEditorInRightPane(bool $metadataEditorInRightPane)
    {
        $this->metadataEditorInRightPane = $metadataEditorInRightPane;
    }

    /**
     * @return bool
     */
    public function getRightPaneBarMinimized(): bool
    {
        return $this->rightPaneBarMinimized;
    }

    /**
     * @param  bool  $rightPaneBarMinimized
     */
    public function setRightPaneBarMinimized(bool $rightPaneBarMinimized)
    {
        $this->rightPaneBarMinimized = $rightPaneBarMinimized;
    }

    /**
     * @return bool
     */
    public function getBottomPaneBarMinimized(): bool
    {
        return $this->bottomPaneBarMinimized;
    }

    /**
     * @param  bool  $bottomPaneBarMinimized
     */
    public function setBottomPaneBarMinimized(bool $bottomPaneBarMinimized)
    {
        $this->bottomPaneBarMinimized = $bottomPaneBarMinimized;
    }

    /**
     * @return int
     */
    public function getRelativeBottomPaneHeight(): int
    {
        return $this->relativeBottomPaneHeight;
    }

    /**
     * @param  int  $relativeBottomPaneHeight
     */
    public function setRelativeBottomPaneHeight(int $relativeBottomPaneHeight)
    {
        $this->relativeBottomPaneHeight = $relativeBottomPaneHeight;
    }

    /**
     * @return int
     */
    public function getRelativeRightPaneWidth(): int
    {
        return $this->relativeRightPaneWidth;
    }

    /**
     * @param  int  $relativeRightPaneWidth
     */
    public function setRelativeRightPaneWidth(int $relativeRightPaneWidth)
    {
        $this->relativeRightPaneWidth = $relativeRightPaneWidth;
    }
}
