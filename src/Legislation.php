<?php

namespace Spatie\SchemaOrg;

use \Spatie\SchemaOrg\Contracts\LegislationContract;
use \Spatie\SchemaOrg\Contracts\CreativeWorkContract;
use \Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * A legal document such as an act, decree, bill, etc. (enforceable or not) or a
 * component of a legal act (like an article).
 *
 * @see schema:Legislation
 * @see https://pending.schema.org
 *
 */
class Legislation extends BaseType implements LegislationContract, CreativeWorkContract, ThingContract
{
    /**
     * The subject matter of the content.
     *
     * @param \Spatie\SchemaOrg\Contracts\ThingContract|\Spatie\SchemaOrg\Contracts\ThingContract[] $about
     *
     * @return static
     *
     * @see schema:about
     * @link https://github.com/schemaorg/schemaorg/issues/1670
     */
    public function about($about)
    {
        return $this->setProperty('about', $about);
    }

    /**
     * An abstract is a short description that summarizes a [[CreativeWork]].
     *
     * @param string|string[] $abstract
     *
     * @return static
     *
     * @see schema:abstract
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/276
     */
    public function abstract($abstract)
    {
        return $this->setProperty('abstract', $abstract);
    }

    /**
     * The human sensory perceptual system or cognitive faculty through which a
     * person may process or perceive information. Expected values include:
     * auditory, tactile, textual, visual, colorDependent, chartOnVisual,
     * chemOnVisual, diagramOnVisual, mathOnVisual, musicOnVisual, textOnVisual.
     *
     * @param string|string[] $accessMode
     *
     * @return static
     *
     * @see schema:accessMode
     * @link https://github.com/schemaorg/schemaorg/issues/1100
     */
    public function accessMode($accessMode)
    {
        return $this->setProperty('accessMode', $accessMode);
    }

    /**
     * A list of single or combined accessModes that are sufficient to
     * understand all the intellectual content of a resource. Expected values
     * include:  auditory, tactile, textual, visual.
     *
     * @param \Spatie\SchemaOrg\Contracts\ItemListContract|\Spatie\SchemaOrg\Contracts\ItemListContract[] $accessModeSufficient
     *
     * @return static
     *
     * @see schema:accessModeSufficient
     * @link https://github.com/schemaorg/schemaorg/issues/1100
     */
    public function accessModeSufficient($accessModeSufficient)
    {
        return $this->setProperty('accessModeSufficient', $accessModeSufficient);
    }

    /**
     * Indicates that the resource is compatible with the referenced
     * accessibility API ([WebSchemas wiki lists possible
     * values](http://www.w3.org/wiki/WebSchemas/Accessibility)).
     *
     * @param string|string[] $accessibilityAPI
     *
     * @return static
     *
     * @see schema:accessibilityAPI
     */
    public function accessibilityAPI($accessibilityAPI)
    {
        return $this->setProperty('accessibilityAPI', $accessibilityAPI);
    }

    /**
     * Identifies input methods that are sufficient to fully control the
     * described resource ([WebSchemas wiki lists possible
     * values](http://www.w3.org/wiki/WebSchemas/Accessibility)).
     *
     * @param string|string[] $accessibilityControl
     *
     * @return static
     *
     * @see schema:accessibilityControl
     */
    public function accessibilityControl($accessibilityControl)
    {
        return $this->setProperty('accessibilityControl', $accessibilityControl);
    }

    /**
     * Content features of the resource, such as accessible media, alternatives
     * and supported enhancements for accessibility ([WebSchemas wiki lists
     * possible values](http://www.w3.org/wiki/WebSchemas/Accessibility)).
     *
     * @param string|string[] $accessibilityFeature
     *
     * @return static
     *
     * @see schema:accessibilityFeature
     */
    public function accessibilityFeature($accessibilityFeature)
    {
        return $this->setProperty('accessibilityFeature', $accessibilityFeature);
    }

    /**
     * A characteristic of the described resource that is physiologically
     * dangerous to some users. Related to WCAG 2.0 guideline 2.3 ([WebSchemas
     * wiki lists possible
     * values](http://www.w3.org/wiki/WebSchemas/Accessibility)).
     *
     * @param string|string[] $accessibilityHazard
     *
     * @return static
     *
     * @see schema:accessibilityHazard
     */
    public function accessibilityHazard($accessibilityHazard)
    {
        return $this->setProperty('accessibilityHazard', $accessibilityHazard);
    }

    /**
     * A human-readable summary of specific accessibility features or
     * deficiencies, consistent with the other accessibility metadata but
     * expressing subtleties such as "short descriptions are present but long
     * descriptions will be needed for non-visual users" or "short descriptions
     * are present and no long descriptions are needed."
     *
     * @param string|string[] $accessibilitySummary
     *
     * @return static
     *
     * @see schema:accessibilitySummary
     * @link https://github.com/schemaorg/schemaorg/issues/1100
     */
    public function accessibilitySummary($accessibilitySummary)
    {
        return $this->setProperty('accessibilitySummary', $accessibilitySummary);
    }

    /**
     * Specifies the Person that is legally accountable for the CreativeWork.
     *
     * @param \Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $accountablePerson
     *
     * @return static
     *
     * @see schema:accountablePerson
     */
    public function accountablePerson($accountablePerson)
    {
        return $this->setProperty('accountablePerson', $accountablePerson);
    }

    /**
     * Indicates a page documenting how licenses can be purchased or otherwise
     * acquired, for the current item.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|string|string[] $acquireLicensePage
     *
     * @return static
     *
     * @see schema:acquireLicensePage
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2454
     */
    public function acquireLicensePage($acquireLicensePage)
    {
        return $this->setProperty('acquireLicensePage', $acquireLicensePage);
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
     * A secondary title of the CreativeWork.
     *
     * @param string|string[] $alternativeHeadline
     *
     * @return static
     *
     * @see schema:alternativeHeadline
     */
    public function alternativeHeadline($alternativeHeadline)
    {
        return $this->setProperty('alternativeHeadline', $alternativeHeadline);
    }

    /**
     * The item being described is intended to assess the competency or learning
     * outcome defined by the referenced term.
     *
     * @param \Spatie\SchemaOrg\Contracts\DefinedTermContract|\Spatie\SchemaOrg\Contracts\DefinedTermContract[]|string|string[] $assesses
     *
     * @return static
     *
     * @see schema:assesses
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2427
     */
    public function assesses($assesses)
    {
        return $this->setProperty('assesses', $assesses);
    }

    /**
     * A media object that encodes this CreativeWork. This property is a synonym
     * for encoding.
     *
     * @param \Spatie\SchemaOrg\Contracts\MediaObjectContract|\Spatie\SchemaOrg\Contracts\MediaObjectContract[] $associatedMedia
     *
     * @return static
     *
     * @see schema:associatedMedia
     */
    public function associatedMedia($associatedMedia)
    {
        return $this->setProperty('associatedMedia', $associatedMedia);
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
     * An embedded audio object.
     *
     * @param \Spatie\SchemaOrg\Contracts\AudioObjectContract|\Spatie\SchemaOrg\Contracts\AudioObjectContract[]|\Spatie\SchemaOrg\Contracts\ClipContract|\Spatie\SchemaOrg\Contracts\ClipContract[]|\Spatie\SchemaOrg\Contracts\MusicRecordingContract|\Spatie\SchemaOrg\Contracts\MusicRecordingContract[] $audio
     *
     * @return static
     *
     * @see schema:audio
     * @link https://github.com/schemaorg/schemaorg/issues/2420
     */
    public function audio($audio)
    {
        return $this->setProperty('audio', $audio);
    }

    /**
     * The author of this content or rating. Please note that author is special
     * in that HTML 5 provides a special mechanism for indicating authorship via
     * the rel tag. That is equivalent to this and may be used interchangeably.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $author
     *
     * @return static
     *
     * @see schema:author
     */
    public function author($author)
    {
        return $this->setProperty('author', $author);
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
     * Fictional person connected with a creative work.
     *
     * @param \Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $character
     *
     * @return static
     *
     * @see schema:character
     */
    public function character($character)
    {
        return $this->setProperty('character', $character);
    }

    /**
     * A citation or reference to another creative work, such as another
     * publication, web page, scholarly article, etc.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|string|string[] $citation
     *
     * @return static
     *
     * @see schema:citation
     */
    public function citation($citation)
    {
        return $this->setProperty('citation', $citation);
    }

    /**
     * Comments, typically from users.
     *
     * @param \Spatie\SchemaOrg\Contracts\CommentContract|\Spatie\SchemaOrg\Contracts\CommentContract[] $comment
     *
     * @return static
     *
     * @see schema:comment
     */
    public function comment($comment)
    {
        return $this->setProperty('comment', $comment);
    }

    /**
     * The number of comments this CreativeWork (e.g. Article, Question or
     * Answer) has received. This is most applicable to works published in Web
     * sites with commenting system; additional comments may exist elsewhere.
     *
     * @param int|int[] $commentCount
     *
     * @return static
     *
     * @see schema:commentCount
     */
    public function commentCount($commentCount)
    {
        return $this->setProperty('commentCount', $commentCount);
    }

    /**
     * Conditions that affect the availability of, or method(s) of access to, an
     * item. Typically used for real world items such as an [[ArchiveComponent]]
     * held by an [[ArchiveOrganization]]. This property is not suitable for use
     * as a general Web access control mechanism. It is expressed only in
     * natural language.
     * 
     * For example "Available by appointment from the Reading Room" or
     * "Accessible only from logged-in accounts ".
     *
     * @param string|string[] $conditionsOfAccess
     *
     * @return static
     *
     * @see schema:conditionsOfAccess
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2173
     */
    public function conditionsOfAccess($conditionsOfAccess)
    {
        return $this->setProperty('conditionsOfAccess', $conditionsOfAccess);
    }

    /**
     * The location depicted or described in the content. For example, the
     * location in a photograph or painting.
     *
     * @param \Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $contentLocation
     *
     * @return static
     *
     * @see schema:contentLocation
     */
    public function contentLocation($contentLocation)
    {
        return $this->setProperty('contentLocation', $contentLocation);
    }

    /**
     * Official rating of a piece of content&#x2014;for example,'MPAA PG-13'.
     *
     * @param \Spatie\SchemaOrg\Contracts\RatingContract|\Spatie\SchemaOrg\Contracts\RatingContract[]|string|string[] $contentRating
     *
     * @return static
     *
     * @see schema:contentRating
     */
    public function contentRating($contentRating)
    {
        return $this->setProperty('contentRating', $contentRating);
    }

    /**
     * The specific time described by a creative work, for works (e.g. articles,
     * video objects etc.) that emphasise a particular moment within an Event.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $contentReferenceTime
     *
     * @return static
     *
     * @see schema:contentReferenceTime
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1050
     */
    public function contentReferenceTime($contentReferenceTime)
    {
        return $this->setProperty('contentReferenceTime', $contentReferenceTime);
    }

    /**
     * A secondary contributor to the CreativeWork or Event.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $contributor
     *
     * @return static
     *
     * @see schema:contributor
     */
    public function contributor($contributor)
    {
        return $this->setProperty('contributor', $contributor);
    }

    /**
     * The party holding the legal copyright to the CreativeWork.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $copyrightHolder
     *
     * @return static
     *
     * @see schema:copyrightHolder
     */
    public function copyrightHolder($copyrightHolder)
    {
        return $this->setProperty('copyrightHolder', $copyrightHolder);
    }

    /**
     * Text of a notice appropriate for describing the copyright aspects of this
     * Creative Work, ideally indicating the owner of the copyright for the
     * Work.
     *
     * @param string|string[] $copyrightNotice
     *
     * @return static
     *
     * @see schema:copyrightNotice
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2659
     */
    public function copyrightNotice($copyrightNotice)
    {
        return $this->setProperty('copyrightNotice', $copyrightNotice);
    }

    /**
     * The year during which the claimed copyright for the CreativeWork was
     * first asserted.
     *
     * @param float|float[]|int|int[] $copyrightYear
     *
     * @return static
     *
     * @see schema:copyrightYear
     */
    public function copyrightYear($copyrightYear)
    {
        return $this->setProperty('copyrightYear', $copyrightYear);
    }

    /**
     * Indicates a correction to a [[CreativeWork]], either via a
     * [[CorrectionComment]], textually or in another document.
     *
     * @param \Spatie\SchemaOrg\Contracts\CorrectionCommentContract|\Spatie\SchemaOrg\Contracts\CorrectionCommentContract[]|string|string[] $correction
     *
     * @return static
     *
     * @see schema:correction
     * @see https://pending.schema.org
     */
    public function correction($correction)
    {
        return $this->setProperty('correction', $correction);
    }

    /**
     * The status of a creative work in terms of its stage in a lifecycle.
     * Example terms include Incomplete, Draft, Published, Obsolete. Some
     * organizations define a set of terms for the stages of their publication
     * lifecycle.
     *
     * @param \Spatie\SchemaOrg\Contracts\DefinedTermContract|\Spatie\SchemaOrg\Contracts\DefinedTermContract[]|string|string[] $creativeWorkStatus
     *
     * @return static
     *
     * @see schema:creativeWorkStatus
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/987
     */
    public function creativeWorkStatus($creativeWorkStatus)
    {
        return $this->setProperty('creativeWorkStatus', $creativeWorkStatus);
    }

    /**
     * The creator/author of this CreativeWork. This is the same as the Author
     * property for CreativeWork.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $creator
     *
     * @return static
     *
     * @see schema:creator
     */
    public function creator($creator)
    {
        return $this->setProperty('creator', $creator);
    }

    /**
     * Text that can be used to credit person(s) and/or organization(s)
     * associated with a published Creative Work.
     *
     * @param string|string[] $creditText
     *
     * @return static
     *
     * @see schema:creditText
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2659
     */
    public function creditText($creditText)
    {
        return $this->setProperty('creditText', $creditText);
    }

    /**
     * The date on which the CreativeWork was created or the item was added to a
     * DataFeed.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $dateCreated
     *
     * @return static
     *
     * @see schema:dateCreated
     */
    public function dateCreated($dateCreated)
    {
        return $this->setProperty('dateCreated', $dateCreated);
    }

    /**
     * The date on which the CreativeWork was most recently modified or when the
     * item's entry was modified within a DataFeed.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $dateModified
     *
     * @return static
     *
     * @see schema:dateModified
     */
    public function dateModified($dateModified)
    {
        return $this->setProperty('dateModified', $dateModified);
    }

    /**
     * Date of first broadcast/publication.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $datePublished
     *
     * @return static
     *
     * @see schema:datePublished
     */
    public function datePublished($datePublished)
    {
        return $this->setProperty('datePublished', $datePublished);
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
     * A link to the page containing the comments of the CreativeWork.
     *
     * @param string|string[] $discussionUrl
     *
     * @return static
     *
     * @see schema:discussionUrl
     */
    public function discussionUrl($discussionUrl)
    {
        return $this->setProperty('discussionUrl', $discussionUrl);
    }

    /**
     * An [EIDR](https://eidr.org/) (Entertainment Identifier Registry)
     * [[identifier]] representing a specific edit / edition for a work of film
     * or television.
     * 
     * For example, the motion picture known as "Ghostbusters" whose
     * [[titleEIDR]] is "10.5240/7EC7-228A-510A-053E-CBB8-J", has several edits
     * e.g. "10.5240/1F2A-E1C5-680A-14C6-E76B-I" and
     * "10.5240/8A35-3BEE-6497-5D12-9E4F-3".
     * 
     * Since schema.org types like [[Movie]] and [[TVEpisode]] can be used for
     * both works and their multiple expressions, it is possible to use
     * [[titleEIDR]] alone (for a general description), or alongside
     * [[editEIDR]] for a more edit-specific description.
     *
     * @param string|string[] $editEIDR
     *
     * @return static
     *
     * @see schema:editEIDR
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2469
     */
    public function editEIDR($editEIDR)
    {
        return $this->setProperty('editEIDR', $editEIDR);
    }

    /**
     * Specifies the Person who edited the CreativeWork.
     *
     * @param \Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $editor
     *
     * @return static
     *
     * @see schema:editor
     */
    public function editor($editor)
    {
        return $this->setProperty('editor', $editor);
    }

    /**
     * An alignment to an established educational framework.
     * 
     * This property should not be used where the nature of the alignment can be
     * described using a simple property, for example to express that a resource
     * [[teaches]] or [[assesses]] a competency.
     *
     * @param \Spatie\SchemaOrg\Contracts\AlignmentObjectContract|\Spatie\SchemaOrg\Contracts\AlignmentObjectContract[] $educationalAlignment
     *
     * @return static
     *
     * @see schema:educationalAlignment
     */
    public function educationalAlignment($educationalAlignment)
    {
        return $this->setProperty('educationalAlignment', $educationalAlignment);
    }

    /**
     * The level in terms of progression through an educational or training
     * context. Examples of educational levels include 'beginner',
     * 'intermediate' or 'advanced', and formal sets of level indicators.
     *
     * @param \Spatie\SchemaOrg\Contracts\DefinedTermContract|\Spatie\SchemaOrg\Contracts\DefinedTermContract[]|string|string[] $educationalLevel
     *
     * @return static
     *
     * @see schema:educationalLevel
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1779
     */
    public function educationalLevel($educationalLevel)
    {
        return $this->setProperty('educationalLevel', $educationalLevel);
    }

    /**
     * The purpose of a work in the context of education; for example,
     * 'assignment', 'group work'.
     *
     * @param \Spatie\SchemaOrg\Contracts\DefinedTermContract|\Spatie\SchemaOrg\Contracts\DefinedTermContract[]|string|string[] $educationalUse
     *
     * @return static
     *
     * @see schema:educationalUse
     */
    public function educationalUse($educationalUse)
    {
        return $this->setProperty('educationalUse', $educationalUse);
    }

    /**
     * A media object that encodes this CreativeWork. This property is a synonym
     * for associatedMedia.
     *
     * @param \Spatie\SchemaOrg\Contracts\MediaObjectContract|\Spatie\SchemaOrg\Contracts\MediaObjectContract[] $encoding
     *
     * @return static
     *
     * @see schema:encoding
     */
    public function encoding($encoding)
    {
        return $this->setProperty('encoding', $encoding);
    }

    /**
     * Media type typically expressed using a MIME format (see [IANA
     * site](http://www.iana.org/assignments/media-types/media-types.xhtml) and
     * [MDN
     * reference](https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types))
     * e.g. application/zip for a SoftwareApplication binary, audio/mpeg for
     * .mp3 etc.).
     * 
     * In cases where a [[CreativeWork]] has several media type representations,
     * [[encoding]] can be used to indicate each [[MediaObject]] alongside
     * particular [[encodingFormat]] information.
     * 
     * Unregistered or niche encoding and file formats can be indicated instead
     * via the most appropriate URL, e.g. defining Web page or a
     * Wikipedia/Wikidata entry.
     *
     * @param string|string[] $encodingFormat
     *
     * @return static
     *
     * @see schema:encodingFormat
     */
    public function encodingFormat($encodingFormat)
    {
        return $this->setProperty('encodingFormat', $encodingFormat);
    }

    /**
     * A media object that encodes this CreativeWork.
     *
     * @param \Spatie\SchemaOrg\Contracts\MediaObjectContract|\Spatie\SchemaOrg\Contracts\MediaObjectContract[] $encodings
     *
     * @return static
     *
     * @see schema:encodings
     */
    public function encodings($encodings)
    {
        return $this->setProperty('encodings', $encodings);
    }

    /**
     * A creative work that this work is an
     * example/instance/realization/derivation of.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[] $exampleOfWork
     *
     * @return static
     *
     * @see schema:exampleOfWork
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_bibex
     */
    public function exampleOfWork($exampleOfWork)
    {
        return $this->setProperty('exampleOfWork', $exampleOfWork);
    }

    /**
     * Date the content expires and is no longer useful or available. For
     * example a [[VideoObject]] or [[NewsArticle]] whose availability or
     * relevance is time-limited, or a [[ClaimReview]] fact check whose
     * publisher wants to indicate that it may no longer be relevant (or helpful
     * to highlight) after some date.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $expires
     *
     * @return static
     *
     * @see schema:expires
     */
    public function expires($expires)
    {
        return $this->setProperty('expires', $expires);
    }

    /**
     * Media type, typically MIME format (see [IANA
     * site](http://www.iana.org/assignments/media-types/media-types.xhtml)) of
     * the content e.g. application/zip of a SoftwareApplication binary. In
     * cases where a CreativeWork has several media type representations,
     * 'encoding' can be used to indicate each MediaObject alongside particular
     * fileFormat information. Unregistered or niche file formats can be
     * indicated instead via the most appropriate URL, e.g. defining Web page or
     * a Wikipedia entry.
     *
     * @param string|string[] $fileFormat
     *
     * @return static
     *
     * @see schema:fileFormat
     */
    public function fileFormat($fileFormat)
    {
        return $this->setProperty('fileFormat', $fileFormat);
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
     * Genre of the creative work, broadcast channel or group.
     *
     * @param string|string[] $genre
     *
     * @return static
     *
     * @see schema:genre
     */
    public function genre($genre)
    {
        return $this->setProperty('genre', $genre);
    }

    /**
     * Indicates an item or CreativeWork that is part of this item, or
     * CreativeWork (in some sense).
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[] $hasPart
     *
     * @return static
     *
     * @see schema:hasPart
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_bibex
     */
    public function hasPart($hasPart)
    {
        return $this->setProperty('hasPart', $hasPart);
    }

    /**
     * Headline of the article.
     *
     * @param string|string[] $headline
     *
     * @return static
     *
     * @see schema:headline
     */
    public function headline($headline)
    {
        return $this->setProperty('headline', $headline);
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
     * The language of the content or performance or used in an action. Please
     * use one of the language codes from the [IETF BCP 47
     * standard](http://tools.ietf.org/html/bcp47). See also
     * [[availableLanguage]].
     *
     * @param \Spatie\SchemaOrg\Contracts\LanguageContract|\Spatie\SchemaOrg\Contracts\LanguageContract[]|string|string[] $inLanguage
     *
     * @return static
     *
     * @see schema:inLanguage
     * @link https://github.com/schemaorg/schemaorg/issues/2382
     */
    public function inLanguage($inLanguage)
    {
        return $this->setProperty('inLanguage', $inLanguage);
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
     * The predominant mode of learning supported by the learning resource.
     * Acceptable values are 'active', 'expositive', or 'mixed'.
     *
     * @param string|string[] $interactivityType
     *
     * @return static
     *
     * @see schema:interactivityType
     */
    public function interactivityType($interactivityType)
    {
        return $this->setProperty('interactivityType', $interactivityType);
    }

    /**
     * A flag to signal that the item, event, or place is accessible for free.
     *
     * @param bool|bool[] $isAccessibleForFree
     *
     * @return static
     *
     * @see schema:isAccessibleForFree
     */
    public function isAccessibleForFree($isAccessibleForFree)
    {
        return $this->setProperty('isAccessibleForFree', $isAccessibleForFree);
    }

    /**
     * A resource from which this work is derived or from which it is a
     * modification or adaption.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|\Spatie\SchemaOrg\Contracts\ProductContract|\Spatie\SchemaOrg\Contracts\ProductContract[]|string|string[] $isBasedOn
     *
     * @return static
     *
     * @see schema:isBasedOn
     */
    public function isBasedOn($isBasedOn)
    {
        return $this->setProperty('isBasedOn', $isBasedOn);
    }

    /**
     * A resource that was used in the creation of this resource. This term can
     * be repeated for multiple sources. For example,
     * http://example.com/great-multiplication-intro.html.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|\Spatie\SchemaOrg\Contracts\ProductContract|\Spatie\SchemaOrg\Contracts\ProductContract[]|string|string[] $isBasedOnUrl
     *
     * @return static
     *
     * @see schema:isBasedOnUrl
     */
    public function isBasedOnUrl($isBasedOnUrl)
    {
        return $this->setProperty('isBasedOnUrl', $isBasedOnUrl);
    }

    /**
     * Indicates whether this content is family friendly.
     *
     * @param bool|bool[] $isFamilyFriendly
     *
     * @return static
     *
     * @see schema:isFamilyFriendly
     */
    public function isFamilyFriendly($isFamilyFriendly)
    {
        return $this->setProperty('isFamilyFriendly', $isFamilyFriendly);
    }

    /**
     * Indicates an item or CreativeWork that this item, or CreativeWork (in
     * some sense), is part of.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|string|string[] $isPartOf
     *
     * @return static
     *
     * @see schema:isPartOf
     */
    public function isPartOf($isPartOf)
    {
        return $this->setProperty('isPartOf', $isPartOf);
    }

    /**
     * Indicates a legal jurisdiction, e.g. of some legislation, or where some
     * government service is based.
     *
     * @param \Spatie\SchemaOrg\Contracts\AdministrativeAreaContract|\Spatie\SchemaOrg\Contracts\AdministrativeAreaContract[]|string|string[] $jurisdiction
     *
     * @return static
     *
     * @see schema:jurisdiction
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2534
     */
    public function jurisdiction($jurisdiction)
    {
        return $this->setProperty('jurisdiction', $jurisdiction);
    }

    /**
     * Keywords or tags used to describe this content. Multiple entries in a
     * keywords list are typically delimited by commas.
     *
     * @param \Spatie\SchemaOrg\Contracts\DefinedTermContract|\Spatie\SchemaOrg\Contracts\DefinedTermContract[]|string|string[] $keywords
     *
     * @return static
     *
     * @see schema:keywords
     */
    public function keywords($keywords)
    {
        return $this->setProperty('keywords', $keywords);
    }

    /**
     * The predominant type or kind characterizing the learning resource. For
     * example, 'presentation', 'handout'.
     *
     * @param \Spatie\SchemaOrg\Contracts\DefinedTermContract|\Spatie\SchemaOrg\Contracts\DefinedTermContract[]|string|string[] $learningResourceType
     *
     * @return static
     *
     * @see schema:learningResourceType
     */
    public function learningResourceType($learningResourceType)
    {
        return $this->setProperty('learningResourceType', $learningResourceType);
    }

    /**
     * Indicates that this legislation (or part of a legislation) somehow
     * transfers another legislation in a different legislative context. This is
     * an informative link, and it has no legal value. For legally-binding links
     * of transposition, use the [legislationTransposes](/legislationTransposes)
     * property. For example an informative consolidated law of a European
     * Union's member state "applies" the consolidated version of the European
     * Directive implemented in it.
     *
     * @param \Spatie\SchemaOrg\Contracts\LegislationContract|\Spatie\SchemaOrg\Contracts\LegislationContract[] $legislationApplies
     *
     * @return static
     *
     * @see schema:legislationApplies
     * @see https://pending.schema.org
     */
    public function legislationApplies($legislationApplies)
    {
        return $this->setProperty('legislationApplies', $legislationApplies);
    }

    /**
     * Another legislation that this legislation changes. This encompasses the
     * notions of amendment, replacement, correction, repeal, or other types of
     * change. This may be a direct change (textual or non-textual amendment) or
     * a consequential or indirect change. The property is to be used to express
     * the existence of a change relationship between two acts rather than the
     * existence of a consolidated version of the text that shows the result of
     * the change. For consolidation relationships, use the
     * [legislationConsolidates](/legislationConsolidates) property.
     *
     * @param \Spatie\SchemaOrg\Contracts\LegislationContract|\Spatie\SchemaOrg\Contracts\LegislationContract[] $legislationChanges
     *
     * @return static
     *
     * @see schema:legislationChanges
     * @see https://pending.schema.org
     */
    public function legislationChanges($legislationChanges)
    {
        return $this->setProperty('legislationChanges', $legislationChanges);
    }

    /**
     * Indicates another legislation taken into account in this consolidated
     * legislation (which is usually the product of an editorial process that
     * revises the legislation). This property should be used multiple times to
     * refer to both the original version or the previous consolidated version,
     * and to the legislations making the change.
     *
     * @param \Spatie\SchemaOrg\Contracts\LegislationContract|\Spatie\SchemaOrg\Contracts\LegislationContract[] $legislationConsolidates
     *
     * @return static
     *
     * @see schema:legislationConsolidates
     * @see https://pending.schema.org
     */
    public function legislationConsolidates($legislationConsolidates)
    {
        return $this->setProperty('legislationConsolidates', $legislationConsolidates);
    }

    /**
     * The date of adoption or signature of the legislation. This is the date at
     * which the text is officially aknowledged to be a legislation, even though
     * it might not even be published or in force.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $legislationDate
     *
     * @return static
     *
     * @see schema:legislationDate
     * @see https://pending.schema.org
     */
    public function legislationDate($legislationDate)
    {
        return $this->setProperty('legislationDate', $legislationDate);
    }

    /**
     * The point-in-time at which the provided description of the legislation is
     * valid (e.g. : when looking at the law on the 2016-04-07 (= dateVersion),
     * I get the consolidation of 2015-04-12 of the "National Insurance
     * Contributions Act 2015")
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $legislationDateVersion
     *
     * @return static
     *
     * @see schema:legislationDateVersion
     * @see https://pending.schema.org
     */
    public function legislationDateVersion($legislationDateVersion)
    {
        return $this->setProperty('legislationDateVersion', $legislationDateVersion);
    }

    /**
     * An identifier for the legislation. This can be either a string-based
     * identifier, like the CELEX at EU level or the NOR in France, or a
     * web-based, URL/URI identifier, like an ELI (European Legislation
     * Identifier) or an URN-Lex.
     *
     * @param string|string[] $legislationIdentifier
     *
     * @return static
     *
     * @see schema:legislationIdentifier
     * @see https://pending.schema.org
     */
    public function legislationIdentifier($legislationIdentifier)
    {
        return $this->setProperty('legislationIdentifier', $legislationIdentifier);
    }

    /**
     * The jurisdiction from which the legislation originates.
     *
     * @param \Spatie\SchemaOrg\Contracts\AdministrativeAreaContract|\Spatie\SchemaOrg\Contracts\AdministrativeAreaContract[]|string|string[] $legislationJurisdiction
     *
     * @return static
     *
     * @see schema:legislationJurisdiction
     * @see https://pending.schema.org
     */
    public function legislationJurisdiction($legislationJurisdiction)
    {
        return $this->setProperty('legislationJurisdiction', $legislationJurisdiction);
    }

    /**
     * Whether the legislation is currently in force, not in force, or partially
     * in force.
     *
     * @param \Spatie\SchemaOrg\Contracts\LegalForceStatusContract|\Spatie\SchemaOrg\Contracts\LegalForceStatusContract[] $legislationLegalForce
     *
     * @return static
     *
     * @see schema:legislationLegalForce
     * @see https://pending.schema.org
     */
    public function legislationLegalForce($legislationLegalForce)
    {
        return $this->setProperty('legislationLegalForce', $legislationLegalForce);
    }

    /**
     * The person or organization that originally passed or made the law :
     * typically parliament (for primary legislation) or government (for
     * secondary legislation). This indicates the "legal author" of the law, as
     * opposed to its physical author.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $legislationPassedBy
     *
     * @return static
     *
     * @see schema:legislationPassedBy
     * @see https://pending.schema.org
     */
    public function legislationPassedBy($legislationPassedBy)
    {
        return $this->setProperty('legislationPassedBy', $legislationPassedBy);
    }

    /**
     * An individual or organization that has some kind of responsibility for
     * the legislation. Typically the ministry who is/was in charge of
     * elaborating the legislation, or the adressee for potential questions
     * about the legislation once it is published.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $legislationResponsible
     *
     * @return static
     *
     * @see schema:legislationResponsible
     * @see https://pending.schema.org
     */
    public function legislationResponsible($legislationResponsible)
    {
        return $this->setProperty('legislationResponsible', $legislationResponsible);
    }

    /**
     * Indicates that this legislation (or part of legislation) fulfills the
     * objectives set by another legislation, by passing appropriate
     * implementation measures. Typically, some legislations of European Union's
     * member states or regions transpose European Directives. This indicates a
     * legally binding link between the 2 legislations.
     *
     * @param \Spatie\SchemaOrg\Contracts\LegislationContract|\Spatie\SchemaOrg\Contracts\LegislationContract[] $legislationTransposes
     *
     * @return static
     *
     * @see schema:legislationTransposes
     * @see https://pending.schema.org
     */
    public function legislationTransposes($legislationTransposes)
    {
        return $this->setProperty('legislationTransposes', $legislationTransposes);
    }

    /**
     * The type of the legislation. Examples of values are "law", "act",
     * "directive", "decree", "regulation", "statutory instrument", "loi
     * organique", "règlement grand-ducal", etc., depending on the country.
     *
     * @param \Spatie\SchemaOrg\Contracts\CategoryCodeContract|\Spatie\SchemaOrg\Contracts\CategoryCodeContract[]|string|string[] $legislationType
     *
     * @return static
     *
     * @see schema:legislationType
     * @see https://pending.schema.org
     */
    public function legislationType($legislationType)
    {
        return $this->setProperty('legislationType', $legislationType);
    }

    /**
     * A license document that applies to this content, typically indicated by
     * URL.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|string|string[] $license
     *
     * @return static
     *
     * @see schema:license
     */
    public function license($license)
    {
        return $this->setProperty('license', $license);
    }

    /**
     * The location where the CreativeWork was created, which may not be the
     * same as the location depicted in the CreativeWork.
     *
     * @param \Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $locationCreated
     *
     * @return static
     *
     * @see schema:locationCreated
     */
    public function locationCreated($locationCreated)
    {
        return $this->setProperty('locationCreated', $locationCreated);
    }

    /**
     * Indicates the primary entity described in some page or other
     * CreativeWork.
     *
     * @param \Spatie\SchemaOrg\Contracts\ThingContract|\Spatie\SchemaOrg\Contracts\ThingContract[] $mainEntity
     *
     * @return static
     *
     * @see schema:mainEntity
     */
    public function mainEntity($mainEntity)
    {
        return $this->setProperty('mainEntity', $mainEntity);
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
     * A maintainer of a [[Dataset]], software package
     * ([[SoftwareApplication]]), or other [[Project]]. A maintainer is a
     * [[Person]] or [[Organization]] that manages contributions to, and/or
     * publication of, some (typically complex) artifact. It is common for
     * distributions of software and data to be based on "upstream" sources.
     * When [[maintainer]] is applied to a specific version of something e.g. a
     * particular version or packaging of a [[Dataset]], it is always  possible
     * that the upstream source has a different maintainer. The [[isBasedOn]]
     * property can be used to indicate such relationships between datasets to
     * make the different maintenance roles clear. Similarly in the case of
     * software, a package may have dedicated maintainers working on integration
     * into software distributions such as Ubuntu, as well as upstream
     * maintainers of the underlying work.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $maintainer
     *
     * @return static
     *
     * @see schema:maintainer
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2311
     */
    public function maintainer($maintainer)
    {
        return $this->setProperty('maintainer', $maintainer);
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
     * The quantity of the materials being described or an expression of the
     * physical space they occupy.
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[]|string|string[] $materialExtent
     *
     * @return static
     *
     * @see schema:materialExtent
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1759
     */
    public function materialExtent($materialExtent)
    {
        return $this->setProperty('materialExtent', $materialExtent);
    }

    /**
     * Indicates that the CreativeWork contains a reference to, but is not
     * necessarily about a concept.
     *
     * @param \Spatie\SchemaOrg\Contracts\ThingContract|\Spatie\SchemaOrg\Contracts\ThingContract[] $mentions
     *
     * @return static
     *
     * @see schema:mentions
     */
    public function mentions($mentions)
    {
        return $this->setProperty('mentions', $mentions);
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
     * The position of an item in a series or sequence of items.
     *
     * @param int|int[]|string|string[] $position
     *
     * @return static
     *
     * @see schema:position
     */
    public function position($position)
    {
        return $this->setProperty('position', $position);
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
     * The person or organization who produced the work (e.g. music album,
     * movie, tv/radio series etc.).
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $producer
     *
     * @return static
     *
     * @see schema:producer
     */
    public function producer($producer)
    {
        return $this->setProperty('producer', $producer);
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
     * A publication event associated with the item.
     *
     * @param \Spatie\SchemaOrg\Contracts\PublicationEventContract|\Spatie\SchemaOrg\Contracts\PublicationEventContract[] $publication
     *
     * @return static
     *
     * @see schema:publication
     */
    public function publication($publication)
    {
        return $this->setProperty('publication', $publication);
    }

    /**
     * The publisher of the creative work.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $publisher
     *
     * @return static
     *
     * @see schema:publisher
     */
    public function publisher($publisher)
    {
        return $this->setProperty('publisher', $publisher);
    }

    /**
     * The publishing division which published the comic.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[] $publisherImprint
     *
     * @return static
     *
     * @see schema:publisherImprint
     * @see https://bib.schema.org
     */
    public function publisherImprint($publisherImprint)
    {
        return $this->setProperty('publisherImprint', $publisherImprint);
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
     * The Event where the CreativeWork was recorded. The CreativeWork may
     * capture all or part of the event.
     *
     * @param \Spatie\SchemaOrg\Contracts\EventContract|\Spatie\SchemaOrg\Contracts\EventContract[] $recordedAt
     *
     * @return static
     *
     * @see schema:recordedAt
     */
    public function recordedAt($recordedAt)
    {
        return $this->setProperty('recordedAt', $recordedAt);
    }

    /**
     * The place and time the release was issued, expressed as a
     * PublicationEvent.
     *
     * @param \Spatie\SchemaOrg\Contracts\PublicationEventContract|\Spatie\SchemaOrg\Contracts\PublicationEventContract[] $releasedEvent
     *
     * @return static
     *
     * @see schema:releasedEvent
     */
    public function releasedEvent($releasedEvent)
    {
        return $this->setProperty('releasedEvent', $releasedEvent);
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
     * Indicates (by URL or string) a particular version of a schema used in
     * some CreativeWork. This property was created primarily to
     *     indicate the use of a specific schema.org release, e.g. ```10.0``` as
     * a simple string, or more explicitly via URL,
     * ```https://schema.org/docs/releases.html#v10.0```. There may be
     * situations in which other schemas might usefully be referenced this way,
     * e.g.
     * ```http://dublincore.org/specifications/dublin-core/dces/1999-07-02/```
     * but this has not been carefully explored in the community.
     *
     * @param string|string[] $schemaVersion
     *
     * @return static
     *
     * @see schema:schemaVersion
     */
    public function schemaVersion($schemaVersion)
    {
        return $this->setProperty('schemaVersion', $schemaVersion);
    }

    /**
     * Indicates the date on which the current structured data was generated /
     * published. Typically used alongside [[sdPublisher]]
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $sdDatePublished
     *
     * @return static
     *
     * @see schema:sdDatePublished
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1886
     */
    public function sdDatePublished($sdDatePublished)
    {
        return $this->setProperty('sdDatePublished', $sdDatePublished);
    }

    /**
     * A license document that applies to this structured data, typically
     * indicated by URL.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|string|string[] $sdLicense
     *
     * @return static
     *
     * @see schema:sdLicense
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1886
     */
    public function sdLicense($sdLicense)
    {
        return $this->setProperty('sdLicense', $sdLicense);
    }

    /**
     * Indicates the party responsible for generating and publishing the current
     * structured data markup, typically in cases where the structured data is
     * derived automatically from existing published content but published on a
     * different site. For example, student projects and open data initiatives
     * often re-publish existing content with more explicitly structured
     * metadata. The
     * [[sdPublisher]] property helps make such practices more explicit.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $sdPublisher
     *
     * @return static
     *
     * @see schema:sdPublisher
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1886
     */
    public function sdPublisher($sdPublisher)
    {
        return $this->setProperty('sdPublisher', $sdPublisher);
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
     * The Organization on whose behalf the creator was working.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[] $sourceOrganization
     *
     * @return static
     *
     * @see schema:sourceOrganization
     */
    public function sourceOrganization($sourceOrganization)
    {
        return $this->setProperty('sourceOrganization', $sourceOrganization);
    }

    /**
     * The "spatial" property can be used in cases when more specific properties
     * (e.g. [[locationCreated]], [[spatialCoverage]], [[contentLocation]]) are
     * not known to be appropriate.
     *
     * @param \Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $spatial
     *
     * @return static
     *
     * @see schema:spatial
     */
    public function spatial($spatial)
    {
        return $this->setProperty('spatial', $spatial);
    }

    /**
     * The spatialCoverage of a CreativeWork indicates the place(s) which are
     * the focus of the content. It is a subproperty of
     *       contentLocation intended primarily for more technical and detailed
     * materials. For example with a Dataset, it indicates
     *       areas that the dataset describes: a dataset of New York weather
     * would have spatialCoverage which was the place: the state of New York.
     *
     * @param \Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $spatialCoverage
     *
     * @return static
     *
     * @see schema:spatialCoverage
     */
    public function spatialCoverage($spatialCoverage)
    {
        return $this->setProperty('spatialCoverage', $spatialCoverage);
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
     * The item being described is intended to help a person learn the
     * competency or learning outcome defined by the referenced term.
     *
     * @param \Spatie\SchemaOrg\Contracts\DefinedTermContract|\Spatie\SchemaOrg\Contracts\DefinedTermContract[]|string|string[] $teaches
     *
     * @return static
     *
     * @see schema:teaches
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2427
     */
    public function teaches($teaches)
    {
        return $this->setProperty('teaches', $teaches);
    }

    /**
     * The "temporal" property can be used in cases where more specific
     * properties
     * (e.g. [[temporalCoverage]], [[dateCreated]], [[dateModified]],
     * [[datePublished]]) are not known to be appropriate.
     *
     * @param \DateTimeInterface|\DateTimeInterface[]|string|string[] $temporal
     *
     * @return static
     *
     * @see schema:temporal
     */
    public function temporal($temporal)
    {
        return $this->setProperty('temporal', $temporal);
    }

    /**
     * The temporalCoverage of a CreativeWork indicates the period that the
     * content applies to, i.e. that it describes, either as a DateTime or as a
     * textual string indicating a time period in [ISO 8601 time interval
     * format](https://en.wikipedia.org/wiki/ISO_8601#Time_intervals). In
     *       the case of a Dataset it will typically indicate the relevant time
     * period in a precise notation (e.g. for a 2011 census dataset, the year
     * 2011 would be written "2011/2012"). Other forms of content e.g.
     * ScholarlyArticle, Book, TVSeries or TVEpisode may indicate their
     * temporalCoverage in broader terms - textually or via well-known URL.
     *       Written works such as books may sometimes have precise temporal
     * coverage too, e.g. a work set in 1939 - 1945 can be indicated in ISO 8601
     * interval format format via "1939/1945".
     * 
     * Open-ended date ranges can be written with ".." in place of the end date.
     * For example, "2015-11/.." indicates a range beginning in November 2015
     * and with no specified final date. This is tentative and might be updated
     * in future when ISO 8601 is officially updated.
     *
     * @param \DateTimeInterface|\DateTimeInterface[]|string|string[] $temporalCoverage
     *
     * @return static
     *
     * @see schema:temporalCoverage
     */
    public function temporalCoverage($temporalCoverage)
    {
        return $this->setProperty('temporalCoverage', $temporalCoverage);
    }

    /**
     * The textual content of this CreativeWork.
     *
     * @param string|string[] $text
     *
     * @return static
     *
     * @see schema:text
     */
    public function text($text)
    {
        return $this->setProperty('text', $text);
    }

    /**
     * A thumbnail image relevant to the Thing.
     *
     * @param string|string[] $thumbnailUrl
     *
     * @return static
     *
     * @see schema:thumbnailUrl
     */
    public function thumbnailUrl($thumbnailUrl)
    {
        return $this->setProperty('thumbnailUrl', $thumbnailUrl);
    }

    /**
     * Approximate or typical time it takes to work with or through this
     * learning resource for the typical intended target audience, e.g. 'PT30M',
     * 'PT1H25M'.
     *
     * @param \Spatie\SchemaOrg\Contracts\DurationContract|\Spatie\SchemaOrg\Contracts\DurationContract[] $timeRequired
     *
     * @return static
     *
     * @see schema:timeRequired
     */
    public function timeRequired($timeRequired)
    {
        return $this->setProperty('timeRequired', $timeRequired);
    }

    /**
     * The work that this work has been translated from. e.g. 物种起源 is a
     * translationOf “On the Origin of Species”
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[] $translationOfWork
     *
     * @return static
     *
     * @see schema:translationOfWork
     * @see https://bib.schema.org
     */
    public function translationOfWork($translationOfWork)
    {
        return $this->setProperty('translationOfWork', $translationOfWork);
    }

    /**
     * Organization or person who adapts a creative work to different languages,
     * regional differences and technical requirements of a target market, or
     * that translates during some event.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $translator
     *
     * @return static
     *
     * @see schema:translator
     */
    public function translator($translator)
    {
        return $this->setProperty('translator', $translator);
    }

    /**
     * The typical expected age range, e.g. '7-9', '11-'.
     *
     * @param string|string[] $typicalAgeRange
     *
     * @return static
     *
     * @see schema:typicalAgeRange
     */
    public function typicalAgeRange($typicalAgeRange)
    {
        return $this->setProperty('typicalAgeRange', $typicalAgeRange);
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
     * The schema.org [[usageInfo]] property indicates further information about
     * a [[CreativeWork]]. This property is applicable both to works that are
     * freely available and to those that require payment or other transactions.
     * It can reference additional information e.g. community expectations on
     * preferred linking and citation conventions, as well as purchasing
     * details. For something that can be commercially licensed, usageInfo can
     * provide detailed, resource-specific information about licensing options.
     * 
     * This property can be used alongside the license property which indicates
     * license(s) applicable to some piece of content. The usageInfo property
     * can provide information about other licensing options, e.g. acquiring
     * commercial usage rights for an image that is also available under
     * non-commercial creative commons licenses.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|string|string[] $usageInfo
     *
     * @return static
     *
     * @see schema:usageInfo
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2454
     */
    public function usageInfo($usageInfo)
    {
        return $this->setProperty('usageInfo', $usageInfo);
    }

    /**
     * The version of the CreativeWork embodied by a specified resource.
     *
     * @param float|float[]|int|int[]|string|string[] $version
     *
     * @return static
     *
     * @see schema:version
     */
    public function version($version)
    {
        return $this->setProperty('version', $version);
    }

    /**
     * An embedded video object.
     *
     * @param \Spatie\SchemaOrg\Contracts\ClipContract|\Spatie\SchemaOrg\Contracts\ClipContract[]|\Spatie\SchemaOrg\Contracts\VideoObjectContract|\Spatie\SchemaOrg\Contracts\VideoObjectContract[] $video
     *
     * @return static
     *
     * @see schema:video
     */
    public function video($video)
    {
        return $this->setProperty('video', $video);
    }

    /**
     * Example/instance/realization/derivation of the concept of this creative
     * work. eg. The paperback edition, first edition, or eBook.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[] $workExample
     *
     * @return static
     *
     * @see schema:workExample
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_bibex
     */
    public function workExample($workExample)
    {
        return $this->setProperty('workExample', $workExample);
    }

    /**
     * A work that is a translation of the content of this work. e.g. 西遊記
     * has an English workTranslation “Journey to the West”,a German
     * workTranslation “Monkeys Pilgerfahrt” and a Vietnamese  translation
     * Tây du ký bình khảo.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[] $workTranslation
     *
     * @return static
     *
     * @see schema:workTranslation
     * @see https://bib.schema.org
     */
    public function workTranslation($workTranslation)
    {
        return $this->setProperty('workTranslation', $workTranslation);
    }

}
