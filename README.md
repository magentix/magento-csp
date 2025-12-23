# Magento_Csp

## Introduction

By default, Magento enforces its CSP module without allowing it to be disabled.

The default CSP module causes issues in many scenarios, and you could use your own CSP implementation.

This lightweight, minimal module acts as a dependency resolver. It maintains compatibility with:

- magento/module-checkout 
- magento/module-paypal 
- magento/module-theme

These modules depend on `magento/module-csp`.

## Compatibility

- [x] 2.4.6-p13 
- [x] 2.4.7-p8
- [x] 2.4.8-p3

## Installation

```
composer require magentix/magento-csp
```

## Alternative

A simple observer!

**app/code/Vendor/Module/etc/frontend/events.xml**

```xml
<?xml version="1.0"?>
<config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:framework:Event/etc/events.xsd">
    <event name="controller_front_send_response_before">
        <observer name="vendor_module_csp_render" instance="Vendor\Module\Observer\Csp" />
    </event>
</config>
```

**app/code/Vendor/Module/Observer/Csp.php**

```php
<?php

declare(strict_types=1);

namespace Vendor\Module\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\App\Response\HttpInterface as HttpResponse;

class Csp implements ObserverInterface
{
    public function execute(Observer $observer): void
    {
        /** @var HttpResponse $response */
        $response = $observer->getEvent()->getData('response');

        $response->setHeader(
            'Content-Security-Policy',
            "default-src 'self' *.cloudflare.com; " .
            "script-src 'self' 'unsafe-eval' 'unsafe-inline' *.cloudflare.com; " .
            "style-src 'self' 'unsafe-inline'; " .
            "img-src 'self' *.openstreetmap.org data:"
        );
    }
}

```
