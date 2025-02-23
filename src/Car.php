<?php

namespace Spatie\SchemaOrg;

use \Spatie\SchemaOrg\Contracts\CarContract;
use \Spatie\SchemaOrg\Contracts\ProductContract;
use \Spatie\SchemaOrg\Contracts\ThingContract;
use \Spatie\SchemaOrg\Contracts\VehicleContract;

/**
 * A car is a wheeled, self-powered motor vehicle used for transportation.
 *
 * @see schema:Car
 * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Automotive_Ontology_Working_Group
 *
 */
class Car extends BaseType implements CarContract, ProductContract, ThingContract, VehicleContract
{
    /**
     * The time needed to accelerate the vehicle from a given start velocity to
     * a given target velocity.
     * 
     * Typical unit code(s): SEC for seconds
     * 
     * * Note: There are unfortunately no standard unit codes for seconds/0..100
     * km/h or seconds/0..60 mph. Simply use "SEC" for seconds and indicate the
     * velocities in the [[name]] of the [[QuantitativeValue]], or use
     * [[valueReference]] with a [[QuantitativeValue]] of 0..60 mph or 0..100
     * km/h to specify the reference speeds.
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $accelerationTime
     *
     * @return static
     *
     * @see schema:accelerationTime
     * @see https://auto.schema.org
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Automotive_Ontology_Working_Group
     */
    public function accelerationTime($accelerationTime)
    {
        return $this->setProperty('accelerationTime', $accelerationTime);
    }

    /**
     * The ACRISS Car Classification Code is a code used by many car rental
     * companies, for classifying vehicles. ACRISS stands for Association of Car
     * Rental Industry Systems and Standards.
     *
     * @param string|string[] $acrissCode
     *
     * @return static
     *
     * @see schema:acrissCode
     * @see https://auto.schema.org
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Automotive_Ontology_Working_Group
     */
    public function acrissCode($acrissCode)
    {
        return $this->setProperty('acrissCode', $acrissCode);
    }

    /**
     * A property-value pair representing an additional characteristics of the
     * entitity, e.g. a product feature or another characteristic for which
     * there is no matching property in schema.org.
     * 
     * Note: Publishers should be aware that applications designed to use
     * specific schema.org properties (e.g. https://schema.org/width,
     * https://schema.org/color, https://schema.org/gtin13, ...) will typically
     * expect such data to be provided using those properties, rather than using
     * the generic property/value mechanism.
     *
     * @param \Spatie\SchemaOrg\Contracts\PropertyValueContract|\Spatie\SchemaOrg\Contracts\PropertyValueContract[] $additionalProperty
     *
     * @return static
     *
     * @see schema:additionalProperty
     */
    public function additionalProperty($additionalProperty)
    {
        return $this->setProperty('additionalProperty', $additionalProperty);
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
     * An intended audience, i.e. a group for whom something was created.
     *
     * @param \Spatie\SchemaOrg\Contracts\AudienceContract|\Spatie\SchemaOrg\Contracts\AudienceContract[] $audience
     *
     * @return static
     *
     * @see schema:audience
     */
    public function audience($audience)
    {
        return $this->setProperty('audience', $audience);
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
     * Indicates the design and body style of the vehicle (e.g. station wagon,
     * hatchback, etc.).
     *
     * @param \Spatie\SchemaOrg\Contracts\QualitativeValueContract|\Spatie\SchemaOrg\Contracts\QualitativeValueContract[]|string|string[] $bodyType
     *
     * @return static
     *
     * @see schema:bodyType
     * @see https://auto.schema.org
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Automotive_Ontology_Working_Group
     */
    public function bodyType($bodyType)
    {
        return $this->setProperty('bodyType', $bodyType);
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
     * A [callsign](https://en.wikipedia.org/wiki/Call_sign), as used in
     * broadcasting and radio communications to identify people, radio and TV
     * stations, or vehicles.
     *
     * @param string|string[] $callSign
     *
     * @return static
     *
     * @see schema:callSign
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2109
     */
    public function callSign($callSign)
    {
        return $this->setProperty('callSign', $callSign);
    }

    /**
     * The available volume for cargo or luggage. For automobiles, this is
     * usually the trunk volume.
     * 
     * Typical unit code(s): LTR for liters, FTQ for cubic foot/feet
     * 
     * Note: You can use [[minValue]] and [[maxValue]] to indicate ranges.
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $cargoVolume
     *
     * @return static
     *
     * @see schema:cargoVolume
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Automotive_Ontology_Working_Group
     */
    public function cargoVolume($cargoVolume)
    {
        return $this->setProperty('cargoVolume', $cargoVolume);
    }

    /**
     * A category for the item. Greater signs or slashes can be used to
     * informally indicate a category hierarchy.
     *
     * @param \Spatie\SchemaOrg\Contracts\PhysicalActivityCategoryContract|\Spatie\SchemaOrg\Contracts\PhysicalActivityCategoryContract[]|\Spatie\SchemaOrg\Contracts\ThingContract|\Spatie\SchemaOrg\Contracts\ThingContract[]|string|string[] $category
     *
     * @return static
     *
     * @see schema:category
     */
    public function category($category)
    {
        return $this->setProperty('category', $category);
    }

    /**
     * The color of the product.
     *
     * @param string|string[] $color
     *
     * @return static
     *
     * @see schema:color
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function color($color)
    {
        return $this->setProperty('color', $color);
    }

    /**
     * The date of the first registration of the vehicle with the respective
     * public authorities.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $dateVehicleFirstRegistered
     *
     * @return static
     *
     * @see schema:dateVehicleFirstRegistered
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Automotive_Ontology_Working_Group
     */
    public function dateVehicleFirstRegistered($dateVehicleFirstRegistered)
    {
        return $this->setProperty('dateVehicleFirstRegistered', $dateVehicleFirstRegistered);
    }

    /**
     * The depth of the item.
     *
     * @param \Spatie\SchemaOrg\Contracts\DistanceContract|\Spatie\SchemaOrg\Contracts\DistanceContract[]|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $depth
     *
     * @return static
     *
     * @see schema:depth
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function depth($depth)
    {
        return $this->setProperty('depth', $depth);
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
     * The drive wheel configuration, i.e. which roadwheels will receive torque
     * from the vehicle's engine via the drivetrain.
     *
     * @param \Spatie\SchemaOrg\Contracts\DriveWheelConfigurationValueContract|\Spatie\SchemaOrg\Contracts\DriveWheelConfigurationValueContract[]|string|string[] $driveWheelConfiguration
     *
     * @return static
     *
     * @see schema:driveWheelConfiguration
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Automotive_Ontology_Working_Group
     */
    public function driveWheelConfiguration($driveWheelConfiguration)
    {
        return $this->setProperty('driveWheelConfiguration', $driveWheelConfiguration);
    }

    /**
     * The CO2 emissions in g/km. When used in combination with a
     * QuantitativeValue, put "g/km" into the unitText property of that value,
     * since there is no UN/CEFACT Common Code for "g/km".
     *
     * @param float|float[]|int|int[] $emissionsCO2
     *
     * @return static
     *
     * @see schema:emissionsCO2
     * @see https://auto.schema.org
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Automotive_Ontology_Working_Group
     */
    public function emissionsCO2($emissionsCO2)
    {
        return $this->setProperty('emissionsCO2', $emissionsCO2);
    }

    /**
     * The capacity of the fuel tank or in the case of electric cars, the
     * battery. If there are multiple components for storage, this should
     * indicate the total of all storage of the same type.
     * 
     * Typical unit code(s): LTR for liters, GLL of US gallons, GLI for UK /
     * imperial gallons, AMH for ampere-hours (for electrical vehicles).
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $fuelCapacity
     *
     * @return static
     *
     * @see schema:fuelCapacity
     * @see https://auto.schema.org
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Automotive_Ontology_Working_Group
     */
    public function fuelCapacity($fuelCapacity)
    {
        return $this->setProperty('fuelCapacity', $fuelCapacity);
    }

    /**
     * The amount of fuel consumed for traveling a particular distance or
     * temporal duration with the given vehicle (e.g. liters per 100 km).
     * 
     * * Note 1: There are unfortunately no standard unit codes for liters per
     * 100 km.  Use [[unitText]] to indicate the unit of measurement, e.g. L/100
     * km.
     * * Note 2: There are two ways of indicating the fuel consumption,
     * [[fuelConsumption]] (e.g. 8 liters per 100 km) and [[fuelEfficiency]]
     * (e.g. 30 miles per gallon). They are reciprocal.
     * * Note 3: Often, the absolute value is useful only when related to
     * driving speed ("at 80 km/h") or usage pattern ("city traffic"). You can
     * use [[valueReference]] to link the value for the fuel consumption to
     * another value.
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $fuelConsumption
     *
     * @return static
     *
     * @see schema:fuelConsumption
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Automotive_Ontology_Working_Group
     */
    public function fuelConsumption($fuelConsumption)
    {
        return $this->setProperty('fuelConsumption', $fuelConsumption);
    }

    /**
     * The distance traveled per unit of fuel used; most commonly miles per
     * gallon (mpg) or kilometers per liter (km/L).
     * 
     * * Note 1: There are unfortunately no standard unit codes for miles per
     * gallon or kilometers per liter. Use [[unitText]] to indicate the unit of
     * measurement, e.g. mpg or km/L.
     * * Note 2: There are two ways of indicating the fuel consumption,
     * [[fuelConsumption]] (e.g. 8 liters per 100 km) and [[fuelEfficiency]]
     * (e.g. 30 miles per gallon). They are reciprocal.
     * * Note 3: Often, the absolute value is useful only when related to
     * driving speed ("at 80 km/h") or usage pattern ("city traffic"). You can
     * use [[valueReference]] to link the value for the fuel economy to another
     * value.
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $fuelEfficiency
     *
     * @return static
     *
     * @see schema:fuelEfficiency
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Automotive_Ontology_Working_Group
     */
    public function fuelEfficiency($fuelEfficiency)
    {
        return $this->setProperty('fuelEfficiency', $fuelEfficiency);
    }

    /**
     * The type of fuel suitable for the engine or engines of the vehicle. If
     * the vehicle has only one engine, this property can be attached directly
     * to the vehicle.
     *
     * @param \Spatie\SchemaOrg\Contracts\QualitativeValueContract|\Spatie\SchemaOrg\Contracts\QualitativeValueContract[]|string|string[] $fuelType
     *
     * @return static
     *
     * @see schema:fuelType
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Automotive_Ontology_Working_Group
     */
    public function fuelType($fuelType)
    {
        return $this->setProperty('fuelType', $fuelType);
    }

    /**
     * A Global Trade Item Number
     * ([GTIN](https://www.gs1.org/standards/id-keys/gtin)). GTINs identify
     * trade items, including products and services, using numeric
     * identification codes. The [[gtin]] property generalizes the earlier
     * [[gtin8]], [[gtin12]], [[gtin13]], and [[gtin14]] properties. The GS1
     * [digital link
     * specifications](https://www.gs1.org/standards/Digital-Link/) express
     * GTINs as URLs. A correct [[gtin]] value should be a valid GTIN, which
     * means that it should be an all-numeric string of either 8, 12, 13 or 14
     * digits, or a "GS1 Digital Link" URL based on such a string. The numeric
     * component should also have a [valid GS1 check
     * digit](https://www.gs1.org/services/check-digit-calculator) and meet the
     * other rules for valid GTINs. See also [GS1's GTIN
     * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) and
     * [Wikipedia](https://en.wikipedia.org/wiki/Global_Trade_Item_Number) for
     * more details. Left-padding of the gtin values is not required or
     * encouraged.
     *
     * @param string|string[] $gtin
     *
     * @return static
     *
     * @see schema:gtin
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2288
     */
    public function gtin($gtin)
    {
        return $this->setProperty('gtin', $gtin);
    }

    /**
     * The GTIN-12 code of the product, or the product to which the offer
     * refers. The GTIN-12 is the 12-digit GS1 Identification Key composed of a
     * U.P.C. Company Prefix, Item Reference, and Check Digit used to identify
     * trade items. See [GS1 GTIN
     * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more
     * details.
     *
     * @param string|string[] $gtin12
     *
     * @return static
     *
     * @see schema:gtin12
     */
    public function gtin12($gtin12)
    {
        return $this->setProperty('gtin12', $gtin12);
    }

    /**
     * The GTIN-13 code of the product, or the product to which the offer
     * refers. This is equivalent to 13-digit ISBN codes and EAN UCC-13. Former
     * 12-digit UPC codes can be converted into a GTIN-13 code by simply adding
     * a preceding zero. See [GS1 GTIN
     * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more
     * details.
     *
     * @param string|string[] $gtin13
     *
     * @return static
     *
     * @see schema:gtin13
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function gtin13($gtin13)
    {
        return $this->setProperty('gtin13', $gtin13);
    }

    /**
     * The GTIN-14 code of the product, or the product to which the offer
     * refers. See [GS1 GTIN
     * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more
     * details.
     *
     * @param string|string[] $gtin14
     *
     * @return static
     *
     * @see schema:gtin14
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function gtin14($gtin14)
    {
        return $this->setProperty('gtin14', $gtin14);
    }

    /**
     * The GTIN-8 code of the product, or the product to which the offer refers.
     * This code is also known as EAN/UCC-8 or 8-digit EAN. See [GS1 GTIN
     * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more
     * details.
     *
     * @param string|string[] $gtin8
     *
     * @return static
     *
     * @see schema:gtin8
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function gtin8($gtin8)
    {
        return $this->setProperty('gtin8', $gtin8);
    }

    /**
     * Defines the energy efficiency Category (also known as "class" or
     * "rating") for a product according to an international energy efficiency
     * standard.
     *
     * @param \Spatie\SchemaOrg\Contracts\EnergyConsumptionDetailsContract|\Spatie\SchemaOrg\Contracts\EnergyConsumptionDetailsContract[] $hasEnergyConsumptionDetails
     *
     * @return static
     *
     * @see schema:hasEnergyConsumptionDetails
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2670
     */
    public function hasEnergyConsumptionDetails($hasEnergyConsumptionDetails)
    {
        return $this->setProperty('hasEnergyConsumptionDetails', $hasEnergyConsumptionDetails);
    }

    /**
     * A product measurement, for example the inseam of pants, the wheel size of
     * a bicycle, or the gauge of a screw. Usually an exact measurement, but can
     * also be a range of measurements for adjustable products, for example
     * belts and ski bindings.
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $hasMeasurement
     *
     * @return static
     *
     * @see schema:hasMeasurement
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
    public function hasMeasurement($hasMeasurement)
    {
        return $this->setProperty('hasMeasurement', $hasMeasurement);
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
     * The height of the item.
     *
     * @param \Spatie\SchemaOrg\Contracts\DistanceContract|\Spatie\SchemaOrg\Contracts\DistanceContract[]|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $height
     *
     * @return static
     *
     * @see schema:height
     */
    public function height($height)
    {
        return $this->setProperty('height', $height);
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
     * Indicates the [[productGroupID]] for a [[ProductGroup]] that this product
     * [[isVariantOf]].
     *
     * @param string|string[] $inProductGroupWithID
     *
     * @return static
     *
     * @see schema:inProductGroupWithID
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1797
     */
    public function inProductGroupWithID($inProductGroupWithID)
    {
        return $this->setProperty('inProductGroupWithID', $inProductGroupWithID);
    }

    /**
     * A pointer to another product (or multiple products) for which this
     * product is an accessory or spare part.
     *
     * @param \Spatie\SchemaOrg\Contracts\ProductContract|\Spatie\SchemaOrg\Contracts\ProductContract[] $isAccessoryOrSparePartFor
     *
     * @return static
     *
     * @see schema:isAccessoryOrSparePartFor
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function isAccessoryOrSparePartFor($isAccessoryOrSparePartFor)
    {
        return $this->setProperty('isAccessoryOrSparePartFor', $isAccessoryOrSparePartFor);
    }

    /**
     * A pointer to another product (or multiple products) for which this
     * product is a consumable.
     *
     * @param \Spatie\SchemaOrg\Contracts\ProductContract|\Spatie\SchemaOrg\Contracts\ProductContract[] $isConsumableFor
     *
     * @return static
     *
     * @see schema:isConsumableFor
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function isConsumableFor($isConsumableFor)
    {
        return $this->setProperty('isConsumableFor', $isConsumableFor);
    }

    /**
     * A pointer to another, somehow related product (or multiple products).
     *
     * @param \Spatie\SchemaOrg\Contracts\ProductContract|\Spatie\SchemaOrg\Contracts\ProductContract[]|\Spatie\SchemaOrg\Contracts\ServiceContract|\Spatie\SchemaOrg\Contracts\ServiceContract[] $isRelatedTo
     *
     * @return static
     *
     * @see schema:isRelatedTo
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function isRelatedTo($isRelatedTo)
    {
        return $this->setProperty('isRelatedTo', $isRelatedTo);
    }

    /**
     * A pointer to another, functionally similar product (or multiple
     * products).
     *
     * @param \Spatie\SchemaOrg\Contracts\ProductContract|\Spatie\SchemaOrg\Contracts\ProductContract[]|\Spatie\SchemaOrg\Contracts\ServiceContract|\Spatie\SchemaOrg\Contracts\ServiceContract[] $isSimilarTo
     *
     * @return static
     *
     * @see schema:isSimilarTo
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function isSimilarTo($isSimilarTo)
    {
        return $this->setProperty('isSimilarTo', $isSimilarTo);
    }

    /**
     * Indicates the kind of product that this is a variant of. In the case of
     * [[ProductModel]], this is a pointer (from a ProductModel) to a base
     * product from which this product is a variant. It is safe to infer that
     * the variant inherits all product features from the base model, unless
     * defined locally. This is not transitive. In the case of a
     * [[ProductGroup]], the group description also serves as a template,
     * representing a set of Products that vary on explicitly defined, specific
     * dimensions only (so it defines both a set of variants, as well as which
     * values distinguish amongst those variants). When used with
     * [[ProductGroup]], this property can apply to any [[Product]] included in
     * the group.
     *
     * @param \Spatie\SchemaOrg\Contracts\ProductGroupContract|\Spatie\SchemaOrg\Contracts\ProductGroupContract[]|\Spatie\SchemaOrg\Contracts\ProductModelContract|\Spatie\SchemaOrg\Contracts\ProductModelContract[] $isVariantOf
     *
     * @return static
     *
     * @see schema:isVariantOf
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function isVariantOf($isVariantOf)
    {
        return $this->setProperty('isVariantOf', $isVariantOf);
    }

    /**
     * A predefined value from OfferItemCondition or a textual description of
     * the condition of the product or service, or the products or services
     * included in the offer.
     *
     * @param \Spatie\SchemaOrg\Contracts\OfferItemConditionContract|\Spatie\SchemaOrg\Contracts\OfferItemConditionContract[] $itemCondition
     *
     * @return static
     *
     * @see schema:itemCondition
     */
    public function itemCondition($itemCondition)
    {
        return $this->setProperty('itemCondition', $itemCondition);
    }

    /**
     * A textual description of known damages, both repaired and unrepaired.
     *
     * @param string|string[] $knownVehicleDamages
     *
     * @return static
     *
     * @see schema:knownVehicleDamages
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Automotive_Ontology_Working_Group
     */
    public function knownVehicleDamages($knownVehicleDamages)
    {
        return $this->setProperty('knownVehicleDamages', $knownVehicleDamages);
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
     * The manufacturer of the product.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[] $manufacturer
     *
     * @return static
     *
     * @see schema:manufacturer
     */
    public function manufacturer($manufacturer)
    {
        return $this->setProperty('manufacturer', $manufacturer);
    }

    /**
     * A material that something is made from, e.g. leather, wool, cotton,
     * paper.
     *
     * @param \Spatie\SchemaOrg\Contracts\ProductContract|\Spatie\SchemaOrg\Contracts\ProductContract[]|string|string[] $material
     *
     * @return static
     *
     * @see schema:material
     */
    public function material($material)
    {
        return $this->setProperty('material', $material);
    }

    /**
     * Indicates that the vehicle meets the respective emission standard.
     *
     * @param \Spatie\SchemaOrg\Contracts\QualitativeValueContract|\Spatie\SchemaOrg\Contracts\QualitativeValueContract[]|string|string[] $meetsEmissionStandard
     *
     * @return static
     *
     * @see schema:meetsEmissionStandard
     * @see https://auto.schema.org
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Automotive_Ontology_Working_Group
     */
    public function meetsEmissionStandard($meetsEmissionStandard)
    {
        return $this->setProperty('meetsEmissionStandard', $meetsEmissionStandard);
    }

    /**
     * The total distance travelled by the particular vehicle since its initial
     * production, as read from its odometer.
     * 
     * Typical unit code(s): KMT for kilometers, SMI for statute miles
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $mileageFromOdometer
     *
     * @return static
     *
     * @see schema:mileageFromOdometer
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Automotive_Ontology_Working_Group
     */
    public function mileageFromOdometer($mileageFromOdometer)
    {
        return $this->setProperty('mileageFromOdometer', $mileageFromOdometer);
    }

    /**
     * The model of the product. Use with the URL of a ProductModel or a textual
     * representation of the model identifier. The URL of the ProductModel can
     * be from an external source. It is recommended to additionally provide
     * strong product identifiers via the gtin8/gtin13/gtin14 and mpn
     * properties.
     *
     * @param \Spatie\SchemaOrg\Contracts\ProductModelContract|\Spatie\SchemaOrg\Contracts\ProductModelContract[]|string|string[] $model
     *
     * @return static
     *
     * @see schema:model
     */
    public function model($model)
    {
        return $this->setProperty('model', $model);
    }

    /**
     * The release date of a vehicle model (often used to differentiate versions
     * of the same make and model).
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $modelDate
     *
     * @return static
     *
     * @see schema:modelDate
     * @see https://auto.schema.org
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Automotive_Ontology_Working_Group
     */
    public function modelDate($modelDate)
    {
        return $this->setProperty('modelDate', $modelDate);
    }

    /**
     * The Manufacturer Part Number (MPN) of the product, or the product to
     * which the offer refers.
     *
     * @param string|string[] $mpn
     *
     * @return static
     *
     * @see schema:mpn
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function mpn($mpn)
    {
        return $this->setProperty('mpn', $mpn);
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
     * Indicates the [NATO stock
     * number](https://en.wikipedia.org/wiki/NATO_Stock_Number) (nsn) of a
     * [[Product]].
     *
     * @param string|string[] $nsn
     *
     * @return static
     *
     * @see schema:nsn
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2126
     */
    public function nsn($nsn)
    {
        return $this->setProperty('nsn', $nsn);
    }

    /**
     * The number or type of airbags in the vehicle.
     *
     * @param float|float[]|int|int[]|string|string[] $numberOfAirbags
     *
     * @return static
     *
     * @see schema:numberOfAirbags
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Automotive_Ontology_Working_Group
     */
    public function numberOfAirbags($numberOfAirbags)
    {
        return $this->setProperty('numberOfAirbags', $numberOfAirbags);
    }

    /**
     * The number of axles.
     * 
     * Typical unit code(s): C62
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[]|float|float[]|int|int[] $numberOfAxles
     *
     * @return static
     *
     * @see schema:numberOfAxles
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Automotive_Ontology_Working_Group
     */
    public function numberOfAxles($numberOfAxles)
    {
        return $this->setProperty('numberOfAxles', $numberOfAxles);
    }

    /**
     * The number of doors.
     * 
     * Typical unit code(s): C62
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[]|float|float[]|int|int[] $numberOfDoors
     *
     * @return static
     *
     * @see schema:numberOfDoors
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Automotive_Ontology_Working_Group
     */
    public function numberOfDoors($numberOfDoors)
    {
        return $this->setProperty('numberOfDoors', $numberOfDoors);
    }

    /**
     * The total number of forward gears available for the transmission system
     * of the vehicle.
     * 
     * Typical unit code(s): C62
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[]|float|float[]|int|int[] $numberOfForwardGears
     *
     * @return static
     *
     * @see schema:numberOfForwardGears
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Automotive_Ontology_Working_Group
     */
    public function numberOfForwardGears($numberOfForwardGears)
    {
        return $this->setProperty('numberOfForwardGears', $numberOfForwardGears);
    }

    /**
     * The number of owners of the vehicle, including the current one.
     * 
     * Typical unit code(s): C62
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[]|float|float[]|int|int[] $numberOfPreviousOwners
     *
     * @return static
     *
     * @see schema:numberOfPreviousOwners
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Automotive_Ontology_Working_Group
     */
    public function numberOfPreviousOwners($numberOfPreviousOwners)
    {
        return $this->setProperty('numberOfPreviousOwners', $numberOfPreviousOwners);
    }

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a
     * product, rent the DVD of a movie, perform a service, or give away tickets
     * to an event. Use [[businessFunction]] to indicate the kind of transaction
     * offered, i.e. sell, lease, etc. This property can also be used to
     * describe a [[Demand]]. While this property is listed as expected on a
     * number of common types, it can be used in others. In that case, using a
     * second type, such as Product or a subtype of Product, can clarify the
     * nature of the offer.
     *
     * @param \Spatie\SchemaOrg\Contracts\DemandContract|\Spatie\SchemaOrg\Contracts\DemandContract[]|\Spatie\SchemaOrg\Contracts\OfferContract|\Spatie\SchemaOrg\Contracts\OfferContract[] $offers
     *
     * @return static
     *
     * @see schema:offers
     * @link https://github.com/schemaorg/schemaorg/issues/2289
     */
    public function offers($offers)
    {
        return $this->setProperty('offers', $offers);
    }

    /**
     * A pattern that something has, for example 'polka dot', 'striped',
     * 'Canadian flag'. Values are typically expressed as text, although links
     * to controlled value schemes are also supported.
     *
     * @param \Spatie\SchemaOrg\Contracts\DefinedTermContract|\Spatie\SchemaOrg\Contracts\DefinedTermContract[]|string|string[] $pattern
     *
     * @return static
     *
     * @see schema:pattern
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1797
     */
    public function pattern($pattern)
    {
        return $this->setProperty('pattern', $pattern);
    }

    /**
     * The permitted weight of passengers and cargo, EXCLUDING the weight of the
     * empty vehicle.
     * 
     * Typical unit code(s): KGM for kilogram, LBR for pound
     * 
     * * Note 1: Many databases specify the permitted TOTAL weight instead,
     * which is the sum of [[weight]] and [[payload]]
     * * Note 2: You can indicate additional information in the [[name]] of the
     * [[QuantitativeValue]] node.
     * * Note 3: You may also link to a [[QualitativeValue]] node that provides
     * additional information using [[valueReference]].
     * * Note 4: Note that you can use [[minValue]] and [[maxValue]] to indicate
     * ranges.
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $payload
     *
     * @return static
     *
     * @see schema:payload
     * @see https://auto.schema.org
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Automotive_Ontology_Working_Group
     */
    public function payload($payload)
    {
        return $this->setProperty('payload', $payload);
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
     * The product identifier, such as ISBN. For example: ``` meta
     * itemprop="productID" content="isbn:123-456-789" ```.
     *
     * @param string|string[] $productID
     *
     * @return static
     *
     * @see schema:productID
     */
    public function productID($productID)
    {
        return $this->setProperty('productID', $productID);
    }

    /**
     * The date of production of the item, e.g. vehicle.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $productionDate
     *
     * @return static
     *
     * @see schema:productionDate
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Automotive_Ontology_Working_Group
     */
    public function productionDate($productionDate)
    {
        return $this->setProperty('productionDate', $productionDate);
    }

    /**
     * The date the item e.g. vehicle was purchased by the current owner.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $purchaseDate
     *
     * @return static
     *
     * @see schema:purchaseDate
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Automotive_Ontology_Working_Group
     */
    public function purchaseDate($purchaseDate)
    {
        return $this->setProperty('purchaseDate', $purchaseDate);
    }

    /**
     * The release date of a product or product model. This can be used to
     * distinguish the exact variant of a product.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $releaseDate
     *
     * @return static
     *
     * @see schema:releaseDate
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function releaseDate($releaseDate)
    {
        return $this->setProperty('releaseDate', $releaseDate);
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
     * The permitted total weight of cargo and installations (e.g. a roof rack)
     * on top of the vehicle.
     * 
     * Typical unit code(s): KGM for kilogram, LBR for pound
     * 
     * * Note 1: You can indicate additional information in the [[name]] of the
     * [[QuantitativeValue]] node.
     * * Note 2: You may also link to a [[QualitativeValue]] node that provides
     * additional information using [[valueReference]]
     * * Note 3: Note that you can use [[minValue]] and [[maxValue]] to indicate
     * ranges.
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $roofLoad
     *
     * @return static
     *
     * @see schema:roofLoad
     * @see https://auto.schema.org
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Automotive_Ontology_Working_Group
     */
    public function roofLoad($roofLoad)
    {
        return $this->setProperty('roofLoad', $roofLoad);
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
     * The number of persons that can be seated (e.g. in a vehicle), both in
     * terms of the physical space available, and in terms of limitations set by
     * law.
     * 
     * Typical unit code(s): C62 for persons
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[]|float|float[]|int|int[] $seatingCapacity
     *
     * @return static
     *
     * @see schema:seatingCapacity
     * @see https://auto.schema.org
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Automotive_Ontology_Working_Group
     */
    public function seatingCapacity($seatingCapacity)
    {
        return $this->setProperty('seatingCapacity', $seatingCapacity);
    }

    /**
     * A standardized size of a product or creative work, specified either
     * through a simple textual string (for example 'XL', '32Wx34L'), a 
     * QuantitativeValue with a unitCode, or a comprehensive and structured
     * [[SizeSpecification]]; in other cases, the [[width]], [[height]],
     * [[depth]] and [[weight]] properties may be more applicable.
     *
     * @param \Spatie\SchemaOrg\Contracts\DefinedTermContract|\Spatie\SchemaOrg\Contracts\DefinedTermContract[]|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[]|\Spatie\SchemaOrg\Contracts\SizeSpecificationContract|\Spatie\SchemaOrg\Contracts\SizeSpecificationContract[]|string|string[] $size
     *
     * @return static
     *
     * @see schema:size
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1797
     */
    public function size($size)
    {
        return $this->setProperty('size', $size);
    }

    /**
     * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a
     * product or service, or the product to which the offer refers.
     *
     * @param string|string[] $sku
     *
     * @return static
     *
     * @see schema:sku
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function sku($sku)
    {
        return $this->setProperty('sku', $sku);
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
     * The speed range of the vehicle. If the vehicle is powered by an engine,
     * the upper limit of the speed range (indicated by [[maxValue]] should be
     * the maximum speed achievable under regular conditions.
     * 
     * Typical unit code(s): KMH for km/h, HM for mile per hour (0.447 04 m/s),
     * KNT for knot
     * 
     * *Note 1: Use [[minValue]] and [[maxValue]] to indicate the range.
     * Typically, the minimal value is zero.
     * * Note 2: There are many different ways of measuring the speed range. You
     * can link to information about how the given value has been determined
     * using the [[valueReference]] property.
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $speed
     *
     * @return static
     *
     * @see schema:speed
     * @see https://auto.schema.org
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Automotive_Ontology_Working_Group
     */
    public function speed($speed)
    {
        return $this->setProperty('speed', $speed);
    }

    /**
     * The position of the steering wheel or similar device (mostly for cars).
     *
     * @param \Spatie\SchemaOrg\Contracts\SteeringPositionValueContract|\Spatie\SchemaOrg\Contracts\SteeringPositionValueContract[] $steeringPosition
     *
     * @return static
     *
     * @see schema:steeringPosition
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Automotive_Ontology_Working_Group
     */
    public function steeringPosition($steeringPosition)
    {
        return $this->setProperty('steeringPosition', $steeringPosition);
    }

    /**
     * This is a StupidProperty! - for testing only
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $stupidProperty
     *
     * @return static
     *
     * @see schema:stupidProperty
     * @see https://attic.schema.org
     */
    public function stupidProperty($stupidProperty)
    {
        return $this->setProperty('stupidProperty', $stupidProperty);
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
     * The permitted vertical load (TWR) of a trailer attached to the vehicle.
     * Also referred to as Tongue Load Rating (TLR) or Vertical Load Rating
     * (VLR)
     * 
     * Typical unit code(s): KGM for kilogram, LBR for pound
     * 
     * * Note 1: You can indicate additional information in the [[name]] of the
     * [[QuantitativeValue]] node.
     * * Note 2: You may also link to a [[QualitativeValue]] node that provides
     * additional information using [[valueReference]].
     * * Note 3: Note that you can use [[minValue]] and [[maxValue]] to indicate
     * ranges.
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $tongueWeight
     *
     * @return static
     *
     * @see schema:tongueWeight
     * @see https://auto.schema.org
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Automotive_Ontology_Working_Group
     */
    public function tongueWeight($tongueWeight)
    {
        return $this->setProperty('tongueWeight', $tongueWeight);
    }

    /**
     * The permitted weight of a trailer attached to the vehicle.
     * 
     * Typical unit code(s): KGM for kilogram, LBR for pound
     * * Note 1: You can indicate additional information in the [[name]] of the
     * [[QuantitativeValue]] node.
     * * Note 2: You may also link to a [[QualitativeValue]] node that provides
     * additional information using [[valueReference]].
     * * Note 3: Note that you can use [[minValue]] and [[maxValue]] to indicate
     * ranges.
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $trailerWeight
     *
     * @return static
     *
     * @see schema:trailerWeight
     * @see https://auto.schema.org
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Automotive_Ontology_Working_Group
     */
    public function trailerWeight($trailerWeight)
    {
        return $this->setProperty('trailerWeight', $trailerWeight);
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
     * A short text indicating the configuration of the vehicle, e.g. '5dr
     * hatchback ST 2.5 MT 225 hp' or 'limited edition'.
     *
     * @param string|string[] $vehicleConfiguration
     *
     * @return static
     *
     * @see schema:vehicleConfiguration
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Automotive_Ontology_Working_Group
     */
    public function vehicleConfiguration($vehicleConfiguration)
    {
        return $this->setProperty('vehicleConfiguration', $vehicleConfiguration);
    }

    /**
     * Information about the engine or engines of the vehicle.
     *
     * @param \Spatie\SchemaOrg\Contracts\EngineSpecificationContract|\Spatie\SchemaOrg\Contracts\EngineSpecificationContract[] $vehicleEngine
     *
     * @return static
     *
     * @see schema:vehicleEngine
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Automotive_Ontology_Working_Group
     */
    public function vehicleEngine($vehicleEngine)
    {
        return $this->setProperty('vehicleEngine', $vehicleEngine);
    }

    /**
     * The Vehicle Identification Number (VIN) is a unique serial number used by
     * the automotive industry to identify individual motor vehicles.
     *
     * @param string|string[] $vehicleIdentificationNumber
     *
     * @return static
     *
     * @see schema:vehicleIdentificationNumber
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Automotive_Ontology_Working_Group
     */
    public function vehicleIdentificationNumber($vehicleIdentificationNumber)
    {
        return $this->setProperty('vehicleIdentificationNumber', $vehicleIdentificationNumber);
    }

    /**
     * The color or color combination of the interior of the vehicle.
     *
     * @param string|string[] $vehicleInteriorColor
     *
     * @return static
     *
     * @see schema:vehicleInteriorColor
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Automotive_Ontology_Working_Group
     */
    public function vehicleInteriorColor($vehicleInteriorColor)
    {
        return $this->setProperty('vehicleInteriorColor', $vehicleInteriorColor);
    }

    /**
     * The type or material of the interior of the vehicle (e.g. synthetic
     * fabric, leather, wood, etc.). While most interior types are characterized
     * by the material used, an interior type can also be based on vehicle usage
     * or target audience.
     *
     * @param string|string[] $vehicleInteriorType
     *
     * @return static
     *
     * @see schema:vehicleInteriorType
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Automotive_Ontology_Working_Group
     */
    public function vehicleInteriorType($vehicleInteriorType)
    {
        return $this->setProperty('vehicleInteriorType', $vehicleInteriorType);
    }

    /**
     * The release date of a vehicle model (often used to differentiate versions
     * of the same make and model).
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $vehicleModelDate
     *
     * @return static
     *
     * @see schema:vehicleModelDate
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Automotive_Ontology_Working_Group
     */
    public function vehicleModelDate($vehicleModelDate)
    {
        return $this->setProperty('vehicleModelDate', $vehicleModelDate);
    }

    /**
     * The number of passengers that can be seated in the vehicle, both in terms
     * of the physical space available, and in terms of limitations set by law.
     * 
     * Typical unit code(s): C62 for persons.
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[]|float|float[]|int|int[] $vehicleSeatingCapacity
     *
     * @return static
     *
     * @see schema:vehicleSeatingCapacity
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Automotive_Ontology_Working_Group
     */
    public function vehicleSeatingCapacity($vehicleSeatingCapacity)
    {
        return $this->setProperty('vehicleSeatingCapacity', $vehicleSeatingCapacity);
    }

    /**
     * Indicates whether the vehicle has been used for special purposes, like
     * commercial rental, driving school, or as a taxi. The legislation in many
     * countries requires this information to be revealed when offering a car
     * for sale.
     *
     * @param \Spatie\SchemaOrg\Contracts\CarUsageTypeContract|\Spatie\SchemaOrg\Contracts\CarUsageTypeContract[]|string|string[] $vehicleSpecialUsage
     *
     * @return static
     *
     * @see schema:vehicleSpecialUsage
     * @see https://auto.schema.org
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Automotive_Ontology_Working_Group
     */
    public function vehicleSpecialUsage($vehicleSpecialUsage)
    {
        return $this->setProperty('vehicleSpecialUsage', $vehicleSpecialUsage);
    }

    /**
     * The type of component used for transmitting the power from a rotating
     * power source to the wheels or other relevant component(s) ("gearbox" for
     * cars).
     *
     * @param \Spatie\SchemaOrg\Contracts\QualitativeValueContract|\Spatie\SchemaOrg\Contracts\QualitativeValueContract[]|string|string[] $vehicleTransmission
     *
     * @return static
     *
     * @see schema:vehicleTransmission
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Automotive_Ontology_Working_Group
     */
    public function vehicleTransmission($vehicleTransmission)
    {
        return $this->setProperty('vehicleTransmission', $vehicleTransmission);
    }

    /**
     * The weight of the product or person.
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $weight
     *
     * @return static
     *
     * @see schema:weight
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function weight($weight)
    {
        return $this->setProperty('weight', $weight);
    }

    /**
     * The permitted total weight of the loaded vehicle, including passengers
     * and cargo and the weight of the empty vehicle.
     * 
     * Typical unit code(s): KGM for kilogram, LBR for pound
     * 
     * * Note 1: You can indicate additional information in the [[name]] of the
     * [[QuantitativeValue]] node.
     * * Note 2: You may also link to a [[QualitativeValue]] node that provides
     * additional information using [[valueReference]].
     * * Note 3: Note that you can use [[minValue]] and [[maxValue]] to indicate
     * ranges.
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $weightTotal
     *
     * @return static
     *
     * @see schema:weightTotal
     * @see https://auto.schema.org
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Automotive_Ontology_Working_Group
     */
    public function weightTotal($weightTotal)
    {
        return $this->setProperty('weightTotal', $weightTotal);
    }

    /**
     * The distance between the centers of the front and rear wheels.
     * 
     * Typical unit code(s): CMT for centimeters, MTR for meters, INH for
     * inches, FOT for foot/feet
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $wheelbase
     *
     * @return static
     *
     * @see schema:wheelbase
     * @see https://auto.schema.org
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Automotive_Ontology_Working_Group
     */
    public function wheelbase($wheelbase)
    {
        return $this->setProperty('wheelbase', $wheelbase);
    }

    /**
     * The width of the item.
     *
     * @param \Spatie\SchemaOrg\Contracts\DistanceContract|\Spatie\SchemaOrg\Contracts\DistanceContract[]|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $width
     *
     * @return static
     *
     * @see schema:width
     */
    public function width($width)
    {
        return $this->setProperty('width', $width);
    }

}
