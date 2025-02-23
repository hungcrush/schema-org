<?php

namespace Spatie\SchemaOrg;

use \Spatie\SchemaOrg\Contracts\OfferShippingDetailsContract;
use \Spatie\SchemaOrg\Contracts\IntangibleContract;
use \Spatie\SchemaOrg\Contracts\StructuredValueContract;
use \Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * OfferShippingDetails represents information about shipping destinations.
 * 
 * Multiple of these entities can be used to represent different shipping rates
 * for different destinations:
 * 
 * One entity for Alaska/Hawaii. A different one for continental US.A different
 * one for all France.
 * 
 * Multiple of these entities can be used to represent different shipping costs
 * and delivery times.
 * 
 * Two entities that are identical but differ in rate and time:
 * 
 * e.g. Cheaper and slower: $5 in 5-7days
 * or Fast and expensive: $15 in 1-2 days.
 *
 * @see schema:OfferShippingDetails
 * @see https://pending.schema.org
 * @link https://github.com/schemaorg/schemaorg/issues/2506
 *
 */
class OfferShippingDetails extends BaseType implements OfferShippingDetailsContract, IntangibleContract, StructuredValueContract, ThingContract
{
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
     * The total delay between the receipt of the order and the goods reaching
     * the final customer.
     *
     * @param \Spatie\SchemaOrg\Contracts\ShippingDeliveryTimeContract|\Spatie\SchemaOrg\Contracts\ShippingDeliveryTimeContract[] $deliveryTime
     *
     * @return static
     *
     * @see schema:deliveryTime
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2506
     */
    public function deliveryTime($deliveryTime)
    {
        return $this->setProperty('deliveryTime', $deliveryTime);
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
     * Indicates when shipping to a particular [[shippingDestination]] is not
     * available.
     *
     * @param bool|bool[] $doesNotShip
     *
     * @return static
     *
     * @see schema:doesNotShip
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2506
     */
    public function doesNotShip($doesNotShip)
    {
        return $this->setProperty('doesNotShip', $doesNotShip);
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
     * indicates (possibly multiple) shipping destinations. These can be defined
     * in several ways e.g. postalCode ranges.
     *
     * @param \Spatie\SchemaOrg\Contracts\DefinedRegionContract|\Spatie\SchemaOrg\Contracts\DefinedRegionContract[] $shippingDestination
     *
     * @return static
     *
     * @see schema:shippingDestination
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2506
     */
    public function shippingDestination($shippingDestination)
    {
        return $this->setProperty('shippingDestination', $shippingDestination);
    }

    /**
     * Label to match an [[OfferShippingDetails]] with a
     * [[ShippingRateSettings]] (within the context of a
     * [[shippingSettingsLink]] cross-reference).
     *
     * @param string|string[] $shippingLabel
     *
     * @return static
     *
     * @see schema:shippingLabel
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2506
     */
    public function shippingLabel($shippingLabel)
    {
        return $this->setProperty('shippingLabel', $shippingLabel);
    }

    /**
     * The shipping rate is the cost of shipping to the specified destination.
     * Typically, the maxValue and currency values (of the [[MonetaryAmount]])
     * are most appropriate.
     *
     * @param \Spatie\SchemaOrg\Contracts\MonetaryAmountContract|\Spatie\SchemaOrg\Contracts\MonetaryAmountContract[] $shippingRate
     *
     * @return static
     *
     * @see schema:shippingRate
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2506
     */
    public function shippingRate($shippingRate)
    {
        return $this->setProperty('shippingRate', $shippingRate);
    }

    /**
     * Link to a page containing [[ShippingRateSettings]] and
     * [[DeliveryTimeSettings]] details.
     *
     * @param string|string[] $shippingSettingsLink
     *
     * @return static
     *
     * @see schema:shippingSettingsLink
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2506
     */
    public function shippingSettingsLink($shippingSettingsLink)
    {
        return $this->setProperty('shippingSettingsLink', $shippingSettingsLink);
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
     * Label to match an [[OfferShippingDetails]] with a
     * [[DeliveryTimeSettings]] (within the context of a
     * [[shippingSettingsLink]] cross-reference).
     *
     * @param string|string[] $transitTimeLabel
     *
     * @return static
     *
     * @see schema:transitTimeLabel
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2506
     */
    public function transitTimeLabel($transitTimeLabel)
    {
        return $this->setProperty('transitTimeLabel', $transitTimeLabel);
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

}
