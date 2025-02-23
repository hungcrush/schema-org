<?php

namespace Spatie\SchemaOrg;

use \Spatie\SchemaOrg\Contracts\PalliativeProcedureContract;
use \Spatie\SchemaOrg\Contracts\MedicalEntityContract;
use \Spatie\SchemaOrg\Contracts\MedicalProcedureContract;
use \Spatie\SchemaOrg\Contracts\MedicalTherapyContract;
use \Spatie\SchemaOrg\Contracts\TherapeuticProcedureContract;
use \Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * A medical procedure intended primarily for palliative purposes, aimed at
 * relieving the symptoms of an underlying health condition.
 *
 * @see schema:PalliativeProcedure
 * @see https://health-lifesci.schema.org
 *
 */
class PalliativeProcedure extends BaseType implements PalliativeProcedureContract, MedicalEntityContract, MedicalProcedureContract, MedicalTherapyContract, TherapeuticProcedureContract, ThingContract
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
     * A possible complication and/or side effect of this therapy. If it is
     * known that an adverse outcome is serious (resulting in death, disability,
     * or permanent damage; requiring hospitalization; or is otherwise
     * life-threatening or requires immediate medical attention), tag it as a
     * seriouseAdverseOutcome instead.
     *
     * @param \Spatie\SchemaOrg\Contracts\MedicalEntityContract|\Spatie\SchemaOrg\Contracts\MedicalEntityContract[] $adverseOutcome
     *
     * @return static
     *
     * @see schema:adverseOutcome
     * @see https://health-lifesci.schema.org
     */
    public function adverseOutcome($adverseOutcome)
    {
        return $this->setProperty('adverseOutcome', $adverseOutcome);
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
     * Location in the body of the anatomical structure.
     *
     * @param string|string[] $bodyLocation
     *
     * @return static
     *
     * @see schema:bodyLocation
     * @see https://health-lifesci.schema.org
     */
    public function bodyLocation($bodyLocation)
    {
        return $this->setProperty('bodyLocation', $bodyLocation);
    }

    /**
     * A medical code for the entity, taken from a controlled vocabulary or
     * ontology such as ICD-9, DiseasesDB, MeSH, SNOMED-CT, RxNorm, etc.
     *
     * @param \Spatie\SchemaOrg\Contracts\MedicalCodeContract|\Spatie\SchemaOrg\Contracts\MedicalCodeContract[] $code
     *
     * @return static
     *
     * @see schema:code
     * @see https://health-lifesci.schema.org
     */
    public function code($code)
    {
        return $this->setProperty('code', $code);
    }

    /**
     * A contraindication for this therapy.
     *
     * @param \Spatie\SchemaOrg\Contracts\MedicalContraindicationContract|\Spatie\SchemaOrg\Contracts\MedicalContraindicationContract[]|string|string[] $contraindication
     *
     * @return static
     *
     * @see schema:contraindication
     * @see https://health-lifesci.schema.org
     */
    public function contraindication($contraindication)
    {
        return $this->setProperty('contraindication', $contraindication);
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
     * A dosing schedule for the drug for a given population, either observed,
     * recommended, or maximum dose based on the type used.
     *
     * @param \Spatie\SchemaOrg\Contracts\DoseScheduleContract|\Spatie\SchemaOrg\Contracts\DoseScheduleContract[] $doseSchedule
     *
     * @return static
     *
     * @see schema:doseSchedule
     * @see https://health-lifesci.schema.org
     */
    public function doseSchedule($doseSchedule)
    {
        return $this->setProperty('doseSchedule', $doseSchedule);
    }

    /**
     * Specifying a drug or medicine used in a medication procedure.
     *
     * @param \Spatie\SchemaOrg\Contracts\DrugContract|\Spatie\SchemaOrg\Contracts\DrugContract[] $drug
     *
     * @return static
     *
     * @see schema:drug
     * @see https://health-lifesci.schema.org
     */
    public function drug($drug)
    {
        return $this->setProperty('drug', $drug);
    }

    /**
     * A therapy that duplicates or overlaps this one.
     *
     * @param \Spatie\SchemaOrg\Contracts\MedicalTherapyContract|\Spatie\SchemaOrg\Contracts\MedicalTherapyContract[] $duplicateTherapy
     *
     * @return static
     *
     * @see schema:duplicateTherapy
     * @see https://health-lifesci.schema.org
     */
    public function duplicateTherapy($duplicateTherapy)
    {
        return $this->setProperty('duplicateTherapy', $duplicateTherapy);
    }

    /**
     * Typical or recommended followup care after the procedure is performed.
     *
     * @param string|string[] $followup
     *
     * @return static
     *
     * @see schema:followup
     * @see https://health-lifesci.schema.org
     */
    public function followup($followup)
    {
        return $this->setProperty('followup', $followup);
    }

    /**
     * A medical guideline related to this entity.
     *
     * @param \Spatie\SchemaOrg\Contracts\MedicalGuidelineContract|\Spatie\SchemaOrg\Contracts\MedicalGuidelineContract[] $guideline
     *
     * @return static
     *
     * @see schema:guideline
     * @see https://health-lifesci.schema.org
     */
    public function guideline($guideline)
    {
        return $this->setProperty('guideline', $guideline);
    }

    /**
     * How the procedure is performed.
     *
     * @param string|string[] $howPerformed
     *
     * @return static
     *
     * @see schema:howPerformed
     * @see https://health-lifesci.schema.org
     */
    public function howPerformed($howPerformed)
    {
        return $this->setProperty('howPerformed', $howPerformed);
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
     * The drug or supplement's legal status, including any controlled substance
     * schedules that apply.
     *
     * @param \Spatie\SchemaOrg\Contracts\DrugLegalStatusContract|\Spatie\SchemaOrg\Contracts\DrugLegalStatusContract[]|\Spatie\SchemaOrg\Contracts\MedicalEnumerationContract|\Spatie\SchemaOrg\Contracts\MedicalEnumerationContract[]|string|string[] $legalStatus
     *
     * @return static
     *
     * @see schema:legalStatus
     * @see https://health-lifesci.schema.org
     */
    public function legalStatus($legalStatus)
    {
        return $this->setProperty('legalStatus', $legalStatus);
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
     * The system of medicine that includes this MedicalEntity, for example
     * 'evidence-based', 'homeopathic', 'chiropractic', etc.
     *
     * @param \Spatie\SchemaOrg\Contracts\MedicineSystemContract|\Spatie\SchemaOrg\Contracts\MedicineSystemContract[] $medicineSystem
     *
     * @return static
     *
     * @see schema:medicineSystem
     * @see https://health-lifesci.schema.org
     */
    public function medicineSystem($medicineSystem)
    {
        return $this->setProperty('medicineSystem', $medicineSystem);
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
     * Typical preparation that a patient must undergo before having the
     * procedure performed.
     *
     * @param \Spatie\SchemaOrg\Contracts\MedicalEntityContract|\Spatie\SchemaOrg\Contracts\MedicalEntityContract[]|string|string[] $preparation
     *
     * @return static
     *
     * @see schema:preparation
     * @see https://health-lifesci.schema.org
     */
    public function preparation($preparation)
    {
        return $this->setProperty('preparation', $preparation);
    }

    /**
     * The type of procedure, for example Surgical, Noninvasive, or
     * Percutaneous.
     *
     * @param \Spatie\SchemaOrg\Contracts\MedicalProcedureTypeContract|\Spatie\SchemaOrg\Contracts\MedicalProcedureTypeContract[] $procedureType
     *
     * @return static
     *
     * @see schema:procedureType
     * @see https://health-lifesci.schema.org
     */
    public function procedureType($procedureType)
    {
        return $this->setProperty('procedureType', $procedureType);
    }

    /**
     * If applicable, the organization that officially recognizes this entity as
     * part of its endorsed system of medicine.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[] $recognizingAuthority
     *
     * @return static
     *
     * @see schema:recognizingAuthority
     * @see https://health-lifesci.schema.org
     */
    public function recognizingAuthority($recognizingAuthority)
    {
        return $this->setProperty('recognizingAuthority', $recognizingAuthority);
    }

    /**
     * If applicable, a medical specialty in which this entity is relevant.
     *
     * @param \Spatie\SchemaOrg\Contracts\MedicalSpecialtyContract|\Spatie\SchemaOrg\Contracts\MedicalSpecialtyContract[] $relevantSpecialty
     *
     * @return static
     *
     * @see schema:relevantSpecialty
     * @see https://health-lifesci.schema.org
     */
    public function relevantSpecialty($relevantSpecialty)
    {
        return $this->setProperty('relevantSpecialty', $relevantSpecialty);
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
     * A possible serious complication and/or serious side effect of this
     * therapy. Serious adverse outcomes include those that are
     * life-threatening; result in death, disability, or permanent damage;
     * require hospitalization or prolong existing hospitalization; cause
     * congenital anomalies or birth defects; or jeopardize the patient and may
     * require medical or surgical intervention to prevent one of the outcomes
     * in this definition.
     *
     * @param \Spatie\SchemaOrg\Contracts\MedicalEntityContract|\Spatie\SchemaOrg\Contracts\MedicalEntityContract[] $seriousAdverseOutcome
     *
     * @return static
     *
     * @see schema:seriousAdverseOutcome
     * @see https://health-lifesci.schema.org
     */
    public function seriousAdverseOutcome($seriousAdverseOutcome)
    {
        return $this->setProperty('seriousAdverseOutcome', $seriousAdverseOutcome);
    }

    /**
     * The status of the study (enumerated).
     *
     * @param \Spatie\SchemaOrg\Contracts\EventStatusTypeContract|\Spatie\SchemaOrg\Contracts\EventStatusTypeContract[]|\Spatie\SchemaOrg\Contracts\MedicalStudyStatusContract|\Spatie\SchemaOrg\Contracts\MedicalStudyStatusContract[]|string|string[] $status
     *
     * @return static
     *
     * @see schema:status
     * @see https://health-lifesci.schema.org
     */
    public function status($status)
    {
        return $this->setProperty('status', $status);
    }

    /**
     * A medical study or trial related to this entity.
     *
     * @param \Spatie\SchemaOrg\Contracts\MedicalStudyContract|\Spatie\SchemaOrg\Contracts\MedicalStudyContract[] $study
     *
     * @return static
     *
     * @see schema:study
     * @see https://health-lifesci.schema.org
     */
    public function study($study)
    {
        return $this->setProperty('study', $study);
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
