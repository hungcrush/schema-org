<?php

namespace Spatie\SchemaOrg;

use \Spatie\SchemaOrg\Contracts\NGOContract;
use \Spatie\SchemaOrg\Contracts\OrganizationContract;
use \Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * Organization: Non-governmental Organization.
 *
 * @see schema:NGO
 *
 */
class NGO extends BaseType implements NGOContract, OrganizationContract, ThingContract
{
    /**
     * For a [[NewsMediaOrganization]] or other news-related [[Organization]], a
     * statement about public engagement activities (for news media, the
     * newsroom’s), including involving the public - digitally or otherwise --
     * in coverage decisions, reporting and activities after publication.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|string|string[] $actionableFeedbackPolicy
     *
     * @return static
     *
     * @see schema:actionableFeedbackPolicy
     * @see https://pending.schema.org
     */
    public function actionableFeedbackPolicy($actionableFeedbackPolicy)
    {
        return $this->setProperty('actionableFeedbackPolicy', $actionableFeedbackPolicy);
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
     * Physical address of the item.
     *
     * @param \Spatie\SchemaOrg\Contracts\PostalAddressContract|\Spatie\SchemaOrg\Contracts\PostalAddressContract[]|string|string[] $address
     *
     * @return static
     *
     * @see schema:address
     */
    public function address($address)
    {
        return $this->setProperty('address', $address);
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
     * Alumni of an organization.
     *
     * @param \Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $alumni
     *
     * @return static
     *
     * @see schema:alumni
     */
    public function alumni($alumni)
    {
        return $this->setProperty('alumni', $alumni);
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
     * An award won by or for this item.
     *
     * @param string|string[] $award
     *
     * @return static
     *
     * @see schema:award
     */
    public function award($award)
    {
        return $this->setProperty('award', $award);
    }

    /**
     * Awards won by or for this item.
     *
     * @param string|string[] $awards
     *
     * @return static
     *
     * @see schema:awards
     */
    public function awards($awards)
    {
        return $this->setProperty('awards', $awards);
    }

    /**
     * The brand(s) associated with a product or service, or the brand(s)
     * maintained by an organization or business person.
     *
     * @param \Spatie\SchemaOrg\Contracts\BrandContract|\Spatie\SchemaOrg\Contracts\BrandContract[]|\Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[] $brand
     *
     * @return static
     *
     * @see schema:brand
     */
    public function brand($brand)
    {
        return $this->setProperty('brand', $brand);
    }

    /**
     * A contact point for a person or organization.
     *
     * @param \Spatie\SchemaOrg\Contracts\ContactPointContract|\Spatie\SchemaOrg\Contracts\ContactPointContract[] $contactPoint
     *
     * @return static
     *
     * @see schema:contactPoint
     */
    public function contactPoint($contactPoint)
    {
        return $this->setProperty('contactPoint', $contactPoint);
    }

    /**
     * A contact point for a person or organization.
     *
     * @param \Spatie\SchemaOrg\Contracts\ContactPointContract|\Spatie\SchemaOrg\Contracts\ContactPointContract[] $contactPoints
     *
     * @return static
     *
     * @see schema:contactPoints
     */
    public function contactPoints($contactPoints)
    {
        return $this->setProperty('contactPoints', $contactPoints);
    }

    /**
     * For an [[Organization]] (e.g. [[NewsMediaOrganization]]), a statement
     * describing (in news media, the newsroom’s) disclosure and correction
     * policy for errors.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|string|string[] $correctionsPolicy
     *
     * @return static
     *
     * @see schema:correctionsPolicy
     * @see https://pending.schema.org
     */
    public function correctionsPolicy($correctionsPolicy)
    {
        return $this->setProperty('correctionsPolicy', $correctionsPolicy);
    }

    /**
     * A relationship between an organization and a department of that
     * organization, also described as an organization (allowing different urls,
     * logos, opening hours). For example: a store with a pharmacy, or a bakery
     * with a cafe.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[] $department
     *
     * @return static
     *
     * @see schema:department
     */
    public function department($department)
    {
        return $this->setProperty('department', $department);
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
     * The date that this organization was dissolved.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $dissolutionDate
     *
     * @return static
     *
     * @see schema:dissolutionDate
     */
    public function dissolutionDate($dissolutionDate)
    {
        return $this->setProperty('dissolutionDate', $dissolutionDate);
    }

    /**
     * Statement on diversity policy by an [[Organization]] e.g. a
     * [[NewsMediaOrganization]]. For a [[NewsMediaOrganization]], a statement
     * describing the newsroom’s diversity policy on both staffing and
     * sources, typically providing staffing data.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|string|string[] $diversityPolicy
     *
     * @return static
     *
     * @see schema:diversityPolicy
     * @see https://pending.schema.org
     */
    public function diversityPolicy($diversityPolicy)
    {
        return $this->setProperty('diversityPolicy', $diversityPolicy);
    }

    /**
     * For an [[Organization]] (often but not necessarily a
     * [[NewsMediaOrganization]]), a report on staffing diversity issues. In a
     * news context this might be for example ASNE or RTDNA (US) reports, or
     * self-reported.
     *
     * @param \Spatie\SchemaOrg\Contracts\ArticleContract|\Spatie\SchemaOrg\Contracts\ArticleContract[]|string|string[] $diversityStaffingReport
     *
     * @return static
     *
     * @see schema:diversityStaffingReport
     * @see https://pending.schema.org
     */
    public function diversityStaffingReport($diversityStaffingReport)
    {
        return $this->setProperty('diversityStaffingReport', $diversityStaffingReport);
    }

    /**
     * The Dun & Bradstreet DUNS number for identifying an organization or
     * business person.
     *
     * @param string|string[] $duns
     *
     * @return static
     *
     * @see schema:duns
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function duns($duns)
    {
        return $this->setProperty('duns', $duns);
    }

    /**
     * Email address.
     *
     * @param string|string[] $email
     *
     * @return static
     *
     * @see schema:email
     */
    public function email($email)
    {
        return $this->setProperty('email', $email);
    }

    /**
     * Someone working for this organization.
     *
     * @param \Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $employee
     *
     * @return static
     *
     * @see schema:employee
     */
    public function employee($employee)
    {
        return $this->setProperty('employee', $employee);
    }

    /**
     * People working for this organization.
     *
     * @param \Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $employees
     *
     * @return static
     *
     * @see schema:employees
     */
    public function employees($employees)
    {
        return $this->setProperty('employees', $employees);
    }

    /**
     * Statement about ethics policy, e.g. of a [[NewsMediaOrganization]]
     * regarding journalistic and publishing practices, or of a [[Restaurant]],
     * a page describing food source policies. In the case of a
     * [[NewsMediaOrganization]], an ethicsPolicy is typically a statement
     * describing the personal, organizational, and corporate standards of
     * behavior expected by the organization.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|string|string[] $ethicsPolicy
     *
     * @return static
     *
     * @see schema:ethicsPolicy
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1525
     */
    public function ethicsPolicy($ethicsPolicy)
    {
        return $this->setProperty('ethicsPolicy', $ethicsPolicy);
    }

    /**
     * Upcoming or past event associated with this place, organization, or
     * action.
     *
     * @param \Spatie\SchemaOrg\Contracts\EventContract|\Spatie\SchemaOrg\Contracts\EventContract[] $event
     *
     * @return static
     *
     * @see schema:event
     */
    public function event($event)
    {
        return $this->setProperty('event', $event);
    }

    /**
     * Upcoming or past events associated with this place or organization.
     *
     * @param \Spatie\SchemaOrg\Contracts\EventContract|\Spatie\SchemaOrg\Contracts\EventContract[] $events
     *
     * @return static
     *
     * @see schema:events
     */
    public function events($events)
    {
        return $this->setProperty('events', $events);
    }

    /**
     * The fax number.
     *
     * @param string|string[] $faxNumber
     *
     * @return static
     *
     * @see schema:faxNumber
     */
    public function faxNumber($faxNumber)
    {
        return $this->setProperty('faxNumber', $faxNumber);
    }

    /**
     * A person who founded this organization.
     *
     * @param \Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $founder
     *
     * @return static
     *
     * @see schema:founder
     */
    public function founder($founder)
    {
        return $this->setProperty('founder', $founder);
    }

    /**
     * A person who founded this organization.
     *
     * @param \Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $founders
     *
     * @return static
     *
     * @see schema:founders
     */
    public function founders($founders)
    {
        return $this->setProperty('founders', $founders);
    }

    /**
     * The date that this organization was founded.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $foundingDate
     *
     * @return static
     *
     * @see schema:foundingDate
     */
    public function foundingDate($foundingDate)
    {
        return $this->setProperty('foundingDate', $foundingDate);
    }

    /**
     * The place where the Organization was founded.
     *
     * @param \Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $foundingLocation
     *
     * @return static
     *
     * @see schema:foundingLocation
     */
    public function foundingLocation($foundingLocation)
    {
        return $this->setProperty('foundingLocation', $foundingLocation);
    }

    /**
     * A person or organization that supports (sponsors) something through some
     * kind of financial contribution.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $funder
     *
     * @return static
     *
     * @see schema:funder
     */
    public function funder($funder)
    {
        return $this->setProperty('funder', $funder);
    }

    /**
     * The [Global Location Number](http://www.gs1.org/gln) (GLN, sometimes also
     * referred to as International Location Number or ILN) of the respective
     * organization, person, or place. The GLN is a 13-digit number used to
     * identify parties and physical locations.
     *
     * @param string|string[] $globalLocationNumber
     *
     * @return static
     *
     * @see schema:globalLocationNumber
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function globalLocationNumber($globalLocationNumber)
    {
        return $this->setProperty('globalLocationNumber', $globalLocationNumber);
    }

    /**
     * A credential awarded to the Person or Organization.
     *
     * @param \Spatie\SchemaOrg\Contracts\EducationalOccupationalCredentialContract|\Spatie\SchemaOrg\Contracts\EducationalOccupationalCredentialContract[] $hasCredential
     *
     * @return static
     *
     * @see schema:hasCredential
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2289
     */
    public function hasCredential($hasCredential)
    {
        return $this->setProperty('hasCredential', $hasCredential);
    }

    /**
     * Indicates a MerchantReturnPolicy that may be applicable.
     *
     * @param \Spatie\SchemaOrg\Contracts\MerchantReturnPolicyContract|\Spatie\SchemaOrg\Contracts\MerchantReturnPolicyContract[] $hasMerchantReturnPolicy
     *
     * @return static
     *
     * @see schema:hasMerchantReturnPolicy
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2288
     */
    public function hasMerchantReturnPolicy($hasMerchantReturnPolicy)
    {
        return $this->setProperty('hasMerchantReturnPolicy', $hasMerchantReturnPolicy);
    }

    /**
     * Indicates an OfferCatalog listing for this Organization, Person, or
     * Service.
     *
     * @param \Spatie\SchemaOrg\Contracts\OfferCatalogContract|\Spatie\SchemaOrg\Contracts\OfferCatalogContract[] $hasOfferCatalog
     *
     * @return static
     *
     * @see schema:hasOfferCatalog
     */
    public function hasOfferCatalog($hasOfferCatalog)
    {
        return $this->setProperty('hasOfferCatalog', $hasOfferCatalog);
    }

    /**
     * Points-of-Sales operated by the organization or person.
     *
     * @param \Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $hasPOS
     *
     * @return static
     *
     * @see schema:hasPOS
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function hasPOS($hasPOS)
    {
        return $this->setProperty('hasPOS', $hasPOS);
    }

    /**
     * Indicates a ProductReturnPolicy that may be applicable.
     *
     * @param \Spatie\SchemaOrg\Contracts\ProductReturnPolicyContract|\Spatie\SchemaOrg\Contracts\ProductReturnPolicyContract[] $hasProductReturnPolicy
     *
     * @return static
     *
     * @see schema:hasProductReturnPolicy
     * @see https://attic.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2288
     */
    public function hasProductReturnPolicy($hasProductReturnPolicy)
    {
        return $this->setProperty('hasProductReturnPolicy', $hasProductReturnPolicy);
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
     * The number of interactions for the CreativeWork using the WebSite or
     * SoftwareApplication. The most specific child type of InteractionCounter
     * should be used.
     *
     * @param \Spatie\SchemaOrg\Contracts\InteractionCounterContract|\Spatie\SchemaOrg\Contracts\InteractionCounterContract[] $interactionStatistic
     *
     * @return static
     *
     * @see schema:interactionStatistic
     * @link https://github.com/schemaorg/schemaorg/issues/2421
     */
    public function interactionStatistic($interactionStatistic)
    {
        return $this->setProperty('interactionStatistic', $interactionStatistic);
    }

    /**
     * The International Standard of Industrial Classification of All Economic
     * Activities (ISIC), Revision 4 code for a particular organization,
     * business person, or place.
     *
     * @param string|string[] $isicV4
     *
     * @return static
     *
     * @see schema:isicV4
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function isicV4($isicV4)
    {
        return $this->setProperty('isicV4', $isicV4);
    }

    /**
     * Of a [[Person]], and less typically of an [[Organization]], to indicate a
     * topic that is known about - suggesting possible expertise but not
     * implying it. We do not distinguish skill levels here, or relate this to
     * educational content, events, objectives or [[JobPosting]] descriptions.
     *
     * @param \Spatie\SchemaOrg\Contracts\ThingContract|\Spatie\SchemaOrg\Contracts\ThingContract[]|string|string[] $knowsAbout
     *
     * @return static
     *
     * @see schema:knowsAbout
     * @see https://pending.schema.org
     */
    public function knowsAbout($knowsAbout)
    {
        return $this->setProperty('knowsAbout', $knowsAbout);
    }

    /**
     * Of a [[Person]], and less typically of an [[Organization]], to indicate a
     * known language. We do not distinguish skill levels or
     * reading/writing/speaking/signing here. Use language codes from the [IETF
     * BCP 47 standard](http://tools.ietf.org/html/bcp47).
     *
     * @param \Spatie\SchemaOrg\Contracts\LanguageContract|\Spatie\SchemaOrg\Contracts\LanguageContract[]|string|string[] $knowsLanguage
     *
     * @return static
     *
     * @see schema:knowsLanguage
     * @see https://pending.schema.org
     */
    public function knowsLanguage($knowsLanguage)
    {
        return $this->setProperty('knowsLanguage', $knowsLanguage);
    }

    /**
     * The official name of the organization, e.g. the registered company name.
     *
     * @param string|string[] $legalName
     *
     * @return static
     *
     * @see schema:legalName
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function legalName($legalName)
    {
        return $this->setProperty('legalName', $legalName);
    }

    /**
     * An organization identifier that uniquely identifies a legal entity as
     * defined in ISO 17442.
     *
     * @param string|string[] $leiCode
     *
     * @return static
     *
     * @see schema:leiCode
     */
    public function leiCode($leiCode)
    {
        return $this->setProperty('leiCode', $leiCode);
    }

    /**
     * The location of, for example, where an event is happening, where an
     * organization is located, or where an action takes place.
     *
     * @param \Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[]|\Spatie\SchemaOrg\Contracts\PostalAddressContract|\Spatie\SchemaOrg\Contracts\PostalAddressContract[]|\Spatie\SchemaOrg\Contracts\VirtualLocationContract|\Spatie\SchemaOrg\Contracts\VirtualLocationContract[]|string|string[] $location
     *
     * @return static
     *
     * @see schema:location
     */
    public function location($location)
    {
        return $this->setProperty('location', $location);
    }

    /**
     * An associated logo.
     *
     * @param \Spatie\SchemaOrg\Contracts\ImageObjectContract|\Spatie\SchemaOrg\Contracts\ImageObjectContract[]|string|string[] $logo
     *
     * @return static
     *
     * @see schema:logo
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function logo($logo)
    {
        return $this->setProperty('logo', $logo);
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
     * A pointer to products or services offered by the organization or person.
     *
     * @param \Spatie\SchemaOrg\Contracts\OfferContract|\Spatie\SchemaOrg\Contracts\OfferContract[] $makesOffer
     *
     * @return static
     *
     * @see schema:makesOffer
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function makesOffer($makesOffer)
    {
        return $this->setProperty('makesOffer', $makesOffer);
    }

    /**
     * A member of an Organization or a ProgramMembership. Organizations can be
     * members of organizations; ProgramMembership is typically for individuals.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $member
     *
     * @return static
     *
     * @see schema:member
     */
    public function member($member)
    {
        return $this->setProperty('member', $member);
    }

    /**
     * An Organization (or ProgramMembership) to which this Person or
     * Organization belongs.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\ProgramMembershipContract|\Spatie\SchemaOrg\Contracts\ProgramMembershipContract[] $memberOf
     *
     * @return static
     *
     * @see schema:memberOf
     */
    public function memberOf($memberOf)
    {
        return $this->setProperty('memberOf', $memberOf);
    }

    /**
     * A member of this organization.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $members
     *
     * @return static
     *
     * @see schema:members
     */
    public function members($members)
    {
        return $this->setProperty('members', $members);
    }

    /**
     * The North American Industry Classification System (NAICS) code for a
     * particular organization or business person.
     *
     * @param string|string[] $naics
     *
     * @return static
     *
     * @see schema:naics
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function naics($naics)
    {
        return $this->setProperty('naics', $naics);
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
     * nonprofit Status indicates the legal status of a non-profit organization
     * in its primary place of business.
     *
     * @param \Spatie\SchemaOrg\Contracts\NonprofitTypeContract|\Spatie\SchemaOrg\Contracts\NonprofitTypeContract[] $nonprofitStatus
     *
     * @return static
     *
     * @see schema:nonprofitStatus
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
    public function nonprofitStatus($nonprofitStatus)
    {
        return $this->setProperty('nonprofitStatus', $nonprofitStatus);
    }

    /**
     * The number of employees in an organization e.g. business.
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $numberOfEmployees
     *
     * @return static
     *
     * @see schema:numberOfEmployees
     */
    public function numberOfEmployees($numberOfEmployees)
    {
        return $this->setProperty('numberOfEmployees', $numberOfEmployees);
    }

    /**
     * For an [[Organization]] (often but not necessarily a
     * [[NewsMediaOrganization]]), a description of organizational ownership
     * structure; funding and grants. In a news/media setting, this is with
     * particular reference to editorial independence.   Note that the
     * [[funder]] is also available and can be used to make basic funder
     * information machine-readable.
     *
     * @param \Spatie\SchemaOrg\Contracts\AboutPageContract|\Spatie\SchemaOrg\Contracts\AboutPageContract[]|\Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|string|string[] $ownershipFundingInfo
     *
     * @return static
     *
     * @see schema:ownershipFundingInfo
     * @see https://pending.schema.org
     */
    public function ownershipFundingInfo($ownershipFundingInfo)
    {
        return $this->setProperty('ownershipFundingInfo', $ownershipFundingInfo);
    }

    /**
     * Products owned by the organization or person.
     *
     * @param \Spatie\SchemaOrg\Contracts\OwnershipInfoContract|\Spatie\SchemaOrg\Contracts\OwnershipInfoContract[]|\Spatie\SchemaOrg\Contracts\ProductContract|\Spatie\SchemaOrg\Contracts\ProductContract[] $owns
     *
     * @return static
     *
     * @see schema:owns
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function owns($owns)
    {
        return $this->setProperty('owns', $owns);
    }

    /**
     * The larger organization that this organization is a [[subOrganization]]
     * of, if any.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[] $parentOrganization
     *
     * @return static
     *
     * @see schema:parentOrganization
     */
    public function parentOrganization($parentOrganization)
    {
        return $this->setProperty('parentOrganization', $parentOrganization);
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
     * The publishingPrinciples property indicates (typically via [[URL]]) a
     * document describing the editorial principles of an [[Organization]] (or
     * individual e.g. a [[Person]] writing a blog) that relate to their
     * activities as a publisher, e.g. ethics or diversity policies. When
     * applied to a [[CreativeWork]] (e.g. [[NewsArticle]]) the principles are
     * those of the party primarily responsible for the creation of the
     * [[CreativeWork]].
     * 
     * While such policies are most typically expressed in natural language,
     * sometimes related information (e.g. indicating a [[funder]]) can be
     * expressed using schema.org terminology.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|string|string[] $publishingPrinciples
     *
     * @return static
     *
     * @see schema:publishingPrinciples
     */
    public function publishingPrinciples($publishingPrinciples)
    {
        return $this->setProperty('publishingPrinciples', $publishingPrinciples);
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
     * A pointer to products or services sought by the organization or person
     * (demand).
     *
     * @param \Spatie\SchemaOrg\Contracts\DemandContract|\Spatie\SchemaOrg\Contracts\DemandContract[] $seeks
     *
     * @return static
     *
     * @see schema:seeks
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function seeks($seeks)
    {
        return $this->setProperty('seeks', $seeks);
    }

    /**
     * The geographic area where the service is provided.
     *
     * @param \Spatie\SchemaOrg\Contracts\AdministrativeAreaContract|\Spatie\SchemaOrg\Contracts\AdministrativeAreaContract[]|\Spatie\SchemaOrg\Contracts\GeoShapeContract|\Spatie\SchemaOrg\Contracts\GeoShapeContract[]|\Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $serviceArea
     *
     * @return static
     *
     * @see schema:serviceArea
     */
    public function serviceArea($serviceArea)
    {
        return $this->setProperty('serviceArea', $serviceArea);
    }

    /**
     * A slogan or motto associated with the item.
     *
     * @param string|string[] $slogan
     *
     * @return static
     *
     * @see schema:slogan
     */
    public function slogan($slogan)
    {
        return $this->setProperty('slogan', $slogan);
    }

    /**
     * A person or organization that supports a thing through a pledge, promise,
     * or financial contribution. e.g. a sponsor of a Medical Study or a
     * corporate sponsor of an event.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $sponsor
     *
     * @return static
     *
     * @see schema:sponsor
     */
    public function sponsor($sponsor)
    {
        return $this->setProperty('sponsor', $sponsor);
    }

    /**
     * A relationship between two organizations where the first includes the
     * second, e.g., as a subsidiary. See also: the more specific 'department'
     * property.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[] $subOrganization
     *
     * @return static
     *
     * @see schema:subOrganization
     */
    public function subOrganization($subOrganization)
    {
        return $this->setProperty('subOrganization', $subOrganization);
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
     * The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US
     * or the CIF/NIF in Spain.
     *
     * @param string|string[] $taxID
     *
     * @return static
     *
     * @see schema:taxID
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function taxID($taxID)
    {
        return $this->setProperty('taxID', $taxID);
    }

    /**
     * The telephone number.
     *
     * @param string|string[] $telephone
     *
     * @return static
     *
     * @see schema:telephone
     */
    public function telephone($telephone)
    {
        return $this->setProperty('telephone', $telephone);
    }

    /**
     * For an [[Organization]] (typically a [[NewsMediaOrganization]]), a
     * statement about policy on use of unnamed sources and the decision process
     * required.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|string|string[] $unnamedSourcesPolicy
     *
     * @return static
     *
     * @see schema:unnamedSourcesPolicy
     * @see https://pending.schema.org
     */
    public function unnamedSourcesPolicy($unnamedSourcesPolicy)
    {
        return $this->setProperty('unnamedSourcesPolicy', $unnamedSourcesPolicy);
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
     * The Value-added Tax ID of the organization or person.
     *
     * @param string|string[] $vatID
     *
     * @return static
     *
     * @see schema:vatID
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function vatID($vatID)
    {
        return $this->setProperty('vatID', $vatID);
    }

}
