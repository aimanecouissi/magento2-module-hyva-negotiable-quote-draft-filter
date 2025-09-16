# AimaneCouissi_HyvaNegotiableQuoteDraftFilter

Filters out negotiable quotes with status `draft_by_admin` from the Hyvä **My Quotes** list on the storefront.

## Installation
```bash
composer require aimanecouissi/module-hyva-negotiable-quote-draft-filter
bin/magento module:enable AimaneCouissi_HyvaNegotiableQuoteDraftFilter
bin/magento setup:upgrade
bin/magento cache:flush
```

## Usage
On a Hyvä storefront, go to **My Account → My Quotes**. Any negotiable quote in status `draft_by_admin` will be hidden from this list; other statuses remain visible. To verify, ensure a customer has at least one quote in `draft_by_admin` and one in another status—only the latter appears in the list.

## Uninstall
```bash
bin/magento module:disable AimaneCouissi_HyvaNegotiableQuoteDraftFilter
composer remove aimanecouissi/module-hyva-negotiable-quote-draft-filter
bin/magento setup:upgrade
bin/magento cache:flush
```

## License
[MIT](LICENSE)
