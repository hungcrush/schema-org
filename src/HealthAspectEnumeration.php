<?php

namespace Spatie\SchemaOrg;

use \Spatie\SchemaOrg\Contracts\HealthAspectEnumerationContract;
use \Spatie\SchemaOrg\Contracts\EnumerationContract;
use \Spatie\SchemaOrg\Contracts\IntangibleContract;
use \Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * HealthAspectEnumeration enumerates several aspects of health content online,
 * each of which might be described using [[hasHealthAspect]] and
 * [[HealthTopicContent]].
 *
 * @see schema:HealthAspectEnumeration
 * @see https://pending.schema.org
 * @link https://github.com/schemaorg/schemaorg/issues/2374
 *
 * @method static supersededBy($supersededBy) The value should be instance of pending types Class|Class[]|Enumeration|Enumeration[]|Property|Property[]
 */
class HealthAspectEnumeration extends BaseType implements HealthAspectEnumerationContract, EnumerationContract, IntangibleContract, ThingContract
{
    /**
     * Content about the allergy-related aspects of a health topic.
     *
     * @see schema:AllergiesHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2799
     */
     const AllergiesHealthAspect = 'schema:AllergiesHealthAspect';

    /**
     * Content about the benefits and advantages of usage or utilization of
     * topic.
     *
     * @see schema:BenefitsHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2374
     */
     const BenefitsHealthAspect = 'schema:BenefitsHealthAspect';

    /**
     * Information about the causes and main actions that gave rise to the
     * topic.
     *
     * @see schema:CausesHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2374
     */
     const CausesHealthAspect = 'schema:CausesHealthAspect';

    /**
     * Content about contagion mechanisms and contagiousness information over
     * the topic.
     *
     * @see schema:ContagiousnessHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2374
     */
     const ContagiousnessHealthAspect = 'schema:ContagiousnessHealthAspect';

    /**
     * Content about the effectiveness-related aspects of a health topic.
     *
     * @see schema:EffectivenessHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2799
     */
     const EffectivenessHealthAspect = 'schema:EffectivenessHealthAspect';

    /**
     * Content that discusses practical and policy aspects for getting access to
     * specific kinds of healthcare (e.g. distribution mechanisms for vaccines).
     *
     * @see schema:GettingAccessHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2799
     */
     const GettingAccessHealthAspect = 'schema:GettingAccessHealthAspect';

    /**
     * Content that discusses and explains how a particular health-related topic
     * works, e.g. in terms of mechanisms and underlying science.
     *
     * @see schema:HowItWorksHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2799
     */
     const HowItWorksHealthAspect = 'schema:HowItWorksHealthAspect';

    /**
     * Information about how or where to find a topic. Also may contain location
     * data that can be used for where to look for help if the topic is
     * observed.
     *
     * @see schema:HowOrWhereHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2374
     */
     const HowOrWhereHealthAspect = 'schema:HowOrWhereHealthAspect';

    /**
     * Content discussing ingredients-related aspects of a health topic.
     *
     * @see schema:IngredientsHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2799
     */
     const IngredientsHealthAspect = 'schema:IngredientsHealthAspect';

    /**
     * Information about coping or life related to the topic.
     *
     * @see schema:LivingWithHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2374
     */
     const LivingWithHealthAspect = 'schema:LivingWithHealthAspect';

    /**
     * Related topics may be treated by a Topic.
     *
     * @see schema:MayTreatHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2374
     */
     const MayTreatHealthAspect = 'schema:MayTreatHealthAspect';

    /**
     * Content about common misconceptions and myths that are related to a
     * topic.
     *
     * @see schema:MisconceptionsHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2374
     */
     const MisconceptionsHealthAspect = 'schema:MisconceptionsHealthAspect';

    /**
     * Overview of the content. Contains a summarized view of the topic with the
     * most relevant information for an introduction.
     *
     * @see schema:OverviewHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2374
     */
     const OverviewHealthAspect = 'schema:OverviewHealthAspect';

    /**
     * Content about the real life experience of patients or people that have
     * lived a similar experience about the topic. May be forums, topics,
     * Q-and-A and related material.
     *
     * @see schema:PatientExperienceHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2374
     */
     const PatientExperienceHealthAspect = 'schema:PatientExperienceHealthAspect';

    /**
     * Content discussing pregnancy-related aspects of a health topic.
     *
     * @see schema:PregnancyHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2799
     */
     const PregnancyHealthAspect = 'schema:PregnancyHealthAspect';

    /**
     * Information about actions or measures that can be taken to avoid getting
     * the topic or reaching a critical situation related to the topic.
     *
     * @see schema:PreventionHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2374
     */
     const PreventionHealthAspect = 'schema:PreventionHealthAspect';

    /**
     * Typical progression and happenings of life course of the topic.
     *
     * @see schema:PrognosisHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2374
     */
     const PrognosisHealthAspect = 'schema:PrognosisHealthAspect';

    /**
     * Other prominent or relevant topics tied to the main topic.
     *
     * @see schema:RelatedTopicsHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2374
     */
     const RelatedTopicsHealthAspect = 'schema:RelatedTopicsHealthAspect';

    /**
     * Information about the risk factors and possible complications that may
     * follow a topic.
     *
     * @see schema:RisksOrComplicationsHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2374
     */
     const RisksOrComplicationsHealthAspect = 'schema:RisksOrComplicationsHealthAspect';

    /**
     * Content about the safety-related aspects of a health topic.
     *
     * @see schema:SafetyHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2799
     */
     const SafetyHealthAspect = 'schema:SafetyHealthAspect';

    /**
     * Content about how to screen or further filter a topic.
     *
     * @see schema:ScreeningHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2374
     */
     const ScreeningHealthAspect = 'schema:ScreeningHealthAspect';

    /**
     * Information about questions that may be asked, when to see a
     * professional, measures before seeing a doctor or content about the first
     * consultation.
     *
     * @see schema:SeeDoctorHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2374
     */
     const SeeDoctorHealthAspect = 'schema:SeeDoctorHealthAspect';

    /**
     * Self care actions or measures that can be taken to sooth, health or avoid
     * a topic. This may be carried at home and can be carried/managed by the
     * person itself.
     *
     * @see schema:SelfCareHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2374
     */
     const SelfCareHealthAspect = 'schema:SelfCareHealthAspect';

    /**
     * Side effects that can be observed from the usage of the topic.
     *
     * @see schema:SideEffectsHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2374
     */
     const SideEffectsHealthAspect = 'schema:SideEffectsHealthAspect';

    /**
     * Stages that can be observed from a topic.
     *
     * @see schema:StagesHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2374
     */
     const StagesHealthAspect = 'schema:StagesHealthAspect';

    /**
     * Symptoms or related symptoms of a Topic.
     *
     * @see schema:SymptomsHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2374
     */
     const SymptomsHealthAspect = 'schema:SymptomsHealthAspect';

    /**
     * Treatments or related therapies for a Topic.
     *
     * @see schema:TreatmentsHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2374
     */
     const TreatmentsHealthAspect = 'schema:TreatmentsHealthAspect';

    /**
     * Categorization and other types related to a topic.
     *
     * @see schema:TypesHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2374
     */
     const TypesHealthAspect = 'schema:TypesHealthAspect';

    /**
     * Content about how, when, frequency and dosage of a topic.
     *
     * @see schema:UsageOrScheduleHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2374
     */
     const UsageOrScheduleHealthAspect = 'schema:UsageOrScheduleHealthAspect';

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
