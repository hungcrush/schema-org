<?php

namespace Spatie\SchemaOrg;

use \Spatie\SchemaOrg\Contracts\TaxiReservationContract;
use \Spatie\SchemaOrg\Contracts\IntangibleContract;
use \Spatie\SchemaOrg\Contracts\ReservationContract;
use \Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * A reservation for a taxi.
 * 
 * Note: This type is for information about actual reservations, e.g. in
 * confirmation emails or HTML pages with individual confirmations of
 * reservations. For offers of tickets, use [[Offer]].
 *
 * @see schema:TaxiReservation
 *
 */
class TaxiReservation extends BaseType implements TaxiReservationContract, IntangibleContract, ReservationContract, ThingContract
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
     * 'bookingAgent' is an out-dated term indicating a 'broker' that serves as
     * a booking agent.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $bookingAgent
     *
     * @return static
     *
     * @see schema:bookingAgent
     */
    public function bookingAgent($bookingAgent)
    {
        return $this->setProperty('bookingAgent', $bookingAgent);
    }

    /**
     * The date and time the reservation was booked.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $bookingTime
     *
     * @return static
     *
     * @see schema:bookingTime
     */
    public function bookingTime($bookingTime)
    {
        return $this->setProperty('bookingTime', $bookingTime);
    }

    /**
     * An entity that arranges for an exchange between a buyer and a seller.  In
     * most cases a broker never acquires or releases ownership of a product or
     * service involved in an exchange.  If it is not clear whether an entity is
     * a broker, seller, or buyer, the latter two terms are preferred.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $broker
     *
     * @return static
     *
     * @see schema:broker
     */
    public function broker($broker)
    {
        return $this->setProperty('broker', $broker);
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
     * The date and time the reservation was modified.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $modifiedTime
     *
     * @return static
     *
     * @see schema:modifiedTime
     */
    public function modifiedTime($modifiedTime)
    {
        return $this->setProperty('modifiedTime', $modifiedTime);
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
     * Number of people the reservation should accommodate.
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[]|int|int[] $partySize
     *
     * @return static
     *
     * @see schema:partySize
     */
    public function partySize($partySize)
    {
        return $this->setProperty('partySize', $partySize);
    }

    /**
     * Where a taxi will pick up a passenger or a rental car can be picked up.
     *
     * @param \Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $pickupLocation
     *
     * @return static
     *
     * @see schema:pickupLocation
     */
    public function pickupLocation($pickupLocation)
    {
        return $this->setProperty('pickupLocation', $pickupLocation);
    }

    /**
     * When a taxi will pickup a passenger or a rental car can be picked up.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $pickupTime
     *
     * @return static
     *
     * @see schema:pickupTime
     */
    public function pickupTime($pickupTime)
    {
        return $this->setProperty('pickupTime', $pickupTime);
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
     * The currency of the price, or a price component when attached to
     * [[PriceSpecification]] and its subtypes.
     * 
     * Use standard formats: [ISO 4217 currency
     * format](http://en.wikipedia.org/wiki/ISO_4217) e.g. "USD"; [Ticker
     * symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for
     * cryptocurrencies e.g. "BTC"; well known names for [Local Exchange
     * Tradings
     * Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system)
     * (LETS) and other currency types e.g. "Ithaca HOUR".
     *
     * @param string|string[] $priceCurrency
     *
     * @return static
     *
     * @see schema:priceCurrency
     */
    public function priceCurrency($priceCurrency)
    {
        return $this->setProperty('priceCurrency', $priceCurrency);
    }

    /**
     * Any membership in a frequent flyer, hotel loyalty program, etc. being
     * applied to the reservation.
     *
     * @param \Spatie\SchemaOrg\Contracts\ProgramMembershipContract|\Spatie\SchemaOrg\Contracts\ProgramMembershipContract[] $programMembershipUsed
     *
     * @return static
     *
     * @see schema:programMembershipUsed
     */
    public function programMembershipUsed($programMembershipUsed)
    {
        return $this->setProperty('programMembershipUsed', $programMembershipUsed);
    }

    /**
     * The service provider, service operator, or service performer; the goods
     * producer. Another party (a seller) may offer those services or goods on
     * behalf of the provider. A provider may also serve as the seller.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $provider
     *
     * @return static
     *
     * @see schema:provider
     * @link https://github.com/schemaorg/schemaorg/issues/2289
     */
    public function provider($provider)
    {
        return $this->setProperty('provider', $provider);
    }

    /**
     * The thing -- flight, event, restaurant,etc. being reserved.
     *
     * @param \Spatie\SchemaOrg\Contracts\ThingContract|\Spatie\SchemaOrg\Contracts\ThingContract[] $reservationFor
     *
     * @return static
     *
     * @see schema:reservationFor
     */
    public function reservationFor($reservationFor)
    {
        return $this->setProperty('reservationFor', $reservationFor);
    }

    /**
     * A unique identifier for the reservation.
     *
     * @param string|string[] $reservationId
     *
     * @return static
     *
     * @see schema:reservationId
     */
    public function reservationId($reservationId)
    {
        return $this->setProperty('reservationId', $reservationId);
    }

    /**
     * The current status of the reservation.
     *
     * @param \Spatie\SchemaOrg\Contracts\ReservationStatusTypeContract|\Spatie\SchemaOrg\Contracts\ReservationStatusTypeContract[] $reservationStatus
     *
     * @return static
     *
     * @see schema:reservationStatus
     */
    public function reservationStatus($reservationStatus)
    {
        return $this->setProperty('reservationStatus', $reservationStatus);
    }

    /**
     * A ticket associated with the reservation.
     *
     * @param \Spatie\SchemaOrg\Contracts\TicketContract|\Spatie\SchemaOrg\Contracts\TicketContract[] $reservedTicket
     *
     * @return static
     *
     * @see schema:reservedTicket
     */
    public function reservedTicket($reservedTicket)
    {
        return $this->setProperty('reservedTicket', $reservedTicket);
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
     * The total price for the reservation or ticket, including applicable
     * taxes, shipping, etc.
     * 
     * Usage guidelines:
     * 
     * * Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT
     * NINE' (U+0039)) rather than superficially similiar Unicode symbols.
     * * Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a
     * decimal point. Avoid using these symbols as a readability separator.
     *
     * @param \Spatie\SchemaOrg\Contracts\PriceSpecificationContract|\Spatie\SchemaOrg\Contracts\PriceSpecificationContract[]|float|float[]|int|int[]|string|string[] $totalPrice
     *
     * @return static
     *
     * @see schema:totalPrice
     */
    public function totalPrice($totalPrice)
    {
        return $this->setProperty('totalPrice', $totalPrice);
    }

    /**
     * The person or organization the reservation or ticket is for.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $underName
     *
     * @return static
     *
     * @see schema:underName
     */
    public function underName($underName)
    {
        return $this->setProperty('underName', $underName);
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
