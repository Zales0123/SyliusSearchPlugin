<?php

declare(strict_types=1);

namespace MonsieurBiz\SyliusSearchPlugin\Model\Document\Index;

use MonsieurBiz\SyliusSearchPlugin\Model\Config\GridConfig;
use MonsieurBiz\SyliusSearchPlugin\Model\Document\ResultSet;

interface SearchInterface
{
    /**
     * Search documents for a given locale, search terms, max number items and page.
     */
    public function search(GridConfig $gridConfig): ResultSet;

    /**
     * Instant search documents for a given locale, query and a max number items.
     */
    public function instant(GridConfig $gridConfig): ResultSet;

    /**
     * Taxon search documents for a given locale, taxon code, max number items and page.
     */
    public function taxon(GridConfig $gridConfig): ResultSet;
}
