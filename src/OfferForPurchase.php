<?php

namespace Spatie\SchemaOrg;

use \Spatie\SchemaOrg\Contracts\OfferForPurchaseContract;
use \Spatie\SchemaOrg\Contracts\IntangibleContract;
use \Spatie\SchemaOrg\Contracts\OfferContract;
use \Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * An [[OfferForPurchase]] in Schema.org represents an [[Offer]] to sell
 * something, i.e. an [[Offer]] whose
 *   [[businessFunction]] is [sell](http://purl.org/goodrelations/v1#Sell.). See
 * [Good Relations](https://en.wikipedia.org/wiki/GoodRelations) for
 *   background on the underlying concepts.
 *
 * @see schema:OfferForPurchase
 * @see https://pending.schema.org
 * @link https://github.com/schemaorg/schemaorg/issues/2348
 *
 */
class OfferForPurchase extends BaseType implements OfferForPurchaseContract, IntangibleContract, OfferContract, ThingContract
{
    /**
     * The payment method(s) accepted by seller for this offer.
     *
     * @param \Spatie\SchemaOrg\Contracts\LoanOrCreditContract|\Spatie\SchemaOrg\Contracts\LoanOrCreditContract[]|\Spatie\SchemaOrg\Contracts\PaymentMethodContract|\Spatie\SchemaOrg\Contracts\PaymentMethodContract[] $acceptedPaymentMethod
     *
     * @return static
     *
     * @see schema:acceptedPaymentMethod
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function acceptedPaymentMethod($acceptedPaymentMethod)
    {
        return $this->setProperty('acceptedPaymentMethod', $acceptedPaymentMethod);
    }

    /**
     * An additional offer that can only be obtained in combination with the
     * first base offer (e.g. supplements and extensions that are available for
     * a surcharge).
     *
     * @param \Spatie\SchemaOrg\Contracts\OfferContract|\Spatie\SchemaOrg\Contracts\OfferContract[] $addOn
     *
     * @return static
     *
     * @see schema:addOn
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function addOn($addOn)
    {
        return $this->setProperty('addOn', $addOn);
    }

    /**
     * An additional type for the item, typically used for adding more specific
     * types from external vocabularies in microdata syntax. This is a
     * relationship between something and a class that the thing is in. In RDFa
     * syntax, it is better to use the native RDFa syntax - the 'typeof'
     * attribute - for multiple types. Schema.org tools may have only weaker
     * understanding of extra types, in particular those defined externally.
     *
     * @param string|string[] $additionalType
     *
     * @return static
     *
     * @see schema:additionalType
     */
    public function additionalType($additionalType)
    {
        return $this->setProperty('additionalType', $additionalType);
    }

    /**
     * The amount of time that is required between accepting the offer and the
     * actual usage of the resource or service.
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $advanceBookingRequirement
     *
     * @return static
     *
     * @see schema:advanceBookingRequirement
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function advanceBookingRequirement($advanceBookingRequirement)
    {
        return $this->setProperty('advanceBookingRequirement', $advanceBookingRequirement);
    }

    /**
     * The overall rating, based on a collection of reviews or ratings, of the
     * item.
     *
     * @param \Spatie\SchemaOrg\Contracts\AggregateRatingContract|\Spatie\SchemaOrg\Contracts\AggregateRatingContract[] $aggregateRating
     *
     * @return static
     *
     * @see schema:aggregateRating
     */
    public function aggregateRating($aggregateRating)
    {
        return $this->setProperty('aggregateRating', $aggregateRating);
    }

    /**
     * An alias for the item.
     *
     * @param string|string[] $alternateName
     *
     * @return static
     *
     * @see schema:alternateName
     */
    public function alternateName($alternateName)
    {
        return $this->setProperty('alternateName', $alternateName);
    }

    /**
     * The geographic area where a service or offered item is provided.
     *
     * @param \Spatie\SchemaOrg\Contracts\AdministrativeAreaContract|\Spatie\SchemaOrg\Contracts\AdministrativeAreaContract[]|\Spatie\SchemaOrg\Contracts\GeoShapeContract|\Spatie\SchemaOrg\Contracts\GeoShapeContract[]|\Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[]|string|string[] $areaServed
     *
     * @return static
     *
     * @see schema:areaServed
     */
    public function areaServed($areaServed)
    {
        return $this->setProperty('areaServed', $areaServed);
    }

    /**
     * The availability of this item&#x2014;for example In stock, Out of stock,
     * Pre-order, etc.
     *
     * @param \Spatie\SchemaOrg\Contracts\ItemAvailabilityContract|\Spatie\SchemaOrg\Contracts\ItemAvailabilityContract[] $availability
     *
     * @return static
     *
     * @see schema:availability
     */
    public function availability($availability)
    {
        return $this->setProperty('availability', $availability);
    }

    /**
     * The end of the availability of the product or service included in the
     * offer.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $availabilityEnds
     *
     * @return static
     *
     * @see schema:availabilityEnds
     */
    public function availabilityEnds($availabilityEnds)
    {
        return $this->setProperty('availabilityEnds', $availabilityEnds);
    }

    /**
     * The beginning of the availability of the product or service included in
     * the offer.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $availabilityStarts
     *
     * @return static
     *
     * @see schema:availabilityStarts
     */
    public function availabilityStarts($availabilityStarts)
    {
        return $this->setProperty('availabilityStarts', $availabilityStarts);
    }

    /**
     * The place(s) from which the offer can be obtained (e.g. store locations).
     *
     * @param \Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $availableAtOrFrom
     *
     * @return static
     *
     * @see schema:availableAtOrFrom
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function availableAtOrFrom($availableAtOrFrom)
    {
        return $this->setProperty('availableAtOrFrom', $availableAtOrFrom);
    }

    /**
     * The delivery method(s) available for this offer.
     *
     * @param \Spatie\SchemaOrg\Contracts\DeliveryMethodContract|\Spatie\SchemaOrg\Contracts\DeliveryMethodContract[] $availableDeliveryMethod
     *
     * @return static
     *
     * @see schema:availableDeliveryMethod
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function availableDeliveryMethod($availableDeliveryMethod)
    {
        return $this->setProperty('availableDeliveryMethod', $availableDeliveryMethod);
    }

    /**
     * The business function (e.g. sell, lease, repair, dispose) of the offer or
     * component of a bundle (TypeAndQuantityNode). The default is
     * http://purl.org/goodrelations/v1#Sell.
     *
     * @param \Spatie\SchemaOrg\Contracts\BusinessFunctionContract|\Spatie\SchemaOrg\Contracts\BusinessFunctionContract[] $businessFunction
     *
     * @return static
     *
     * @see schema:businessFunction
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function businessFunction($businessFunction)
    {
        return $this->setProperty('businessFunction', $businessFunction);
    }

    /**
     * A category for the item. Greater signs or slashes can be used to
     * informally indicate a category hierarchy.
     *
     * @param \Spatie\SchemaOrg\Contracts\PhysicalActivityCategoryContract|\Spatie\SchemaOrg\Contracts\PhysicalActivityCategoryContract[]|\Spatie\SchemaOrg\Contracts\ThingContract|\Spatie\SchemaOrg\Contracts\ThingContract[]|string|string[] $category
     *
     * @return static
     *
     * @see schema:category
     */
    public function category($category)
    {
        return $this->setProperty('category', $category);
    }

    /**
     * The typical delay between the receipt of the order and the goods either
     * leaving the warehouse or being prepared for pickup, in case the delivery
     * method is on site pickup.
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $deliveryLeadTime
     *
     * @return static
     *
     * @see schema:deliveryLeadTime
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function deliveryLeadTime($deliveryLeadTime)
    {
        return $this->setProperty('deliveryLeadTime', $deliveryLeadTime);
    }

    /**
     * A description of the item.
     *
     * @param string|string[] $description
     *
     * @return static
     *
     * @see schema:description
     */
    public function description($description)
    {
        return $this->setProperty('description', $description);
    }

    /**
     * A sub property of description. A short description of the item used to
     * disambiguate from other, similar items. Information from other properties
     * (in particular, name) may be necessary for the description to be useful
     * for disambiguation.
     *
     * @param string|string[] $disambiguatingDescription
     *
     * @return static
     *
     * @see schema:disambiguatingDescription
     */
    public function disambiguatingDescription($disambiguatingDescription)
    {
        return $this->setProperty('disambiguatingDescription', $disambiguatingDescription);
    }

    /**
     * The type(s) of customers for which the given offer is valid.
     *
     * @param \Spatie\SchemaOrg\Contracts\BusinessEntityTypeContract|\Spatie\SchemaOrg\Contracts\BusinessEntityTypeContract[] $eligibleCustomerType
     *
     * @return static
     *
     * @see schema:eligibleCustomerType
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function eligibleCustomerType($eligibleCustomerType)
    {
        return $this->setProperty('eligibleCustomerType', $eligibleCustomerType);
    }

    /**
     * The duration for which the given offer is valid.
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $eligibleDuration
     *
     * @return static
     *
     * @see schema:eligibleDuration
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function eligibleDuration($eligibleDuration)
    {
        return $this->setProperty('eligibleDuration', $eligibleDuration);
    }

    /**
     * The interval and unit of measurement of ordering quantities for which the
     * offer or price specification is valid. This allows e.g. specifying that a
     * certain freight charge is valid only for a certain quantity.
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $eligibleQuantity
     *
     * @return static
     *
     * @see schema:eligibleQuantity
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function eligibleQuantity($eligibleQuantity)
    {
        return $this->setProperty('eligibleQuantity', $eligibleQuantity);
    }

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the
     * GeoShape for the geo-political region(s) for which the offer or delivery
     * charge specification is valid.
     * 
     * See also [[ineligibleRegion]].
     *
     * @param \Spatie\SchemaOrg\Contracts\GeoShapeContract|\Spatie\SchemaOrg\Contracts\GeoShapeContract[]|\Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[]|string|string[] $eligibleRegion
     *
     * @return static
     *
     * @see schema:eligibleRegion
     */
    public function eligibleRegion($eligibleRegion)
    {
        return $this->setProperty('eligibleRegion', $eligibleRegion);
    }

    /**
     * The transaction volume, in a monetary unit, for which the offer or price
     * specification is valid, e.g. for indicating a minimal purchasing volume,
     * to express free shipping above a certain order volume, or to limit the
     * acceptance of credit cards to purchases to a certain minimal amount.
     *
     * @param \Spatie\SchemaOrg\Contracts\PriceSpecificationContract|\Spatie\SchemaOrg\Contracts\PriceSpecificationContract[] $eligibleTransactionVolume
     *
     * @return static
     *
     * @see schema:eligibleTransactionVolume
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function eligibleTransactionVolume($eligibleTransactionVolume)
    {
        return $this->setProperty('eligibleTransactionVolume', $eligibleTransactionVolume);
    }

    /**
     * A Global Trade Item Number
     * ([GTIN](https://www.gs1.org/standards/id-keys/gtin)). GTINs identify
     * trade items, including products and services, using numeric
     * identification codes. The [[gtin]] property generalizes the earlier
     * [[gtin8]], [[gtin12]], [[gtin13]], and [[gtin14]] properties. The GS1
     * [digital link
     * specifications](https://www.gs1.org/standards/Digital-Link/) express
     * GTINs as URLs. A correct [[gtin]] value should be a valid GTIN, which
     * means that it should be an all-numeric string of either 8, 12, 13 or 14
     * digits, or a "GS1 Digital Link" URL based on such a string. The numeric
     * component should also have a [valid GS1 check
     * digit](https://www.gs1.org/services/check-digit-calculator) and meet the
     * other rules for valid GTINs. See also [GS1's GTIN
     * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) and
     * [Wikipedia](https://en.wikipedia.org/wiki/Global_Trade_Item_Number) for
     * more details. Left-padding of the gtin values is not required or
     * encouraged.
     *
     * @param string|string[] $gtin
     *
     * @return static
     *
     * @see schema:gtin
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2288
     */
    public function gtin($gtin)
    {
        return $this->setProperty('gtin', $gtin);
    }

    /**
     * The GTIN-12 code of the product, or the product to which the offer
     * refers. The GTIN-12 is the 12-digit GS1 Identification Key composed of a
     * U.P.C. Company Prefix, Item Reference, and Check Digit used to identify
     * trade items. See [GS1 GTIN
     * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more
     * details.
     *
     * @param string|string[] $gtin12
     *
     * @return static
     *
     * @see schema:gtin12
     */
    public function gtin12($gtin12)
    {
        return $this->setProperty('gtin12', $gtin12);
    }

    /**
     * The GTIN-13 code of the product, or the product to which the offer
     * refers. This is equivalent to 13-digit ISBN codes and EAN UCC-13. Former
     * 12-digit UPC codes can be converted into a GTIN-13 code by simply adding
     * a preceding zero. See [GS1 GTIN
     * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more
     * details.
     *
     * @param string|string[] $gtin13
     *
     * @return static
     *
     * @see schema:gtin13
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function gtin13($gtin13)
    {
        return $this->setProperty('gtin13', $gtin13);
    }

    /**
     * The GTIN-14 code of the product, or the product to which the offer
     * refers. See [GS1 GTIN
     * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more
     * details.
     *
     * @param string|string[] $gtin14
     *
     * @return static
     *
     * @see schema:gtin14
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function gtin14($gtin14)
    {
        return $this->setProperty('gtin14', $gtin14);
    }

    /**
     * The GTIN-8 code of the product, or the product to which the offer refers.
     * This code is also known as EAN/UCC-8 or 8-digit EAN. See [GS1 GTIN
     * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more
     * details.
     *
     * @param string|string[] $gtin8
     *
     * @return static
     *
     * @see schema:gtin8
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function gtin8($gtin8)
    {
        return $this->setProperty('gtin8', $gtin8);
    }

    /**
     * A product measurement, for example the inseam of pants, the wheel size of
     * a bicycle, or the gauge of a screw. Usually an exact measurement, but can
     * also be a range of measurements for adjustable products, for example
     * belts and ski bindings.
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $hasMeasurement
     *
     * @return static
     *
     * @see schema:hasMeasurement
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
    public function hasMeasurement($hasMeasurement)
    {
        return $this->setProperty('hasMeasurement', $hasMeasurement);
    }

    /**
     * The identifier property represents any kind of identifier for any kind of
     * [[Thing]], such as ISBNs, GTIN codes, UUIDs etc. Schema.org provides
     * dedicated properties for representing many of these, either as textual
     * strings or as URL (URI) links. See [background
     * notes](/docs/datamodel.html#identifierBg) for more details.
     *
     * @param \Spatie\SchemaOrg\Contracts\PropertyValueContract|\Spatie\SchemaOrg\Contracts\PropertyValueContract[]|string|string[] $identifier
     *
     * @return static
     *
     * @see schema:identifier
     */
    public function identifier($identifier)
    {
        return $this->setProperty('identifier', $identifier);
    }

    /**
     * An image of the item. This can be a [[URL]] or a fully described
     * [[ImageObject]].
     *
     * @param \Spatie\SchemaOrg\Contracts\ImageObjectContract|\Spatie\SchemaOrg\Contracts\ImageObjectContract[]|string|string[] $image
     *
     * @return static
     *
     * @see schema:image
     */
    public function image($image)
    {
        return $this->setProperty('image', $image);
    }

    /**
     * This links to a node or nodes indicating the exact quantity of the
     * products included in  an [[Offer]] or [[ProductCollection]].
     *
     * @param \Spatie\SchemaOrg\Contracts\TypeAndQuantityNodeContract|\Spatie\SchemaOrg\Contracts\TypeAndQuantityNodeContract[] $includesObject
     *
     * @return static
     *
     * @see schema:includesObject
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function includesObject($includesObject)
    {
        return $this->setProperty('includesObject', $includesObject);
    }

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the
     * GeoShape for the geo-political region(s) for which the offer or delivery
     * charge specification is not valid, e.g. a region where the transaction is
     * not allowed.
     * 
     * See also [[eligibleRegion]].
     *
     * @param \Spatie\SchemaOrg\Contracts\GeoShapeContract|\Spatie\SchemaOrg\Contracts\GeoShapeContract[]|\Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[]|string|string[] $ineligibleRegion
     *
     * @return static
     *
     * @see schema:ineligibleRegion
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2242
     */
    public function ineligibleRegion($ineligibleRegion)
    {
        return $this->setProperty('ineligibleRegion', $ineligibleRegion);
    }

    /**
     * The current approximate inventory level for the item or items.
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $inventoryLevel
     *
     * @return static
     *
     * @see schema:inventoryLevel
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function inventoryLevel($inventoryLevel)
    {
        return $this->setProperty('inventoryLevel', $inventoryLevel);
    }

    /**
     * A predefined value from OfferItemCondition or a textual description of
     * the condition of the product or service, or the products or services
     * included in the offer.
     *
     * @param \Spatie\SchemaOrg\Contracts\OfferItemConditionContract|\Spatie\SchemaOrg\Contracts\OfferItemConditionContract[] $itemCondition
     *
     * @return static
     *
     * @see schema:itemCondition
     */
    public function itemCondition($itemCondition)
    {
        return $this->setProperty('itemCondition', $itemCondition);
    }

    /**
     * An item being offered (or demanded). The transactional nature of the
     * offer or demand is documented using [[businessFunction]], e.g. sell,
     * lease etc. While several common expected types are listed explicitly in
     * this definition, others can be used. Using a second type, such as Product
     * or a subtype of Product, can clarify the nature of the offer.
     *
     * @param \Spatie\SchemaOrg\Contracts\AggregateOfferContract|\Spatie\SchemaOrg\Contracts\AggregateOfferContract[]|\Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|\Spatie\SchemaOrg\Contracts\EventContract|\Spatie\SchemaOrg\Contracts\EventContract[]|\Spatie\SchemaOrg\Contracts\MenuItemContract|\Spatie\SchemaOrg\Contracts\MenuItemContract[]|\Spatie\SchemaOrg\Contracts\ProductContract|\Spatie\SchemaOrg\Contracts\ProductContract[]|\Spatie\SchemaOrg\Contracts\ServiceContract|\Spatie\SchemaOrg\Contracts\ServiceContract[]|\Spatie\SchemaOrg\Contracts\TripContract|\Spatie\SchemaOrg\Contracts\TripContract[] $itemOffered
     *
     * @return static
     *
     * @see schema:itemOffered
     */
    public function itemOffered($itemOffered)
    {
        return $this->setProperty('itemOffered', $itemOffered);
    }

    /**
     * Length of the lease for some [[Accommodation]], either particular to some
     * [[Offer]] or in some cases intrinsic to the property.
     *
     * @param \Spatie\SchemaOrg\Contracts\DurationContract|\Spatie\SchemaOrg\Contracts\DurationContract[]|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $leaseLength
     *
     * @return static
     *
     * @see schema:leaseLength
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2373
     */
    public function leaseLength($leaseLength)
    {
        return $this->setProperty('leaseLength', $leaseLength);
    }

    /**
     * Indicates a page (or other CreativeWork) for which this thing is the main
     * entity being described. See [background
     * notes](/docs/datamodel.html#mainEntityBackground) for details.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|string|string[] $mainEntityOfPage
     *
     * @return static
     *
     * @see schema:mainEntityOfPage
     */
    public function mainEntityOfPage($mainEntityOfPage)
    {
        return $this->setProperty('mainEntityOfPage', $mainEntityOfPage);
    }

    /**
     * The Manufacturer Part Number (MPN) of the product, or the product to
     * which the offer refers.
     *
     * @param string|string[] $mpn
     *
     * @return static
     *
     * @see schema:mpn
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function mpn($mpn)
    {
        return $this->setProperty('mpn', $mpn);
    }

    /**
     * The name of the item.
     *
     * @param string|string[] $name
     *
     * @return static
     *
     * @see schema:name
     */
    public function name($name)
    {
        return $this->setProperty('name', $name);
    }

    /**
     * A pointer to the organization or person making the offer.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $offeredBy
     *
     * @return static
     *
     * @see schema:offeredBy
     */
    public function offeredBy($offeredBy)
    {
        return $this->setProperty('offeredBy', $offeredBy);
    }

    /**
     * Indicates a potential Action, which describes an idealized action in
     * which this thing would play an 'object' role.
     *
     * @param \Spatie\SchemaOrg\Contracts\ActionContract|\Spatie\SchemaOrg\Contracts\ActionContract[] $potentialAction
     *
     * @return static
     *
     * @see schema:potentialAction
     */
    public function potentialAction($potentialAction)
    {
        return $this->setProperty('potentialAction', $potentialAction);
    }

    /**
     * The offer price of a product, or of a price component when attached to
     * PriceSpecification and its subtypes.
     * 
     * Usage guidelines:
     * 
     * * Use the [[priceCurrency]] property (with standard formats: [ISO 4217
     * currency format](http://en.wikipedia.org/wiki/ISO_4217) e.g. "USD";
     * [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies)
     * for cryptocurrencies e.g. "BTC"; well known names for [Local Exchange
     * Tradings
     * Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system)
     * (LETS) and other currency types e.g. "Ithaca HOUR") instead of including
     * [ambiguous
     * symbols](http://en.wikipedia.org/wiki/Dollar_sign#Currencies_that_use_the_dollar_or_peso_sign)
     * such as '$' in the value.
     * * Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a
     * decimal point. Avoid using these symbols as a readability separator.
     * * Note that both
     * [RDFa](http://www.w3.org/TR/xhtml-rdfa-primer/#using-the-content-attribute)
     * and Microdata syntax allow the use of a "content=" attribute for
     * publishing simple machine-readable values alongside more human-friendly
     * formatting.
     * * Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT
     * NINE' (U+0039)) rather than superficially similiar Unicode symbols.
     *
     * @param float|float[]|int|int[]|string|string[] $price
     *
     * @return static
     *
     * @see schema:price
     */
    public function price($price)
    {
        return $this->setProperty('price', $price);
    }

    /**
     * The currency of the price, or a price component when attached to
     * [[PriceSpecification]] and its subtypes.
     * 
     * Use standard formats: [ISO 4217 currency
     * format](http://en.wikipedia.org/wiki/ISO_4217) e.g. "USD"; [Ticker
     * symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for
     * cryptocurrencies e.g. "BTC"; well known names for [Local Exchange
     * Tradings
     * Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system)
     * (LETS) and other currency types e.g. "Ithaca HOUR".
     *
     * @param string|string[] $priceCurrency
     *
     * @return static
     *
     * @see schema:priceCurrency
     */
    public function priceCurrency($priceCurrency)
    {
        return $this->setProperty('priceCurrency', $priceCurrency);
    }

    /**
     * One or more detailed price specifications, indicating the unit price and
     * delivery or payment charges.
     *
     * @param \Spatie\SchemaOrg\Contracts\PriceSpecificationContract|\Spatie\SchemaOrg\Contracts\PriceSpecificationContract[] $priceSpecification
     *
     * @return static
     *
     * @see schema:priceSpecification
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function priceSpecification($priceSpecification)
    {
        return $this->setProperty('priceSpecification', $priceSpecification);
    }

    /**
     * The date after which the price is no longer available.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $priceValidUntil
     *
     * @return static
     *
     * @see schema:priceValidUntil
     */
    public function priceValidUntil($priceValidUntil)
    {
        return $this->setProperty('priceValidUntil', $priceValidUntil);
    }

    /**
     * A review of the item.
     *
     * @param \Spatie\SchemaOrg\Contracts\ReviewContract|\Spatie\SchemaOrg\Contracts\ReviewContract[] $review
     *
     * @return static
     *
     * @see schema:review
     */
    public function review($review)
    {
        return $this->setProperty('review', $review);
    }

    /**
     * Review of the item.
     *
     * @param \Spatie\SchemaOrg\Contracts\ReviewContract|\Spatie\SchemaOrg\Contracts\ReviewContract[] $reviews
     *
     * @return static
     *
     * @see schema:reviews
     */
    public function reviews($reviews)
    {
        return $this->setProperty('reviews', $reviews);
    }

    /**
     * URL of a reference Web page that unambiguously indicates the item's
     * identity. E.g. the URL of the item's Wikipedia page, Wikidata entry, or
     * official website.
     *
     * @param string|string[] $sameAs
     *
     * @return static
     *
     * @see schema:sameAs
     */
    public function sameAs($sameAs)
    {
        return $this->setProperty('sameAs', $sameAs);
    }

    /**
     * An entity which offers (sells / leases / lends / loans) the services /
     * goods.  A seller may also be a provider.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $seller
     *
     * @return static
     *
     * @see schema:seller
     */
    public function seller($seller)
    {
        return $this->setProperty('seller', $seller);
    }

    /**
     * The serial number or any alphanumeric identifier of a particular product.
     * When attached to an offer, it is a shortcut for the serial number of the
     * product included in the offer.
     *
     * @param string|string[] $serialNumber
     *
     * @return static
     *
     * @see schema:serialNumber
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function serialNumber($serialNumber)
    {
        return $this->setProperty('serialNumber', $serialNumber);
    }

    /**
     * Indicates information about the shipping policies and options associated
     * with an [[Offer]].
     *
     * @param \Spatie\SchemaOrg\Contracts\OfferShippingDetailsContract|\Spatie\SchemaOrg\Contracts\OfferShippingDetailsContract[] $shippingDetails
     *
     * @return static
     *
     * @see schema:shippingDetails
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2506
     */
    public function shippingDetails($shippingDetails)
    {
        return $this->setProperty('shippingDetails', $shippingDetails);
    }

    /**
     * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a
     * product or service, or the product to which the offer refers.
     *
     * @param string|string[] $sku
     *
     * @return static
     *
     * @see schema:sku
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function sku($sku)
    {
        return $this->setProperty('sku', $sku);
    }

    /**
     * A CreativeWork or Event about this Thing.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|\Spatie\SchemaOrg\Contracts\EventContract|\Spatie\SchemaOrg\Contracts\EventContract[] $subjectOf
     *
     * @return static
     *
     * @see schema:subjectOf
     * @link https://github.com/schemaorg/schemaorg/issues/1670
     */
    public function subjectOf($subjectOf)
    {
        return $this->setProperty('subjectOf', $subjectOf);
    }

    /**
     * URL of the item.
     *
     * @param string|string[] $url
     *
     * @return static
     *
     * @see schema:url
     */
    public function url($url)
    {
        return $this->setProperty('url', $url);
    }

    /**
     * The date when the item becomes valid.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $validFrom
     *
     * @return static
     *
     * @see schema:validFrom
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function validFrom($validFrom)
    {
        return $this->setProperty('validFrom', $validFrom);
    }

    /**
     * The date after when the item is not valid. For example the end of an
     * offer, salary period, or a period of opening hours.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $validThrough
     *
     * @return static
     *
     * @see schema:validThrough
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function validThrough($validThrough)
    {
        return $this->setProperty('validThrough', $validThrough);
    }

    /**
     * The warranty promise(s) included in the offer.
     *
     * @param \Spatie\SchemaOrg\Contracts\WarrantyPromiseContract|\Spatie\SchemaOrg\Contracts\WarrantyPromiseContract[] $warranty
     *
     * @return static
     *
     * @see schema:warranty
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function warranty($warranty)
    {
        return $this->setProperty('warranty', $warranty);
    }

}
