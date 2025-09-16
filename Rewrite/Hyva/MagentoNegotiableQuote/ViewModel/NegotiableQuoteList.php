<?php
/**
 * Aimane Couissi - https://aimanecouissi.com
 * Copyright © Aimane Couissi 2025–present. All rights reserved.
 * Licensed under the MIT License. See LICENSE for details.
 */

declare(strict_types=1);

namespace AimaneCouissi\HyvaNegotiableQuoteDraftFilter\Rewrite\Hyva\MagentoNegotiableQuote\ViewModel;

use Hyva\MagentoNegotiableQuote\ViewModel\NegotiableQuoteList as HyvaNegotiableQuoteList;
use Magento\NegotiableQuote\Api\Data\NegotiableQuoteInterface;
use Magento\NegotiableQuote\Model\ResourceModel\Quote\Collection as NegotiableQuoteCollection;

class NegotiableQuoteList extends HyvaNegotiableQuoteList
{
    /**
     * Provides the negotiable quote collection excluding admin drafts.
     *
     * @return NegotiableQuoteCollection
     */
    protected function provideCollection(): NegotiableQuoteCollection
    {
        $collection = parent::provideCollection();
        $collection->addFieldToFilter(
            'extension_attribute_negotiable_quote.' . NegotiableQuoteInterface::QUOTE_STATUS,
            ['neq' => NegotiableQuoteInterface::STATUS_DRAFT_BY_ADMIN]
        );
        return $collection;
    }
}
