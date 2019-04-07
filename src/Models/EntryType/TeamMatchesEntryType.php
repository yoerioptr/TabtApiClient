<?php

namespace Yoerioptr\TabtApiClient\Models\EntryType;

use DateTime;
use Exception;
use Yoerioptr\TabtApiClient\Models\EntryTypeInterface;

/**
 * Class TeamMatchesEntryType
 *
 * @package Yoerioptr\TabtApiClient\Models\EntryType
 */
class TeamMatchesEntryType implements EntryTypeInterface
{
    /**
     * @var string
     */
    private $matchId;

    /**
     * @var string
     */
    private $weekName;

    /**
     * @var DateTime
     */
    private $dateTime;

    /**
     * @var int
     */
    private $venue;

    /**
     * @var string
     */
    private $homeClub;

    /**
     * @var string
     */
    private $homeTeam;

    /**
     * @var string
     */
    private $awayClub;

    /**
     * @var string
     */
    private $awayTeam;

    /**
     * @var string
     */
    private $score;

    /**
     * @var string
     */
    private $nextWeekName;

    /**
     * @var bool
     */
    private $isHomeForfeited;

    /**
     * @var bool
     */
    private $isAwayForfeited;

    /**
     * @var int
     */
    private $divisionId;

    /**
     * @var int
     */
    private $divisionCategory;

    /**
     * @var string
     */
    private $isHomeWithdrawn;

    /**
     * @var string
     */
    private $isAwayWithdrawn;

    /**
     * @var string
     */
    private $venueClub;

    /**
     * @var VenueEntryType
     */
    private $venueEntry;

    /**
     * TeamMatchesEntryType constructor.
     *
     * @param $response
     *
     * @throws Exception
     */
    public function __construct($response)
    {
        $this->matchId = $response->MatchId;
        $this->weekName = $response->WeekName;
        $this->dateTime = new DateTime($response->Date . ' ' . $response->Time);
        $this->venue = $response->Venue;
        $this->homeClub = $response->HomeClub;
        $this->homeTeam = $response->HomeTeam;
        $this->awayClub = $response->AwayClub;
        $this->awayTeam = $response->AwayTeam;
        $this->score = $response->Score;
        $this->nextWeekName = $response->NextWeekName;
        $this->isHomeForfeited = $response->IsHomeForfeited;
        $this->isAwayForfeited = $response->IsAwayForfeited;
        $this->divisionId = $response->DivisionId;
        $this->divisionCategory = $response->DivisionCategory;
        $this->isHomeWithdrawn = $response->IsHomeWithdrawn;
        $this->isAwayWithdrawn = $response->IsAwayWithdrawn;
        $this->venueClub = $response->VenueClub;
        $this->venueEntry = new VenueEntryType($response->VenueEntry);
    }

    /**
     * @return string
     */
    public function getMatchId(): string
    {
        return $this->matchId;
    }

    /**
     * @return string
     */
    public function getWeekName(): string
    {
        return $this->weekName;
    }

    /**
     * @return DateTime
     */
    public function getDateTime(): DateTime
    {
        return $this->dateTime;
    }

    /**
     * @return int
     */
    public function getVenue(): int
    {
        return $this->venue;
    }

    /**
     * @return string
     */
    public function getHomeClub(): string
    {
        return $this->homeClub;
    }

    /**
     * @return string
     */
    public function getHomeTeam(): string
    {
        return $this->homeTeam;
    }

    /**
     * @return string
     */
    public function getAwayClub(): string
    {
        return $this->awayClub;
    }

    /**
     * @return string
     */
    public function getAwayTeam(): string
    {
        return $this->awayTeam;
    }

    /**
     * @return string
     */
    public function getScore(): string
    {
        return $this->score;
    }

    /**
     * @return string
     */
    public function getNextWeekName(): string
    {
        return $this->nextWeekName;
    }

    /**
     * @return bool
     */
    public function isHomeForfeited(): bool
    {
        return $this->isHomeForfeited;
    }

    /**
     * @return bool
     */
    public function isAwayForfeited(): bool
    {
        return $this->isAwayForfeited;
    }

    /**
     * @return int
     */
    public function getDivisionId(): int
    {
        return $this->divisionId;
    }

    /**
     * @return int
     */
    public function getDivisionCategory(): int
    {
        return $this->divisionCategory;
    }

    /**
     * @return string
     */
    public function getIsHomeWithdrawn(): string
    {
        return $this->isHomeWithdrawn;
    }

    /**
     * @return string
     */
    public function getIsAwayWithdrawn(): string
    {
        return $this->isAwayWithdrawn;
    }

    /**
     * @return string
     */
    public function getVenueClub(): string
    {
        return $this->venueClub;
    }

    /**
     * @return VenueEntryType
     */
    public function getVenueEntry(): VenueEntryType
    {
        return $this->venueEntry;
    }
}
