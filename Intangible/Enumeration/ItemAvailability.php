<?php namespace Motokraft\BuilderSchemaOrg\Intangible\Enumeration;

/**
 * @package     motokraft/builder-schemaorg
 * @author      Motokraft (Valera Karmanov)
 * 
 * @copyright   2022 Motokraft. MIT License
 * @link        https://motokraft.github.io/builder-schemaorg
 */

final class ItemAvailability
{
    const BACKORDER = 'https://schema.org/BackOrder';
    const DISCONTINUED = 'https://schema.org/Discontinued';
    const INSTOCK = 'https://schema.org/InStock';
    const INSTOREONLY = 'https://schema.org/InStoreOnly';
    const LIMITEDAVAILABILITY = 'https://schema.org/LimitedAvailability';
    const ONLINEONLY = 'https://schema.org/OnlineOnly';
    const OUTOFSTOCK = 'https://schema.org/OutOfStock';
    const PREORDER = 'https://schema.org/PreOrder';
    const PRESALE = 'https://schema.org/PreSale';
    const SOLDOUT = 'https://schema.org/SoldOut';
}