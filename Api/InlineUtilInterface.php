<?php

declare(strict_types=1);

namespace Magento\Csp\Api;

interface InlineUtilInterface
{
    public function renderTag(string $tagName, array $attributes, ?string $content = null): string;

    public function renderEventListener(string $eventName, string $javascript): string;
}
