<?php

namespace Spatie\SchemaOrg;

use \Spatie\SchemaOrg\Contracts\MedicalAudienceContract;
use \Spatie\SchemaOrg\Contracts\AudienceContract;
use \Spatie\SchemaOrg\Contracts\IntangibleContract;
use \Spatie\SchemaOrg\Contracts\PeopleAudienceContract;
use \Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * Target audiences for medical web pages.
 *
 * @see schema:MedicalAudience
 * @see https://health-lifesci.schema.org
 *
 */
class MedicalAudience extends BaseType implements MedicalAudienceContract, AudienceContract, IntangibleContract, PeopleAudienceContract, ThingContract
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
     * The target group associated with a given audience (e.g. veterans, car
     * owners, musicians, etc.).
     *
     * @param string|string[] $audienceType
     *
     * @return static
     *
     * @see schema:audienceType
     */
    public function audienceType($audienceType)
    {
        return $this->setProperty('audienceType', $audienceType);
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
     * The geographic area associated with the audience.
     *
     * @param \Spatie\SchemaOrg\Contracts\AdministrativeAreaContract|\Spatie\SchemaOrg\Contracts\AdministrativeAreaContract[] $geographicArea
     *
     * @return static
     *
     * @see schema:geographicArea
     */
    public function geographicArea($geographicArea)
    {
        return $this->setProperty('geographicArea', $geographicArea);
    }

    /**
     * Specifying the health condition(s) of a patient, medical study, or other
     * target audience.
     *
     * @param \Spatie\SchemaOrg\Contracts\MedicalConditionContract|\Spatie\SchemaOrg\Contracts\MedicalConditionContract[] $healthCondition
     *
     * @return static
     *
     * @see schema:healthCondition
     * @see https://health-lifesci.schema.org
     */
    public function healthCondition($healthCondition)
    {
        return $this->setProperty('healthCondition', $healthCondition);
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
     * Audiences defined by a person's gender.
     *
     * @param string|string[] $requiredGender
     *
     * @return static
     *
     * @see schema:requiredGender
     */
    public function requiredGender($requiredGender)
    {
        return $this->setProperty('requiredGender', $requiredGender);
    }

    /**
     * Audiences defined by a person's maximum age.
     *
     * @param int|int[] $requiredMaxAge
     *
     * @return static
     *
     * @see schema:requiredMaxAge
     */
    public function requiredMaxAge($requiredMaxAge)
    {
        return $this->setProperty('requiredMaxAge', $requiredMaxAge);
    }

    /**
     * Audiences defined by a person's minimum age.
     *
     * @param int|int[] $requiredMinAge
     *
     * @return static
     *
     * @see schema:requiredMinAge
     */
    public function requiredMinAge($requiredMinAge)
    {
        return $this->setProperty('requiredMinAge', $requiredMinAge);
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
     * The age or age range for the intended audience or person, for example
     * 3-12 months for infants, 1-5 years for toddlers.
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $suggestedAge
     *
     * @return static
     *
     * @see schema:suggestedAge
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
    public function suggestedAge($suggestedAge)
    {
        return $this->setProperty('suggestedAge', $suggestedAge);
    }

    /**
     * The suggested gender of the intended person or audience, for example
     * "male", "female", or "unisex".
     *
     * @param \Spatie\SchemaOrg\Contracts\GenderTypeContract|\Spatie\SchemaOrg\Contracts\GenderTypeContract[]|string|string[] $suggestedGender
     *
     * @return static
     *
     * @see schema:suggestedGender
     */
    public function suggestedGender($suggestedGender)
    {
        return $this->setProperty('suggestedGender', $suggestedGender);
    }

    /**
     * Maximum recommended age in years for the audience or user.
     *
     * @param float|float[]|int|int[] $suggestedMaxAge
     *
     * @return static
     *
     * @see schema:suggestedMaxAge
     */
    public function suggestedMaxAge($suggestedMaxAge)
    {
        return $this->setProperty('suggestedMaxAge', $suggestedMaxAge);
    }

    /**
     * A suggested range of body measurements for the intended audience or
     * person, for example inseam between 32 and 34 inches or height between 170
     * and 190 cm. Typically found on a size chart for wearable products.
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $suggestedMeasurement
     *
     * @return static
     *
     * @see schema:suggestedMeasurement
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
    public function suggestedMeasurement($suggestedMeasurement)
    {
        return $this->setProperty('suggestedMeasurement', $suggestedMeasurement);
    }

    /**
     * Minimum recommended age in years for the audience or user.
     *
     * @param float|float[]|int|int[] $suggestedMinAge
     *
     * @return static
     *
     * @see schema:suggestedMinAge
     */
    public function suggestedMinAge($suggestedMinAge)
    {
        return $this->setProperty('suggestedMinAge', $suggestedMinAge);
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
