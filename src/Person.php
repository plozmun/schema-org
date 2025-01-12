<?php

namespace Spatie\SchemaOrg;

use \Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * A person (alive, dead, undead, or fictional).
 *
 * @see http://schema.org/Person
 *
 */
class Person extends BaseType implements ThingContract
{
    /**
     * An additional name for a Person, can be used for a middle name.
     *
     * @param string|string[] $additionalName
     *
     * @return static
     *
     * @see http://schema.org/additionalName
     */
    public function additionalName($additionalName)
    {
        return $this->setProperty('additionalName', $additionalName);
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
     * @see http://schema.org/additionalType
     */
    public function additionalType($additionalType)
    {
        return $this->setProperty('additionalType', $additionalType);
    }

    /**
     * Physical address of the item.
     *
     * @param PostalAddress|PostalAddress[]|string|string[] $address
     *
     * @return static
     *
     * @see http://schema.org/address
     */
    public function address($address)
    {
        return $this->setProperty('address', $address);
    }

    /**
     * An organization that this person is affiliated with. For example, a
     * school/university, a club, or a team.
     *
     * @param Organization|Organization[] $affiliation
     *
     * @return static
     *
     * @see http://schema.org/affiliation
     */
    public function affiliation($affiliation)
    {
        return $this->setProperty('affiliation', $affiliation);
    }

    /**
     * An alias for the item.
     *
     * @param string|string[] $alternateName
     *
     * @return static
     *
     * @see http://schema.org/alternateName
     */
    public function alternateName($alternateName)
    {
        return $this->setProperty('alternateName', $alternateName);
    }

    /**
     * An organization that the person is an alumni of.
     *
     * @param EducationalOrganization|EducationalOrganization[]|Organization|Organization[] $alumniOf
     *
     * @return static
     *
     * @see http://schema.org/alumniOf
     */
    public function alumniOf($alumniOf)
    {
        return $this->setProperty('alumniOf', $alumniOf);
    }

    /**
     * An award won by or for this item.
     *
     * @param string|string[] $award
     *
     * @return static
     *
     * @see http://schema.org/award
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
     * @see http://schema.org/awards
     */
    public function awards($awards)
    {
        return $this->setProperty('awards', $awards);
    }

    /**
     * Date of birth.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $birthDate
     *
     * @return static
     *
     * @see http://schema.org/birthDate
     */
    public function birthDate($birthDate)
    {
        return $this->setProperty('birthDate', $birthDate);
    }

    /**
     * The place where the person was born.
     *
     * @param Place|Place[] $birthPlace
     *
     * @return static
     *
     * @see http://schema.org/birthPlace
     */
    public function birthPlace($birthPlace)
    {
        return $this->setProperty('birthPlace', $birthPlace);
    }

    /**
     * The brand(s) associated with a product or service, or the brand(s)
     * maintained by an organization or business person.
     *
     * @param Brand|Brand[]|Organization|Organization[] $brand
     *
     * @return static
     *
     * @see http://schema.org/brand
     */
    public function brand($brand)
    {
        return $this->setProperty('brand', $brand);
    }

    /**
     * A child of the person.
     *
     * @param Person|Person[] $children
     *
     * @return static
     *
     * @see http://schema.org/children
     */
    public function children($children)
    {
        return $this->setProperty('children', $children);
    }

    /**
     * A colleague of the person.
     *
     * @param Person|Person[]|string|string[] $colleague
     *
     * @return static
     *
     * @see http://schema.org/colleague
     */
    public function colleague($colleague)
    {
        return $this->setProperty('colleague', $colleague);
    }

    /**
     * A colleague of the person.
     *
     * @param Person|Person[] $colleagues
     *
     * @return static
     *
     * @see http://schema.org/colleagues
     */
    public function colleagues($colleagues)
    {
        return $this->setProperty('colleagues', $colleagues);
    }

    /**
     * A contact point for a person or organization.
     *
     * @param ContactPoint|ContactPoint[] $contactPoint
     *
     * @return static
     *
     * @see http://schema.org/contactPoint
     */
    public function contactPoint($contactPoint)
    {
        return $this->setProperty('contactPoint', $contactPoint);
    }

    /**
     * A contact point for a person or organization.
     *
     * @param ContactPoint|ContactPoint[] $contactPoints
     *
     * @return static
     *
     * @see http://schema.org/contactPoints
     */
    public function contactPoints($contactPoints)
    {
        return $this->setProperty('contactPoints', $contactPoints);
    }

    /**
     * Date of death.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $deathDate
     *
     * @return static
     *
     * @see http://schema.org/deathDate
     */
    public function deathDate($deathDate)
    {
        return $this->setProperty('deathDate', $deathDate);
    }

    /**
     * The place where the person died.
     *
     * @param Place|Place[] $deathPlace
     *
     * @return static
     *
     * @see http://schema.org/deathPlace
     */
    public function deathPlace($deathPlace)
    {
        return $this->setProperty('deathPlace', $deathPlace);
    }

    /**
     * A description of the item.
     *
     * @param string|string[] $description
     *
     * @return static
     *
     * @see http://schema.org/description
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
     * @see http://schema.org/disambiguatingDescription
     */
    public function disambiguatingDescription($disambiguatingDescription)
    {
        return $this->setProperty('disambiguatingDescription', $disambiguatingDescription);
    }

    /**
     * The Dun & Bradstreet DUNS number for identifying an organization or
     * business person.
     *
     * @param string|string[] $duns
     *
     * @return static
     *
     * @see http://schema.org/duns
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
     * @see http://schema.org/email
     */
    public function email($email)
    {
        return $this->setProperty('email', $email);
    }

    /**
     * Family name. In the U.S., the last name of an Person. This can be used
     * along with givenName instead of the name property.
     *
     * @param string|string[] $familyName
     *
     * @return static
     *
     * @see http://schema.org/familyName
     */
    public function familyName($familyName)
    {
        return $this->setProperty('familyName', $familyName);
    }

    /**
     * The fax number.
     *
     * @param string|string[] $faxNumber
     *
     * @return static
     *
     * @see http://schema.org/faxNumber
     */
    public function faxNumber($faxNumber)
    {
        return $this->setProperty('faxNumber', $faxNumber);
    }

    /**
     * The most generic uni-directional social relation.
     *
     * @param Person|Person[] $follows
     *
     * @return static
     *
     * @see http://schema.org/follows
     */
    public function follows($follows)
    {
        return $this->setProperty('follows', $follows);
    }

    /**
     * A person or organization that supports (sponsors) something through some
     * kind of financial contribution.
     *
     * @param Organization|Organization[]|Person|Person[] $funder
     *
     * @return static
     *
     * @see http://schema.org/funder
     */
    public function funder($funder)
    {
        return $this->setProperty('funder', $funder);
    }

    /**
     * Gender of something, typically a [[Person]], but possibly also fictional
     * characters, animals, etc. While http://schema.org/Male and
     * http://schema.org/Female may be used, text strings are also acceptable
     * for people who do not identify as a binary gender. The [[gender]]
     * property can also be used in an extended sense to cover e.g. the gender
     * of sports teams. As with the gender of individuals, we do not try to
     * enumerate all possibilities. A mixed-gender [[SportsTeam]] can be
     * indicated with a text value of "Mixed".
     *
     * @param GenderType|GenderType[]|string|string[] $gender
     *
     * @return static
     *
     * @see http://schema.org/gender
     */
    public function gender($gender)
    {
        return $this->setProperty('gender', $gender);
    }

    /**
     * Given name. In the U.S., the first name of a Person. This can be used
     * along with familyName instead of the name property.
     *
     * @param string|string[] $givenName
     *
     * @return static
     *
     * @see http://schema.org/givenName
     */
    public function givenName($givenName)
    {
        return $this->setProperty('givenName', $givenName);
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
     * @see http://schema.org/globalLocationNumber
     */
    public function globalLocationNumber($globalLocationNumber)
    {
        return $this->setProperty('globalLocationNumber', $globalLocationNumber);
    }

    /**
     * The Person's occupation. For past professions, use Role for expressing
     * dates.
     *
     * @param Occupation|Occupation[] $hasOccupation
     *
     * @return static
     *
     * @see http://schema.org/hasOccupation
     */
    public function hasOccupation($hasOccupation)
    {
        return $this->setProperty('hasOccupation', $hasOccupation);
    }

    /**
     * Indicates an OfferCatalog listing for this Organization, Person, or
     * Service.
     *
     * @param OfferCatalog|OfferCatalog[] $hasOfferCatalog
     *
     * @return static
     *
     * @see http://schema.org/hasOfferCatalog
     */
    public function hasOfferCatalog($hasOfferCatalog)
    {
        return $this->setProperty('hasOfferCatalog', $hasOfferCatalog);
    }

    /**
     * Points-of-Sales operated by the organization or person.
     *
     * @param Place|Place[] $hasPOS
     *
     * @return static
     *
     * @see http://schema.org/hasPOS
     */
    public function hasPOS($hasPOS)
    {
        return $this->setProperty('hasPOS', $hasPOS);
    }

    /**
     * The height of the item.
     *
     * @param Distance|Distance[]|QuantitativeValue|QuantitativeValue[] $height
     *
     * @return static
     *
     * @see http://schema.org/height
     */
    public function height($height)
    {
        return $this->setProperty('height', $height);
    }

    /**
     * A contact location for a person's residence.
     *
     * @param ContactPoint|ContactPoint[]|Place|Place[] $homeLocation
     *
     * @return static
     *
     * @see http://schema.org/homeLocation
     */
    public function homeLocation($homeLocation)
    {
        return $this->setProperty('homeLocation', $homeLocation);
    }

    /**
     * An honorific prefix preceding a Person's name such as Dr/Mrs/Mr.
     *
     * @param string|string[] $honorificPrefix
     *
     * @return static
     *
     * @see http://schema.org/honorificPrefix
     */
    public function honorificPrefix($honorificPrefix)
    {
        return $this->setProperty('honorificPrefix', $honorificPrefix);
    }

    /**
     * An honorific suffix preceding a Person's name such as M.D. /PhD/MSCSW.
     *
     * @param string|string[] $honorificSuffix
     *
     * @return static
     *
     * @see http://schema.org/honorificSuffix
     */
    public function honorificSuffix($honorificSuffix)
    {
        return $this->setProperty('honorificSuffix', $honorificSuffix);
    }

    /**
     * The identifier property represents any kind of identifier for any kind of
     * [[Thing]], such as ISBNs, GTIN codes, UUIDs etc. Schema.org provides
     * dedicated properties for representing many of these, either as textual
     * strings or as URL (URI) links. See [background
     * notes](/docs/datamodel.html#identifierBg) for more details.
     *
     * @param PropertyValue|PropertyValue[]|string|string[] $identifier
     *
     * @return static
     *
     * @see http://schema.org/identifier
     */
    public function identifier($identifier)
    {
        return $this->setProperty('identifier', $identifier);
    }

    /**
     * An image of the item. This can be a [[URL]] or a fully described
     * [[ImageObject]].
     *
     * @param ImageObject|ImageObject[]|string|string[] $image
     *
     * @return static
     *
     * @see http://schema.org/image
     */
    public function image($image)
    {
        return $this->setProperty('image', $image);
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
     * @see http://schema.org/isicV4
     */
    public function isicV4($isicV4)
    {
        return $this->setProperty('isicV4', $isicV4);
    }

    /**
     * The job title of the person (for example, Financial Manager).
     *
     * @param string|string[] $jobTitle
     *
     * @return static
     *
     * @see http://schema.org/jobTitle
     */
    public function jobTitle($jobTitle)
    {
        return $this->setProperty('jobTitle', $jobTitle);
    }

    /**
     * The most generic bi-directional social/work relation.
     *
     * @param Person|Person[] $knows
     *
     * @return static
     *
     * @see http://schema.org/knows
     */
    public function knows($knows)
    {
        return $this->setProperty('knows', $knows);
    }

    /**
     * Indicates a page (or other CreativeWork) for which this thing is the main
     * entity being described. See [background
     * notes](/docs/datamodel.html#mainEntityBackground) for details.
     *
     * @param CreativeWork|CreativeWork[]|string|string[] $mainEntityOfPage
     *
     * @return static
     *
     * @see http://schema.org/mainEntityOfPage
     */
    public function mainEntityOfPage($mainEntityOfPage)
    {
        return $this->setProperty('mainEntityOfPage', $mainEntityOfPage);
    }

    /**
     * A pointer to products or services offered by the organization or person.
     *
     * @param Offer|Offer[] $makesOffer
     *
     * @return static
     *
     * @see http://schema.org/makesOffer
     */
    public function makesOffer($makesOffer)
    {
        return $this->setProperty('makesOffer', $makesOffer);
    }

    /**
     * An Organization (or ProgramMembership) to which this Person or
     * Organization belongs.
     *
     * @param Organization|Organization[]|ProgramMembership|ProgramMembership[] $memberOf
     *
     * @return static
     *
     * @see http://schema.org/memberOf
     */
    public function memberOf($memberOf)
    {
        return $this->setProperty('memberOf', $memberOf);
    }

    /**
     * The North American Industry Classification System (NAICS) code for a
     * particular organization or business person.
     *
     * @param string|string[] $naics
     *
     * @return static
     *
     * @see http://schema.org/naics
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
     * @see http://schema.org/name
     */
    public function name($name)
    {
        return $this->setProperty('name', $name);
    }

    /**
     * Nationality of the person.
     *
     * @param Country|Country[] $nationality
     *
     * @return static
     *
     * @see http://schema.org/nationality
     */
    public function nationality($nationality)
    {
        return $this->setProperty('nationality', $nationality);
    }

    /**
     * The total financial value of the person as calculated by subtracting
     * assets from liabilities.
     *
     * @param MonetaryAmount|MonetaryAmount[]|PriceSpecification|PriceSpecification[] $netWorth
     *
     * @return static
     *
     * @see http://schema.org/netWorth
     */
    public function netWorth($netWorth)
    {
        return $this->setProperty('netWorth', $netWorth);
    }

    /**
     * Products owned by the organization or person.
     *
     * @param OwnershipInfo|OwnershipInfo[]|Product|Product[] $owns
     *
     * @return static
     *
     * @see http://schema.org/owns
     */
    public function owns($owns)
    {
        return $this->setProperty('owns', $owns);
    }

    /**
     * A parent of this person.
     *
     * @param Person|Person[] $parent
     *
     * @return static
     *
     * @see http://schema.org/parent
     */
    public function parent($parent)
    {
        return $this->setProperty('parent', $parent);
    }

    /**
     * A parents of the person.
     *
     * @param Person|Person[] $parents
     *
     * @return static
     *
     * @see http://schema.org/parents
     */
    public function parents($parents)
    {
        return $this->setProperty('parents', $parents);
    }

    /**
     * Event that this person is a performer or participant in.
     *
     * @param Event|Event[] $performerIn
     *
     * @return static
     *
     * @see http://schema.org/performerIn
     */
    public function performerIn($performerIn)
    {
        return $this->setProperty('performerIn', $performerIn);
    }

    /**
     * Indicates a potential Action, which describes an idealized action in
     * which this thing would play an 'object' role.
     *
     * @param Action|Action[] $potentialAction
     *
     * @return static
     *
     * @see http://schema.org/potentialAction
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
     * @param CreativeWork|CreativeWork[]|string|string[] $publishingPrinciples
     *
     * @return static
     *
     * @see http://schema.org/publishingPrinciples
     */
    public function publishingPrinciples($publishingPrinciples)
    {
        return $this->setProperty('publishingPrinciples', $publishingPrinciples);
    }

    /**
     * The most generic familial relation.
     *
     * @param Person|Person[] $relatedTo
     *
     * @return static
     *
     * @see http://schema.org/relatedTo
     */
    public function relatedTo($relatedTo)
    {
        return $this->setProperty('relatedTo', $relatedTo);
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
     * @see http://schema.org/sameAs
     */
    public function sameAs($sameAs)
    {
        return $this->setProperty('sameAs', $sameAs);
    }

    /**
     * A pointer to products or services sought by the organization or person
     * (demand).
     *
     * @param Demand|Demand[] $seeks
     *
     * @return static
     *
     * @see http://schema.org/seeks
     */
    public function seeks($seeks)
    {
        return $this->setProperty('seeks', $seeks);
    }

    /**
     * A sibling of the person.
     *
     * @param Person|Person[] $sibling
     *
     * @return static
     *
     * @see http://schema.org/sibling
     */
    public function sibling($sibling)
    {
        return $this->setProperty('sibling', $sibling);
    }

    /**
     * A sibling of the person.
     *
     * @param Person|Person[] $siblings
     *
     * @return static
     *
     * @see http://schema.org/siblings
     */
    public function siblings($siblings)
    {
        return $this->setProperty('siblings', $siblings);
    }

    /**
     * A person or organization that supports a thing through a pledge, promise,
     * or financial contribution. e.g. a sponsor of a Medical Study or a
     * corporate sponsor of an event.
     *
     * @param Organization|Organization[]|Person|Person[] $sponsor
     *
     * @return static
     *
     * @see http://schema.org/sponsor
     */
    public function sponsor($sponsor)
    {
        return $this->setProperty('sponsor', $sponsor);
    }

    /**
     * The person's spouse.
     *
     * @param Person|Person[] $spouse
     *
     * @return static
     *
     * @see http://schema.org/spouse
     */
    public function spouse($spouse)
    {
        return $this->setProperty('spouse', $spouse);
    }

    /**
     * A CreativeWork or Event about this Thing.
     *
     * @param CreativeWork|CreativeWork[]|Event|Event[] $subjectOf
     *
     * @return static
     *
     * @see http://schema.org/subjectOf
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
     * @see http://schema.org/taxID
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
     * @see http://schema.org/telephone
     */
    public function telephone($telephone)
    {
        return $this->setProperty('telephone', $telephone);
    }

    /**
     * URL of the item.
     *
     * @param string|string[] $url
     *
     * @return static
     *
     * @see http://schema.org/url
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
     * @see http://schema.org/vatID
     */
    public function vatID($vatID)
    {
        return $this->setProperty('vatID', $vatID);
    }

    /**
     * The weight of the product or person.
     *
     * @param QuantitativeValue|QuantitativeValue[] $weight
     *
     * @return static
     *
     * @see http://schema.org/weight
     */
    public function weight($weight)
    {
        return $this->setProperty('weight', $weight);
    }

    /**
     * A contact location for a person's place of work.
     *
     * @param ContactPoint|ContactPoint[]|Place|Place[] $workLocation
     *
     * @return static
     *
     * @see http://schema.org/workLocation
     */
    public function workLocation($workLocation)
    {
        return $this->setProperty('workLocation', $workLocation);
    }

    /**
     * Organizations that the person works for.
     *
     * @param Organization|Organization[] $worksFor
     *
     * @return static
     *
     * @see http://schema.org/worksFor
     */
    public function worksFor($worksFor)
    {
        return $this->setProperty('worksFor', $worksFor);
    }

}
