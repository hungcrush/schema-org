<?php

namespace Spatie\SchemaOrg;

use \Spatie\SchemaOrg\Contracts\MedicalSpecialtyContract;
use \Spatie\SchemaOrg\Contracts\EnumerationContract;
use \Spatie\SchemaOrg\Contracts\IntangibleContract;
use \Spatie\SchemaOrg\Contracts\MedicalEnumerationContract;
use \Spatie\SchemaOrg\Contracts\SpecialtyContract;
use \Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * Any specific branch of medical science or practice. Medical specialities
 * include clinical specialties that pertain to particular organ systems and
 * their respective disease states, as well as allied health specialties.
 * Enumerated type.
 *
 * @see schema:MedicalSpecialty
 * @see https://health-lifesci.schema.org
 *
 * @method static supersededBy($supersededBy) The value should be instance of pending types Class|Class[]|Enumeration|Enumeration[]|Property|Property[]
 */
class MedicalSpecialty extends BaseType implements MedicalSpecialtyContract, EnumerationContract, IntangibleContract, MedicalEnumerationContract, SpecialtyContract, ThingContract
{
    /**
     * A specific branch of medical science that pertains to study of
     * anesthetics and their application.
     *
     * @see schema:Anesthesia
     * @see https://health-lifesci.schema.org
     */
     const Anesthesia = 'schema:Anesthesia';

    /**
     * A specific branch of medical science that pertains to diagnosis and
     * treatment of disorders of heart and vasculature.
     *
     * @see schema:Cardiovascular
     * @see https://health-lifesci.schema.org
     */
     const Cardiovascular = 'schema:Cardiovascular';

    /**
     * A field of public health focusing on improving health characteristics of
     * a defined population in relation with their geographical or environment
     * areas.
     *
     * @see schema:CommunityHealth
     * @see https://health-lifesci.schema.org
     */
     const CommunityHealth = 'schema:CommunityHealth';

    /**
     * A branch of medicine that is involved in the dental care.
     *
     * @see schema:Dentistry
     * @see https://health-lifesci.schema.org
     */
     const Dentistry = 'schema:Dentistry';

    /**
     * Something relating to or practicing dermatology.
     *
     * @see schema:Dermatologic
     * @see https://health-lifesci.schema.org
     */
     const Dermatologic = 'schema:Dermatologic';

    /**
     * A specific branch of medical science that pertains to diagnosis and
     * treatment of disorders of skin.
     *
     * @see schema:Dermatology
     * @see https://health-lifesci.schema.org
     */
     const Dermatology = 'schema:Dermatology';

    /**
     * Dietetic and nutrition as a medical specialty.
     *
     * @see schema:DietNutrition
     * @see https://health-lifesci.schema.org
     */
     const DietNutrition = 'schema:DietNutrition';

    /**
     * A specific branch of medical science that deals with the evaluation and
     * initial treatment of medical conditions caused by trauma or sudden
     * illness.
     *
     * @see schema:Emergency
     * @see https://health-lifesci.schema.org
     */
     const Emergency = 'schema:Emergency';

    /**
     * A specific branch of medical science that pertains to diagnosis and
     * treatment of disorders of endocrine glands and their secretions.
     *
     * @see schema:Endocrine
     * @see https://health-lifesci.schema.org
     */
     const Endocrine = 'schema:Endocrine';

    /**
     * A specific branch of medical science that pertains to diagnosis and
     * treatment of disorders of digestive system.
     *
     * @see schema:Gastroenterologic
     * @see https://health-lifesci.schema.org
     */
     const Gastroenterologic = 'schema:Gastroenterologic';

    /**
     * A specific branch of medical science that pertains to hereditary
     * transmission and the variation of inherited characteristics and
     * disorders.
     *
     * @see schema:Genetic
     * @see https://health-lifesci.schema.org
     */
     const Genetic = 'schema:Genetic';

    /**
     * A specific branch of medical science that is concerned with the diagnosis
     * and treatment of diseases, debilities and provision of care to the aged.
     *
     * @see schema:Geriatric
     * @see https://health-lifesci.schema.org
     */
     const Geriatric = 'schema:Geriatric';

    /**
     * A specific branch of medical science that pertains to the health care of
     * women, particularly in the diagnosis and treatment of disorders affecting
     * the female reproductive system.
     *
     * @see schema:Gynecologic
     * @see https://health-lifesci.schema.org
     */
     const Gynecologic = 'schema:Gynecologic';

    /**
     * A specific branch of medical science that pertains to diagnosis and
     * treatment of disorders of blood and blood producing organs.
     *
     * @see schema:Hematologic
     * @see https://health-lifesci.schema.org
     */
     const Hematologic = 'schema:Hematologic';

    /**
     * Something in medical science that pertains to infectious diseases i.e
     * caused by bacterial, viral, fungal or parasitic infections.
     *
     * @see schema:Infectious
     * @see https://health-lifesci.schema.org
     */
     const Infectious = 'schema:Infectious';

    /**
     * A medical science pertaining to chemical, hematological, immunologic,
     * microscopic, or bacteriological diagnostic analyses or research.
     *
     * @see schema:LaboratoryScience
     * @see https://health-lifesci.schema.org
     */
     const LaboratoryScience = 'schema:LaboratoryScience';

    /**
     * A nurse-like health profession that deals with pregnancy, childbirth, and
     * the postpartum period (including care of the newborn), besides sexual and
     * reproductive health of women throughout their lives.
     *
     * @see schema:Midwifery
     * @see https://health-lifesci.schema.org
     */
     const Midwifery = 'schema:Midwifery';

    /**
     * A specific branch of medical science that pertains to diagnosis and
     * treatment of disorders of muscles, ligaments and skeletal system.
     *
     * @see schema:Musculoskeletal
     * @see https://health-lifesci.schema.org
     */
     const Musculoskeletal = 'schema:Musculoskeletal';

    /**
     * A specific branch of medical science that studies the nerves and nervous
     * system and its respective disease states.
     *
     * @see schema:Neurologic
     * @see https://health-lifesci.schema.org
     */
     const Neurologic = 'schema:Neurologic';

    /**
     * A health profession of a person formally educated and trained in the care
     * of the sick or infirm person.
     *
     * @see schema:Nursing
     * @see https://health-lifesci.schema.org
     */
     const Nursing = 'schema:Nursing';

    /**
     * A specific branch of medical science that specializes in the care of
     * women during the prenatal and postnatal care and with the delivery of the
     * child.
     *
     * @see schema:Obstetric
     * @see https://health-lifesci.schema.org
     */
     const Obstetric = 'schema:Obstetric';

    /**
     * A specific branch of medical science that deals with benign and malignant
     * tumors, including the study of their development, diagnosis, treatment
     * and prevention.
     *
     * @see schema:Oncologic
     * @see https://health-lifesci.schema.org
     */
     const Oncologic = 'schema:Oncologic';

    /**
     * The science or practice of testing visual acuity and prescribing
     * corrective lenses.
     *
     * @see schema:Optometric
     * @see https://health-lifesci.schema.org
     */
     const Optometric = 'schema:Optometric';

    /**
     * A specific branch of medical science that is concerned with the ear, nose
     * and throat and their respective disease states.
     *
     * @see schema:Otolaryngologic
     * @see https://health-lifesci.schema.org
     */
     const Otolaryngologic = 'schema:Otolaryngologic';

    /**
     * A specific branch of medical science that is concerned with the study of
     * the cause, origin and nature of a disease state, including its
     * consequences as a result of manifestation of the disease. In clinical
     * care, the term is used to designate a branch of medicine using laboratory
     * tests to diagnose and determine the prognostic significance of illness.
     *
     * @see schema:Pathology
     * @see https://health-lifesci.schema.org
     */
     const Pathology = 'schema:Pathology';

    /**
     * A specific branch of medical science that specializes in the care of
     * infants, children and adolescents.
     *
     * @see schema:Pediatric
     * @see https://health-lifesci.schema.org
     */
     const Pediatric = 'schema:Pediatric';

    /**
     * The practice or art and science of preparing and dispensing drugs and
     * medicines.
     *
     * @see schema:PharmacySpecialty
     * @see https://health-lifesci.schema.org
     */
     const PharmacySpecialty = 'schema:PharmacySpecialty';

    /**
     * The practice of treatment of disease, injury, or deformity by physical
     * methods such as massage, heat treatment, and exercise rather than by
     * drugs or surgery..
     *
     * @see schema:Physiotherapy
     * @see https://health-lifesci.schema.org
     */
     const Physiotherapy = 'schema:Physiotherapy';

    /**
     * A specific branch of medical science that pertains to therapeutic or
     * cosmetic repair or re-formation of missing, injured or malformed tissues
     * or body parts by manual and instrumental means.
     *
     * @see schema:PlasticSurgery
     * @see https://health-lifesci.schema.org
     */
     const PlasticSurgery = 'schema:PlasticSurgery';

    /**
     * Podiatry is the care of the human foot, especially the diagnosis and
     * treatment of foot disorders.
     *
     * @see schema:Podiatric
     * @see https://health-lifesci.schema.org
     */
     const Podiatric = 'schema:Podiatric';

    /**
     * The medical care by a physician, or other health-care professional, who
     * is the patient's first contact with the health-care system and who may
     * recommend a specialist if necessary.
     *
     * @see schema:PrimaryCare
     * @see https://health-lifesci.schema.org
     */
     const PrimaryCare = 'schema:PrimaryCare';

    /**
     * A specific branch of medical science that is concerned with the study,
     * treatment, and prevention of mental illness, using both medical and
     * psychological therapies.
     *
     * @see schema:Psychiatric
     * @see https://health-lifesci.schema.org
     */
     const Psychiatric = 'schema:Psychiatric';

    /**
     * Branch of medicine that pertains to the health services to improve and
     * protect community health, especially epidemiology, sanitation,
     * immunization, and preventive medicine.
     *
     * @see schema:PublicHealth
     * @see https://health-lifesci.schema.org
     */
     const PublicHealth = 'schema:PublicHealth';

    /**
     * A specific branch of medical science that pertains to the study of the
     * respiratory system and its respective disease states.
     *
     * @see schema:Pulmonary
     * @see https://health-lifesci.schema.org
     */
     const Pulmonary = 'schema:Pulmonary';

    /**
     * A specific branch of medical science that pertains to the study of the
     * kidneys and its respective disease states.
     *
     * @see schema:Renal
     * @see https://health-lifesci.schema.org
     */
     const Renal = 'schema:Renal';

    /**
     * The therapy that is concerned with the maintenance or improvement of
     * respiratory function (as in patients with pulmonary disease).
     *
     * @see schema:RespiratoryTherapy
     * @see https://health-lifesci.schema.org
     */
     const RespiratoryTherapy = 'schema:RespiratoryTherapy';

    /**
     * A specific branch of medical science that deals with the study and
     * treatment of rheumatic, autoimmune or joint diseases.
     *
     * @see schema:Rheumatologic
     * @see https://health-lifesci.schema.org
     */
     const Rheumatologic = 'schema:Rheumatologic';

    /**
     * The scientific study and treatment of defects, disorders, and
     * malfunctions of speech and voice, as stuttering, lisping, or lalling, and
     * of language disturbances, as aphasia or delayed language acquisition.
     *
     * @see schema:SpeechPathology
     * @see https://health-lifesci.schema.org
     */
     const SpeechPathology = 'schema:SpeechPathology';

    /**
     * A specific branch of medical science that pertains to treating diseases,
     * injuries and deformities by manual and instrumental means.
     *
     * @see schema:Surgical
     * @see https://health-lifesci.schema.org
     */
     const Surgical = 'schema:Surgical';

    /**
     * A specific branch of medical science that is concerned with poisons,
     * their nature, effects and detection and involved in the treatment of
     * poisoning.
     *
     * @see schema:Toxicologic
     * @see https://health-lifesci.schema.org
     */
     const Toxicologic = 'schema:Toxicologic';

    /**
     * A specific branch of medical science that is concerned with the diagnosis
     * and treatment of diseases pertaining to the urinary tract and the
     * urogenital system.
     *
     * @see schema:Urologic
     * @see https://health-lifesci.schema.org
     */
     const Urologic = 'schema:Urologic';

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
