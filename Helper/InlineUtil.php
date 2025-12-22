<?php

declare(strict_types=1);

namespace Magento\Csp\Helper;

use Magento\Csp\Api\InlineUtilInterface;
use Magento\Framework\View\Helper\SecureHtmlRender\EventHandlerData;
use Magento\Framework\View\Helper\SecureHtmlRender\SecurityProcessorInterface;
use Magento\Framework\View\Helper\SecureHtmlRender\TagData;

class InlineUtil implements InlineUtilInterface, SecurityProcessorInterface
{
    public function renderTag(string $tagName, array $attributes, ?string $content = null): string
    {
        return '';
    }

    public function renderEventListener(string $eventName, string $javascript): string
    {
        return '';
    }

    public function processTag(TagData $tagData): TagData
    {
        return $tagData;
    }

    public function processEventHandler(EventHandlerData $eventHandlerData): EventHandlerData
    {
        return $eventHandlerData;
    }
}
