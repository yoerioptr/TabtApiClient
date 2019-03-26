<?php

namespace Yoerioptr\TabtApiClient\Models\EntryType;

/**
 * Class VenueEntryType
 *
 * @package Yoerioptr\TabtApiClient\Models\EntryType
 */
class VenueEntryType
{
    /**
     * @var int
     */
    private $Id;

    /**
     * @var int
     */
    private $ClubVenue;

    /**
     * @var string
     */
    private $Name;

    /**
     * @var string
     */
    private $Street;

    /**
     * @var string
     */
    private $Town;

    /**
     * @var string
     */
    private $Phone;

    /**
     * @var string
     */
    private $Comment;

    /**
     * VenueEntryType constructor.
     *
     * @param object $response
     */
    public function __construct(object $response)
    {
        $this->Id = $response->Id;
        $this->ClubVenue = $response->ClubVenue;
        $this->Name = $response->Name;
        $this->Street = $response->Street;
        $this->Town = $response->Town;
        $this->Phone = $response->Phone;
        $this->Comment = $response->Comment;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->Id;
    }

    /**
     * @return int
     */
    public function getClubVenue(): int
    {
        return $this->ClubVenue;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->Street;
    }

    /**
     * @return string
     */
    public function getTown(): string
    {
        return $this->Town;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->Phone;
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->Comment;
    }
}
