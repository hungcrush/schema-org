<?php

namespace Spatie\SchemaOrg;

use \Spatie\SchemaOrg\Contracts\MedicalTrialDesignContract;
use \Spatie\SchemaOrg\Contracts\EnumerationContract;
use \Spatie\SchemaOrg\Contracts\IntangibleContract;
use \Spatie\SchemaOrg\Contracts\MedicalEnumerationContract;
use \Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * Design models for medical trials. Enumerated type.
 *
 * @see schema:MedicalTrialDesign
 * @see https://health-lifesci.schema.org
 * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_WikiDoc
 *
 * @method static supersededBy($supersededBy) The value should be instance of pending types Class|Class[]|Enumeration|Enumeration[]|Property|Property[]
 */
class MedicalTrialDesign extends BaseType implements MedicalTrialDesignContract, EnumerationContract, IntangibleContract, MedicalEnumerationContract, ThingContract
{
    /**
     * A trial design in which neither the researcher nor the patient knows the
     * details of the treatment the patient was randomly assigned to.
     *
     * @see schema:DoubleBlindedTrial
     * @see https://health-lifesci.schema.org
     */
     const DoubleBlindedTrial = 'schema:DoubleBlindedTrial';

    /**
     * An international trial.
     *
     * @see schema:InternationalTrial
     * @see https://health-lifesci.schema.org
     */
     const InternationalTrial = 'schema:InternationalTrial';

    /**
     * A trial that takes place at multiple centers.
     *
     * @see schema:MultiCenterTrial
     * @see https://health-lifesci.schema.org
     */
     const MultiCenterTrial = 'schema:MultiCenterTrial';

    /**
     * A trial design in which the researcher knows the full details of the
     * treatment, and so does the patient.
     *
     * @see schema:OpenTrial
     * @see https://health-lifesci.schema.org
     */
     const OpenTrial = 'schema:OpenTrial';

    /**
     * A placebo-controlled trial design.
     *
     * @see schema:PlaceboControlledTrial
     * @see https://health-lifesci.schema.org
     */
     const PlaceboControlledTrial = 'schema:PlaceboControlledTrial';

    /**
     * A randomized trial design.
     *
     * @see schema:RandomizedTrial
     * @see https://health-lifesci.schema.org
     */
     const RandomizedTrial = 'schema:RandomizedTrial';

    /**
     * A trial design in which the researcher knows which treatment the patient
     * was randomly assigned to but the patient does not.
     *
     * @see schema:SingleBlindedTrial
     * @see https://health-lifesci.schema.org
     */
     const SingleBlindedTrial = 'schema:SingleBlindedTrial';

    /**
     * A trial that takes place at a single center.
     *
     * @see schema:SingleCenterTrial
     * @see https://health-lifesci.schema.org
     */
     const SingleCenterTrial = 'schema:SingleCenterTrial';

    /**
     * A trial design in which neither the researcher, the person administering
     * the therapy nor the patient knows the details of the treatment the
     * patient was randomly assigned to.
     *
     * @see schema:TripleBlindedTrial
     * @see https://health-lifesci.schema.org
     */
     const TripleBlindedTrial = 'schema:TripleBlindedTrial';

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
