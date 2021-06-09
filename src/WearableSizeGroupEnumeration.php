<?php

namespace Spatie\SchemaOrg;

use \Spatie\SchemaOrg\Contracts\WearableSizeGroupEnumerationContract;
use \Spatie\SchemaOrg\Contracts\EnumerationContract;
use \Spatie\SchemaOrg\Contracts\IntangibleContract;
use \Spatie\SchemaOrg\Contracts\SizeGroupEnumerationContract;
use \Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * Enumerates common size groups (also known as "size types") for wearable
 * products.
 *
 * @see schema:WearableSizeGroupEnumeration
 * @see https://pending.schema.org
 * @link https://github.com/schemaorg/schemaorg/issues/2811
 *
 * @method static supersededBy($supersededBy) The value should be instance of pending types Class|Class[]|Enumeration|Enumeration[]|Property|Property[]
 */
class WearableSizeGroupEnumeration extends BaseType implements WearableSizeGroupEnumerationContract, EnumerationContract, IntangibleContract, SizeGroupEnumerationContract, ThingContract
{
    /**
     * Size group "Big" for wearables.
     *
     * @see schema:WearableSizeGroupBig
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
     const WearableSizeGroupBig = 'schema:WearableSizeGroupBig';

    /**
     * Size group "Boys" for wearables.
     *
     * @see schema:WearableSizeGroupBoys
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
     const WearableSizeGroupBoys = 'schema:WearableSizeGroupBoys';

    /**
     * Size group "Extra Short" for wearables.
     *
     * @see schema:WearableSizeGroupExtraShort
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
     const WearableSizeGroupExtraShort = 'schema:WearableSizeGroupExtraShort';

    /**
     * Size group "Extra Tall" for wearables.
     *
     * @see schema:WearableSizeGroupExtraTall
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
     const WearableSizeGroupExtraTall = 'schema:WearableSizeGroupExtraTall';

    /**
     * Size group "Girls" for wearables.
     *
     * @see schema:WearableSizeGroupGirls
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
     const WearableSizeGroupGirls = 'schema:WearableSizeGroupGirls';

    /**
     * Size group "Husky" (or "Stocky") for wearables.
     *
     * @see schema:WearableSizeGroupHusky
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
     const WearableSizeGroupHusky = 'schema:WearableSizeGroupHusky';

    /**
     * Size group "Infants" for wearables.
     *
     * @see schema:WearableSizeGroupInfants
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
     const WearableSizeGroupInfants = 'schema:WearableSizeGroupInfants';

    /**
     * Size group "Juniors" for wearables.
     *
     * @see schema:WearableSizeGroupJuniors
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
     const WearableSizeGroupJuniors = 'schema:WearableSizeGroupJuniors';

    /**
     * Size group "Maternity" for wearables.
     *
     * @see schema:WearableSizeGroupMaternity
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
     const WearableSizeGroupMaternity = 'schema:WearableSizeGroupMaternity';

    /**
     * Size group "Mens" for wearables.
     *
     * @see schema:WearableSizeGroupMens
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
     const WearableSizeGroupMens = 'schema:WearableSizeGroupMens';

    /**
     * Size group "Misses" (also known as "Missy") for wearables.
     *
     * @see schema:WearableSizeGroupMisses
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
     const WearableSizeGroupMisses = 'schema:WearableSizeGroupMisses';

    /**
     * Size group "Petite" for wearables.
     *
     * @see schema:WearableSizeGroupPetite
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
     const WearableSizeGroupPetite = 'schema:WearableSizeGroupPetite';

    /**
     * Size group "Plus" for wearables.
     *
     * @see schema:WearableSizeGroupPlus
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
     const WearableSizeGroupPlus = 'schema:WearableSizeGroupPlus';

    /**
     * Size group "Regular" for wearables.
     *
     * @see schema:WearableSizeGroupRegular
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
     const WearableSizeGroupRegular = 'schema:WearableSizeGroupRegular';

    /**
     * Size group "Short" for wearables.
     *
     * @see schema:WearableSizeGroupShort
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
     const WearableSizeGroupShort = 'schema:WearableSizeGroupShort';

    /**
     * Size group "Tall" for wearables.
     *
     * @see schema:WearableSizeGroupTall
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
     const WearableSizeGroupTall = 'schema:WearableSizeGroupTall';

    /**
     * Size group "Womens" for wearables.
     *
     * @see schema:WearableSizeGroupWomens
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
     const WearableSizeGroupWomens = 'schema:WearableSizeGroupWomens';

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
