# AimaneCouissi_HyvaNegotiableQuoteDraftFilter

[![Latest Stable Version](http://poser.pugx.org/aimanecouissi/module-hyva-negotiable-quote-draft-filter/v)](https://packagist.org/packages/aimanecouissi/module-hyva-negotiable-quote-draft-filter) [![Total Downloads](http://poser.pugx.org/aimanecouissi/module-hyva-negotiable-quote-draft-filter/downloads)](https://packagist.org/packages/aimanecouissi/module-hyva-negotiable-quote-draft-filter) [![Magento Version Require](https://img.shields.io/badge/magento-2.4.x-E68718)](https://packagist.org/packages/aimanecouissi/module-hyva-negotiable-quote-draft-filter) [![License](http://poser.pugx.org/aimanecouissi/module-hyva-negotiable-quote-draft-filter/license)](https://packagist.org/packages/aimanecouissi/module-hyva-negotiable-quote-draft-filter) [![PHP Version Require](http://poser.pugx.org/aimanecouissi/module-hyva-negotiable-quote-draft-filter/require/php)](https://packagist.org/packages/aimanecouissi/module-hyva-negotiable-quote-draft-filter) [![Hyvä Compatibility](https://img.shields.io/badge/hyv%C3%A4-compatible-99004D)](https://packagist.org/packages/aimanecouissi/module-hyva-negotiable-quote-draft-filter)

Filters out negotiable quotes with status `draft_by_admin` from the **My Quotes** list on the Hyvä storefront.

> This module is built specifically for **Hyvä** frontends and assumes you already have a working Hyvä theme.

## Installation
```bash
composer require aimanecouissi/module-hyva-negotiable-quote-draft-filter
bin/magento module:enable AimaneCouissi_HyvaNegotiableQuoteDraftFilter
bin/magento setup:upgrade
bin/magento cache:flush
```

## Usage

Navigate to **My Account → My Quotes** on a Hyvä storefront. Quotes with status `draft_by_admin` are hidden from the list while all other statuses remain visible. A customer with one quote in `draft_by_admin` and one in another status can be used to confirm this — only the latter should appear.

## Uninstall
```bash
bin/magento module:disable AimaneCouissi_HyvaNegotiableQuoteDraftFilter
composer remove aimanecouissi/module-hyva-negotiable-quote-draft-filter
bin/magento setup:upgrade
bin/magento cache:flush
```

## License

[MIT](LICENSE)
