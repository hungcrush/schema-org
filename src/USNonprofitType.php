<?php

namespace Spatie\SchemaOrg;

use \Spatie\SchemaOrg\Contracts\USNonprofitTypeContract;
use \Spatie\SchemaOrg\Contracts\EnumerationContract;
use \Spatie\SchemaOrg\Contracts\IntangibleContract;
use \Spatie\SchemaOrg\Contracts\NonprofitTypeContract;
use \Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * USNonprofitType: Non-profit organization type originating from the United
 * States.
 *
 * @see schema:USNonprofitType
 * @see https://pending.schema.org
 * @link https://github.com/schemaorg/schemaorg/issues/2543
 *
 * @method static supersededBy($supersededBy) The value should be instance of pending types Class|Class[]|Enumeration|Enumeration[]|Property|Property[]
 */
class USNonprofitType extends BaseType implements USNonprofitTypeContract, EnumerationContract, IntangibleContract, NonprofitTypeContract, ThingContract
{
    /**
     * Nonprofit501a: Non-profit type referring to Farmers’ Cooperative
     * Associations.
     *
     * @see schema:Nonprofit501a
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
     const Nonprofit501a = 'schema:Nonprofit501a';

    /**
     * Nonprofit501c1: Non-profit type referring to Corporations Organized Under
     * Act of Congress, including Federal Credit Unions and National Farm Loan
     * Associations.
     *
     * @see schema:Nonprofit501c1
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
     const Nonprofit501c1 = 'schema:Nonprofit501c1';

    /**
     * Nonprofit501c10: Non-profit type referring to Domestic Fraternal
     * Societies and Associations.
     *
     * @see schema:Nonprofit501c10
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
     const Nonprofit501c10 = 'schema:Nonprofit501c10';

    /**
     * Nonprofit501c11: Non-profit type referring to Teachers' Retirement Fund
     * Associations.
     *
     * @see schema:Nonprofit501c11
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
     const Nonprofit501c11 = 'schema:Nonprofit501c11';

    /**
     * Nonprofit501c12: Non-profit type referring to Benevolent Life Insurance
     * Associations, Mutual Ditch or Irrigation Companies, Mutual or Cooperative
     * Telephone Companies.
     *
     * @see schema:Nonprofit501c12
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
     const Nonprofit501c12 = 'schema:Nonprofit501c12';

    /**
     * Nonprofit501c13: Non-profit type referring to Cemetery Companies.
     *
     * @see schema:Nonprofit501c13
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
     const Nonprofit501c13 = 'schema:Nonprofit501c13';

    /**
     * Nonprofit501c14: Non-profit type referring to State-Chartered Credit
     * Unions, Mutual Reserve Funds.
     *
     * @see schema:Nonprofit501c14
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
     const Nonprofit501c14 = 'schema:Nonprofit501c14';

    /**
     * Nonprofit501c15: Non-profit type referring to Mutual Insurance Companies
     * or Associations.
     *
     * @see schema:Nonprofit501c15
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
     const Nonprofit501c15 = 'schema:Nonprofit501c15';

    /**
     * Nonprofit501c16: Non-profit type referring to Cooperative Organizations
     * to Finance Crop Operations.
     *
     * @see schema:Nonprofit501c16
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
     const Nonprofit501c16 = 'schema:Nonprofit501c16';

    /**
     * Nonprofit501c17: Non-profit type referring to Supplemental Unemployment
     * Benefit Trusts.
     *
     * @see schema:Nonprofit501c17
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
     const Nonprofit501c17 = 'schema:Nonprofit501c17';

    /**
     * Nonprofit501c18: Non-profit type referring to Employee Funded Pension
     * Trust (created before 25 June 1959).
     *
     * @see schema:Nonprofit501c18
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
     const Nonprofit501c18 = 'schema:Nonprofit501c18';

    /**
     * Nonprofit501c19: Non-profit type referring to Post or Organization of
     * Past or Present Members of the Armed Forces.
     *
     * @see schema:Nonprofit501c19
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
     const Nonprofit501c19 = 'schema:Nonprofit501c19';

    /**
     * Nonprofit501c2: Non-profit type referring to Title-holding Corporations
     * for Exempt Organizations.
     *
     * @see schema:Nonprofit501c2
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
     const Nonprofit501c2 = 'schema:Nonprofit501c2';

    /**
     * Nonprofit501c20: Non-profit type referring to Group Legal Services Plan
     * Organizations.
     *
     * @see schema:Nonprofit501c20
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
     const Nonprofit501c20 = 'schema:Nonprofit501c20';

    /**
     * Nonprofit501c21: Non-profit type referring to Black Lung Benefit Trusts.
     *
     * @see schema:Nonprofit501c21
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
     const Nonprofit501c21 = 'schema:Nonprofit501c21';

    /**
     * Nonprofit501c22: Non-profit type referring to Withdrawal Liability
     * Payment Funds.
     *
     * @see schema:Nonprofit501c22
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
     const Nonprofit501c22 = 'schema:Nonprofit501c22';

    /**
     * Nonprofit501c23: Non-profit type referring to Veterans Organizations.
     *
     * @see schema:Nonprofit501c23
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
     const Nonprofit501c23 = 'schema:Nonprofit501c23';

    /**
     * Nonprofit501c24: Non-profit type referring to Section 4049 ERISA Trusts.
     *
     * @see schema:Nonprofit501c24
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
     const Nonprofit501c24 = 'schema:Nonprofit501c24';

    /**
     * Nonprofit501c25: Non-profit type referring to Real Property Title-Holding
     * Corporations or Trusts with Multiple Parents.
     *
     * @see schema:Nonprofit501c25
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
     const Nonprofit501c25 = 'schema:Nonprofit501c25';

    /**
     * Nonprofit501c26: Non-profit type referring to State-Sponsored
     * Organizations Providing Health Coverage for High-Risk Individuals.
     *
     * @see schema:Nonprofit501c26
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
     const Nonprofit501c26 = 'schema:Nonprofit501c26';

    /**
     * Nonprofit501c27: Non-profit type referring to State-Sponsored Workers'
     * Compensation Reinsurance Organizations.
     *
     * @see schema:Nonprofit501c27
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
     const Nonprofit501c27 = 'schema:Nonprofit501c27';

    /**
     * Nonprofit501c28: Non-profit type referring to National Railroad
     * Retirement Investment Trusts.
     *
     * @see schema:Nonprofit501c28
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
     const Nonprofit501c28 = 'schema:Nonprofit501c28';

    /**
     * Nonprofit501c3: Non-profit type referring to Religious, Educational,
     * Charitable, Scientific, Literary, Testing for Public Safety, to Foster
     * National or International Amateur Sports Competition, or Prevention of
     * Cruelty to Children or Animals Organizations.
     *
     * @see schema:Nonprofit501c3
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
     const Nonprofit501c3 = 'schema:Nonprofit501c3';

    /**
     * Nonprofit501c4: Non-profit type referring to Civic Leagues, Social
     * Welfare Organizations, and Local Associations of Employees.
     *
     * @see schema:Nonprofit501c4
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
     const Nonprofit501c4 = 'schema:Nonprofit501c4';

    /**
     * Nonprofit501c5: Non-profit type referring to Labor, Agricultural and
     * Horticultural Organizations.
     *
     * @see schema:Nonprofit501c5
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
     const Nonprofit501c5 = 'schema:Nonprofit501c5';

    /**
     * Nonprofit501c6: Non-profit type referring to Business Leagues, Chambers
     * of Commerce, Real Estate Boards.
     *
     * @see schema:Nonprofit501c6
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
     const Nonprofit501c6 = 'schema:Nonprofit501c6';

    /**
     * Nonprofit501c7: Non-profit type referring to Social and Recreational
     * Clubs.
     *
     * @see schema:Nonprofit501c7
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
     const Nonprofit501c7 = 'schema:Nonprofit501c7';

    /**
     * Nonprofit501c8: Non-profit type referring to Fraternal Beneficiary
     * Societies and Associations.
     *
     * @see schema:Nonprofit501c8
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
     const Nonprofit501c8 = 'schema:Nonprofit501c8';

    /**
     * Nonprofit501c9: Non-profit type referring to Voluntary Employee
     * Beneficiary Associations.
     *
     * @see schema:Nonprofit501c9
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
     const Nonprofit501c9 = 'schema:Nonprofit501c9';

    /**
     * Nonprofit501d: Non-profit type referring to Religious and Apostolic
     * Associations.
     *
     * @see schema:Nonprofit501d
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
     const Nonprofit501d = 'schema:Nonprofit501d';

    /**
     * Nonprofit501e: Non-profit type referring to Cooperative Hospital Service
     * Organizations.
     *
     * @see schema:Nonprofit501e
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
     const Nonprofit501e = 'schema:Nonprofit501e';

    /**
     * Nonprofit501f: Non-profit type referring to Cooperative Service
     * Organizations.
     *
     * @see schema:Nonprofit501f
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
     const Nonprofit501f = 'schema:Nonprofit501f';

    /**
     * Nonprofit501k: Non-profit type referring to Child Care Organizations.
     *
     * @see schema:Nonprofit501k
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
     const Nonprofit501k = 'schema:Nonprofit501k';

    /**
     * Nonprofit501n: Non-profit type referring to Charitable Risk Pools.
     *
     * @see schema:Nonprofit501n
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
     const Nonprofit501n = 'schema:Nonprofit501n';

    /**
     * Nonprofit501q: Non-profit type referring to Credit Counseling
     * Organizations.
     *
     * @see schema:Nonprofit501q
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
     const Nonprofit501q = 'schema:Nonprofit501q';

    /**
     * Nonprofit527: Non-profit type referring to Political organizations.
     *
     * @see schema:Nonprofit527
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
     const Nonprofit527 = 'schema:Nonprofit527';

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
