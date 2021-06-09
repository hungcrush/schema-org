<?php

namespace Spatie\SchemaOrg;

use \Spatie\SchemaOrg\Contracts\BodyMeasurementTypeEnumerationContract;
use \Spatie\SchemaOrg\Contracts\EnumerationContract;
use \Spatie\SchemaOrg\Contracts\IntangibleContract;
use \Spatie\SchemaOrg\Contracts\MeasurementTypeEnumerationContract;
use \Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * Enumerates types (or dimensions) of a person's body measurements, for example
 * for fitting of clothes.
 *
 * @see schema:BodyMeasurementTypeEnumeration
 * @see https://pending.schema.org
 * @link https://github.com/schemaorg/schemaorg/issues/2811
 *
 * @method static supersededBy($supersededBy) The value should be instance of pending types Class|Class[]|Enumeration|Enumeration[]|Property|Property[]
 */
class BodyMeasurementTypeEnumeration extends BaseType implements BodyMeasurementTypeEnumerationContract, EnumerationContract, IntangibleContract, MeasurementTypeEnumerationContract, ThingContract
{
    /**
     * Arm length (measured between arms/shoulder line intersection and the
     * prominent wrist bone). Used, for example, to fit shirts.
     *
     * @see schema:BodyMeasurementArm
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
     const BodyMeasurementArm = 'schema:BodyMeasurementArm';

    /**
     * Maximum girth of bust. Used, for example, to fit women's suits.
     *
     * @see schema:BodyMeasurementBust
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
     const BodyMeasurementBust = 'schema:BodyMeasurementBust';

    /**
     * Maximum girth of chest. Used, for example, to fit men's suits.
     *
     * @see schema:BodyMeasurementChest
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
     const BodyMeasurementChest = 'schema:BodyMeasurementChest';

    /**
     * Foot length (measured between end of the most prominent toe and the most
     * prominent part of the heel). Used, for example, to measure socks.
     *
     * @see schema:BodyMeasurementFoot
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
     const BodyMeasurementFoot = 'schema:BodyMeasurementFoot';

    /**
     * Maximum hand girth (measured over the knuckles of the open right hand
     * excluding thumb, fingers together). Used, for example, to fit gloves.
     *
     * @see schema:BodyMeasurementHand
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
     const BodyMeasurementHand = 'schema:BodyMeasurementHand';

    /**
     * Maximum girth of head above the ears. Used, for example, to fit hats.
     *
     * @see schema:BodyMeasurementHead
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
     const BodyMeasurementHead = 'schema:BodyMeasurementHead';

    /**
     * Body height (measured between crown of head and soles of feet). Used, for
     * example, to fit jackets.
     *
     * @see schema:BodyMeasurementHeight
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
     const BodyMeasurementHeight = 'schema:BodyMeasurementHeight';

    /**
     * Girth of hips (measured around the buttocks). Used, for example, to fit
     * skirts.
     *
     * @see schema:BodyMeasurementHips
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
     const BodyMeasurementHips = 'schema:BodyMeasurementHips';

    /**
     * Inside leg (measured between crotch and soles of feet). Used, for
     * example, to fit pants.
     *
     * @see schema:BodyMeasurementInsideLeg
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
     const BodyMeasurementInsideLeg = 'schema:BodyMeasurementInsideLeg';

    /**
     * Girth of neck. Used, for example, to fit shirts.
     *
     * @see schema:BodyMeasurementNeck
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
     const BodyMeasurementNeck = 'schema:BodyMeasurementNeck';

    /**
     * Girth of body just below the bust. Used, for example, to fit women's
     * swimwear.
     *
     * @see schema:BodyMeasurementUnderbust
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
     const BodyMeasurementUnderbust = 'schema:BodyMeasurementUnderbust';

    /**
     * Girth of natural waistline (between hip bones and lower ribs). Used, for
     * example, to fit pants.
     *
     * @see schema:BodyMeasurementWaist
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
     const BodyMeasurementWaist = 'schema:BodyMeasurementWaist';

    /**
     * Body weight. Used, for example, to measure pantyhose.
     *
     * @see schema:BodyMeasurementWeight
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
     const BodyMeasurementWeight = 'schema:BodyMeasurementWeight';

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
