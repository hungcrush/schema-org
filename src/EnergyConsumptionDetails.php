<?php

namespace Spatie\SchemaOrg;

use \Spatie\SchemaOrg\Contracts\EnergyConsumptionDetailsContract;
use \Spatie\SchemaOrg\Contracts\IntangibleContract;
use \Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * EnergyConsumptionDetails represents information related to the energy
 * efficiency of a product that consumes energy. The information that can be
 * provided is based on international regulations such as for example [EU
 * directive 2017/1369](https://eur-lex.europa.eu/eli/reg/2017/1369/oj) for
 * energy labeling and the [Energy labeling
 * rule](https://www.ftc.gov/enforcement/rules/rulemaking-regulatory-reform-proceedings/energy-water-use-labeling-consumer)
 * under the Energy Policy and Conservation Act (EPCA) in the US.
 *
 * @see schema:EnergyConsumptionDetails
 * @see https://pending.schema.org
 * @link https://github.com/schemaorg/schemaorg/issues/2670
 *
 */
class EnergyConsumptionDetails extends BaseType implements EnergyConsumptionDetailsContract, IntangibleContract, ThingContract
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
     * Specifies the most energy efficient class on the regulated EU energy
     * consumption scale for the product category a product belongs to. For
     * example, energy consumption for televisions placed on the market after
     * January 1, 2020 is scaled from D to A+++.
     *
     * @param \Spatie\SchemaOrg\Contracts\EUEnergyEfficiencyEnumerationContract|\Spatie\SchemaOrg\Contracts\EUEnergyEfficiencyEnumerationContract[] $energyEfficiencyScaleMax
     *
     * @return static
     *
     * @see schema:energyEfficiencyScaleMax
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2670
     */
    public function energyEfficiencyScaleMax($energyEfficiencyScaleMax)
    {
        return $this->setProperty('energyEfficiencyScaleMax', $energyEfficiencyScaleMax);
    }

    /**
     * Specifies the least energy efficient class on the regulated EU energy
     * consumption scale for the product category a product belongs to. For
     * example, energy consumption for televisions placed on the market after
     * January 1, 2020 is scaled from D to A+++.
     *
     * @param \Spatie\SchemaOrg\Contracts\EUEnergyEfficiencyEnumerationContract|\Spatie\SchemaOrg\Contracts\EUEnergyEfficiencyEnumerationContract[] $energyEfficiencyScaleMin
     *
     * @return static
     *
     * @see schema:energyEfficiencyScaleMin
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2670
     */
    public function energyEfficiencyScaleMin($energyEfficiencyScaleMin)
    {
        return $this->setProperty('energyEfficiencyScaleMin', $energyEfficiencyScaleMin);
    }

    /**
     * Defines the energy efficiency Category (which could be either a rating
     * out of range of values or a yes/no certification) for a product according
     * to an international energy efficiency standard.
     *
     * @param \Spatie\SchemaOrg\Contracts\EnergyEfficiencyEnumerationContract|\Spatie\SchemaOrg\Contracts\EnergyEfficiencyEnumerationContract[] $hasEnergyEfficiencyCategory
     *
     * @return static
     *
     * @see schema:hasEnergyEfficiencyCategory
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2670
     */
    public function hasEnergyEfficiencyCategory($hasEnergyEfficiencyCategory)
    {
        return $this->setProperty('hasEnergyEfficiencyCategory', $hasEnergyEfficiencyCategory);
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
