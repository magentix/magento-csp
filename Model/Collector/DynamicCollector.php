<?php

declare(strict_types=1);

namespace Magento\Csp\Model\Collector;

class DynamicCollector
{
    public function add($policy): void {}

    public function collect(array $defaultPolicies = []): array
    {
        return $defaultPolicies;
    }
}
