# Magento_Csp

## Introduction

By default, Magento enforces its CSP module without allowing it to be disabled.

The default CSP module causes issues in many scenarios, and you could use your own CSP implementation.

This lightweight, minimal module acts as a dependency resolver. It maintains compatibility with:

- magento/module-checkout 
- magento/module-paypal 
- magento/module-theme

These modules depend on `magento/module-csp`.

## Installation

```
composer require magentix/magento-csp
```
