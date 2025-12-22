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

1. Add this forked module in `app/code` (`app/code/Magento/Csp`)

2. Remove the original module in `composer.json`:

```json
{
    "replace": {
        "magento/module-csp": "*"
    }
}
```

3. Reinstall all modules:

```bash
rm -rf vendor
composer install
```
