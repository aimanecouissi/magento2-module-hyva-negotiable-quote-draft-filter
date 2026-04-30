# AimaneCouissi_HyvaNegotiableQuoteDraftFilter

[![Latest Stable Version](http://poser.pugx.org/aimanecouissi/module-hyva-negotiable-quote-draft-filter/v)](https://packagist.org/packages/aimanecouissi/module-hyva-negotiable-quote-draft-filter) [![Total Downloads](http://poser.pugx.org/aimanecouissi/module-hyva-negotiable-quote-draft-filter/downloads)](https://packagist.org/packages/aimanecouissi/module-hyva-negotiable-quote-draft-filter) [![Magento Version](https://img.shields.io/badge/magento-2.4.x-E68718)](https://packagist.org/packages/aimanecouissi/module-hyva-negotiable-quote-draft-filter) [![License](http://poser.pugx.org/aimanecouissi/module-hyva-negotiable-quote-draft-filter/license)](https://packagist.org/packages/aimanecouissi/module-hyva-negotiable-quote-draft-filter) [![PHP Version Require](http://poser.pugx.org/aimanecouissi/module-hyva-negotiable-quote-draft-filter/require/php)](https://packagist.org/packages/aimanecouissi/module-hyva-negotiable-quote-draft-filter) [![Hyvä Compatible](https://img.shields.io/badge/hyv%C3%A4-compatible-99004D)](https://packagist.org/packages/aimanecouissi/module-hyva-negotiable-quote-draft-filter)

Filters `draft_by_admin` negotiable quotes from Hyvä **My Quotes**. The module removes Admin-created draft quote records
from the storefront negotiable quote list shown to customers.

## Installation

```bash
composer require aimanecouissi/module-hyva-negotiable-quote-draft-filter
bin/magento module:enable AimaneCouissi_HyvaNegotiableQuoteDraftFilter
bin/magento setup:upgrade
bin/magento cache:flush
```

## Usage

Open Hyvä **My Quotes** in the customer account area. Quotes with the `draft_by_admin` status are removed from the
displayed collection.

## Uninstall

```bash
bin/magento module:disable AimaneCouissi_HyvaNegotiableQuoteDraftFilter
composer remove aimanecouissi/module-hyva-negotiable-quote-draft-filter
bin/magento setup:upgrade
bin/magento cache:flush
```

## Changelog

See [CHANGELOG](CHANGELOG.md) for all recent changes.

## License

[MIT](LICENSE)
