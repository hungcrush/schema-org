<?php

namespace Spatie\SchemaOrg;

use \Spatie\SchemaOrg\Contracts\PropertyValueSpecificationContract;
use \Spatie\SchemaOrg\Contracts\IntangibleContract;
use \Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * A Property value specification.
 *
 * @see schema:PropertyValueSpecification
 * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_ActionCollabClass
 *
 */
class PropertyValueSpecification extends BaseType implements PropertyValueSpecificationContract, IntangibleContract, ThingContract
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
     * The default value of the input.  For properties that expect a literal,
     * the default is a literal value, for properties that expect an object,
     * it's an ID reference to one of the current values.
     *
     * @param \Spatie\SchemaOrg\Contracts\ThingContract|\Spatie\SchemaOrg\Contracts\ThingContract[]|string|string[] $defaultValue
     *
     * @return static
     *
     * @see schema:defaultValue
     */
    public function defaultValue($defaultValue)
    {
        return $this->setProperty('defaultValue', $defaultValue);
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
     * The upper value of some characteristic or property.
     *
     * @param float|float[]|int|int[] $maxValue
     *
     * @return static
     *
     * @see schema:maxValue
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function maxValue($maxValue)
    {
        return $this->setProperty('maxValue', $maxValue);
    }

    /**
     * The lower value of some characteristic or property.
     *
     * @param float|float[]|int|int[] $minValue
     *
     * @return static
     *
     * @see schema:minValue
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function minValue($minValue)
    {
        return $this->setProperty('minValue', $minValue);
    }

    /**
     * Whether multiple values are allowed for the property.  Default is false.
     *
     * @param bool|bool[] $multipleValues
     *
     * @return static
     *
     * @see schema:multipleValues
     */
    public function multipleValues($multipleValues)
    {
        return $this->setProperty('multipleValues', $multipleValues);
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
     * Whether or not a property is mutable.  Default is false. Specifying this
     * for a property that also has a value makes it act similar to a "hidden"
     * input in an HTML form.
     *
     * @param bool|bool[] $readonlyValue
     *
     * @return static
     *
     * @see schema:readonlyValue
     */
    public function readonlyValue($readonlyValue)
    {
        return $this->setProperty('readonlyValue', $readonlyValue);
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
     * The stepValue attribute indicates the granularity that is expected (and
     * required) of the value in a PropertyValueSpecification.
     *
     * @param float|float[]|int|int[] $stepValue
     *
     * @return static
     *
     * @see schema:stepValue
     */
    public function stepValue($stepValue)
    {
        return $this->setProperty('stepValue', $stepValue);
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
     * Specifies the allowed range for number of characters in a literal value.
     *
     * @param float|float[]|int|int[] $valueMaxLength
     *
     * @return static
     *
     * @see schema:valueMaxLength
     */
    public function valueMaxLength($valueMaxLength)
    {
        return $this->setProperty('valueMaxLength', $valueMaxLength);
    }

    /**
     * Specifies the minimum allowed range for number of characters in a literal
     * value.
     *
     * @param float|float[]|int|int[] $valueMinLength
     *
     * @return static
     *
     * @see schema:valueMinLength
     */
    public function valueMinLength($valueMinLength)
    {
        return $this->setProperty('valueMinLength', $valueMinLength);
    }

    /**
     * Indicates the name of the PropertyValueSpecification to be used in URL
     * templates and form encoding in a manner analogous to HTML's input@name.
     *
     * @param string|string[] $valueName
     *
     * @return static
     *
     * @see schema:valueName
     */
    public function valueName($valueName)
    {
        return $this->setProperty('valueName', $valueName);
    }

    /**
     * Specifies a regular expression for testing literal values according to
     * the HTML spec.
     *
     * @param string|string[] $valuePattern
     *
     * @return static
     *
     * @see schema:valuePattern
     */
    public function valuePattern($valuePattern)
    {
        return $this->setProperty('valuePattern', $valuePattern);
    }

    /**
     * Whether the property must be filled in to complete the action.  Default
     * is false.
     *
     * @param bool|bool[] $valueRequired
     *
     * @return static
     *
     * @see schema:valueRequired
     */
    public function valueRequired($valueRequired)
    {
        return $this->setProperty('valueRequired', $valueRequired);
    }

}
