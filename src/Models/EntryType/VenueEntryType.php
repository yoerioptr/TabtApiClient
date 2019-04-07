<?php

namespace Yoerioptr\TabtApiClient\Models\EntryType;

use Yoerioptr\TabtApiClient\Models\EntryTypeInterface;

/**
 * Class VenueEntryType
 *
 * @package Yoerioptr\TabtApiClient\Models\EntryType
 */
class VenueEntryType implements EntryTypeInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $clubVenue;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $street;

    /**
     * @var string
     */
    private $town;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $comment;

    /**
     * VenueEntryType constructor.
     *
     * @param $response
     */
    public function __construct($response)
    {
        $this->id = $response->Id;
        $this->clubVenue = $response->ClubVenue;
        $this->name = $response->Name;
        $this->street = $response->Street;
        $this->town = $response->Town;
        $this->phone = $response->Phone;
        $this->comment = $response->Comment;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getClubVenue(): int
    {
        return $this->clubVenue;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * @return string
     */
    public function getTown(): string
    {
        return $this->town;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }
}
