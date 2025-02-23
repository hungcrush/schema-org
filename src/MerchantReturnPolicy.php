<?php

namespace Spatie\SchemaOrg;

use \Spatie\SchemaOrg\Contracts\MerchantReturnPolicyContract;
use \Spatie\SchemaOrg\Contracts\IntangibleContract;
use \Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * A MerchantReturnPolicy provides information about product return policies
 * associated with an [[Organization]] or [[Product]].
 *
 * @see schema:MerchantReturnPolicy
 * @see https://pending.schema.org
 * @link https://github.com/schemaorg/schemaorg/issues/2288
 *
 */
class MerchantReturnPolicy extends BaseType implements MerchantReturnPolicyContract, IntangibleContract, ThingContract
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
     * Are in-store returns offered?
     *
     * @param bool|bool[] $inStoreReturnsOffered
     *
     * @return static
     *
     * @see schema:inStoreReturnsOffered
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2288
     */
    public function inStoreReturnsOffered($inStoreReturnsOffered)
    {
        return $this->setProperty('inStoreReturnsOffered', $inStoreReturnsOffered);
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
     * The merchantReturnDays property indicates the number of days (from
     * purchase) within which relevant merchant return policy is applicable.
     *
     * @param int|int[] $merchantReturnDays
     *
     * @return static
     *
     * @see schema:merchantReturnDays
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2288
     */
    public function merchantReturnDays($merchantReturnDays)
    {
        return $this->setProperty('merchantReturnDays', $merchantReturnDays);
    }

    /**
     * Indicates a Web page or service by URL, for product return.
     *
     * @param string|string[] $merchantReturnLink
     *
     * @return static
     *
     * @see schema:merchantReturnLink
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2288
     */
    public function merchantReturnLink($merchantReturnLink)
    {
        return $this->setProperty('merchantReturnLink', $merchantReturnLink);
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
     * A refundType, from an enumerated list.
     *
     * @param \Spatie\SchemaOrg\Contracts\RefundTypeEnumerationContract|\Spatie\SchemaOrg\Contracts\RefundTypeEnumerationContract[] $refundType
     *
     * @return static
     *
     * @see schema:refundType
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2288
     */
    public function refundType($refundType)
    {
        return $this->setProperty('refundType', $refundType);
    }

    /**
     * Indicates (via enumerated options) the return fees policy for a
     * MerchantReturnPolicy
     *
     * @param \Spatie\SchemaOrg\Contracts\ReturnFeesEnumerationContract|\Spatie\SchemaOrg\Contracts\ReturnFeesEnumerationContract[] $returnFees
     *
     * @return static
     *
     * @see schema:returnFees
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2288
     */
    public function returnFees($returnFees)
    {
        return $this->setProperty('returnFees', $returnFees);
    }

    /**
     * A returnPolicyCategory expresses at most one of several enumerated kinds
     * of return.
     *
     * @param \Spatie\SchemaOrg\Contracts\MerchantReturnEnumerationContract|\Spatie\SchemaOrg\Contracts\MerchantReturnEnumerationContract[] $returnPolicyCategory
     *
     * @return static
     *
     * @see schema:returnPolicyCategory
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2288
     */
    public function returnPolicyCategory($returnPolicyCategory)
    {
        return $this->setProperty('returnPolicyCategory', $returnPolicyCategory);
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

}
