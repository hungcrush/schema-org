<?php

namespace Spatie\SchemaOrg;

use \Spatie\SchemaOrg\Contracts\DayOfWeekContract;
use \Spatie\SchemaOrg\Contracts\EnumerationContract;
use \Spatie\SchemaOrg\Contracts\IntangibleContract;
use \Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * The day of the week, e.g. used to specify to which day the opening hours of
 * an OpeningHoursSpecification refer.
 * 
 * Originally, URLs from [GoodRelations](http://purl.org/goodrelations/v1) were
 * used (for [[Monday]], [[Tuesday]], [[Wednesday]], [[Thursday]], [[Friday]],
 * [[Saturday]], [[Sunday]] plus a special entry for [[PublicHolidays]]); these
 * have now been integrated directly into schema.org.
 *
 * @see schema:DayOfWeek
 * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsClass
 *
 * @method static supersededBy($supersededBy) The value should be instance of pending types Class|Class[]|Enumeration|Enumeration[]|Property|Property[]
 */
class DayOfWeek extends BaseType implements DayOfWeekContract, EnumerationContract, IntangibleContract, ThingContract
{
    /**
     * The day of the week between Thursday and Saturday.
     *
     * @see schema:Friday
     */
     const Friday = 'schema:Friday';

    /**
     * The day of the week between Sunday and Tuesday.
     *
     * @see schema:Monday
     */
     const Monday = 'schema:Monday';

    /**
     * This stands for any day that is a public holiday; it is a placeholder for
     * all official public holidays in some particular location. While not
     * technically a "day of the week", it can be used with
     * [[OpeningHoursSpecification]]. In the context of an opening hours
     * specification it can be used to indicate opening hours on public
     * holidays, overriding general opening hours for the day of the week on
     * which a public holiday occurs.
     *
     * @see schema:PublicHolidays
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsClass
     */
     const PublicHolidays = 'schema:PublicHolidays';

    /**
     * The day of the week between Friday and Sunday.
     *
     * @see schema:Saturday
     */
     const Saturday = 'schema:Saturday';

    /**
     * The day of the week between Saturday and Monday.
     *
     * @see schema:Sunday
     */
     const Sunday = 'schema:Sunday';

    /**
     * The day of the week between Wednesday and Friday.
     *
     * @see schema:Thursday
     */
     const Thursday = 'schema:Thursday';

    /**
     * The day of the week between Monday and Wednesday.
     *
     * @see schema:Tuesday
     */
     const Tuesday = 'schema:Tuesday';

    /**
     * The day of the week between Tuesday and Thursday.
     *
     * @see schema:Wednesday
     */
     const Wednesday = 'schema:Wednesday';

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
