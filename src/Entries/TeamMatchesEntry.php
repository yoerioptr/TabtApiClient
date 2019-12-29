<?php

namespace Yoerioptr\TabtApiClient\Entries;

use DateTime;
use Exception;

/**
 * Class TeamMatchesEntry
 *
 * @package Yoerioptr\TabtApiClient\Entries
 */
class TeamMatchesEntry
{

    /**
     * @var string
     */
    private $matchId;

    /**
     * @var int
     */
    private $matchUniqueId;

    /**
     * @var string
     */
    private $weekName;

    /**
     * @var string
     */
    private $date;

    /**
     * @var string
     */
    private $time;

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
    private $previousWeekName;

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
     * @var VenueEntry|null
     */
    private $venueEntry;

    /**
     * @var bool
     */
    private $isValidated;

    /**
     * @var bool
     */
    private $isLocked;

    /**
     * @var string|null
     */
    private $divisionName;

    /**
     * TeamMatchesEntry constructor.
     *
     * @param $rawResponse
     */
    public function __construct($rawResponse)
    {
        foreach ((array) $rawResponse as $key => $value) {
            if ($key !== 'VenueEntry') {
                $property = lcfirst($key);
                $this->$property = $value;
                continue;
            }

            $this->venueEntry = new VenueEntry($value);
        }
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
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @return string
     */
    public function getTime(): string
    {
        return $this->time;
    }

    /**
     * @return DateTime
     *
     * @throws Exception
     */
    public function getDateTime(): DateTime
    {
        return new DateTime($this->date . ' ' . $this->time);
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
    public function getPreviousWeekName(): string
    {
        return $this->previousWeekName;
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
     * @return VenueEntry|null
     */
    public function getVenueEntry(): ?VenueEntry
    {
        return $this->venueEntry;
    }

    /**
     * @return string|null
     */
    public function getDivisionName(): ?string
    {
        return $this->divisionName;
    }

    /**
     * @return int
     */
    public function getMatchUniqueId(): int
    {
        return $this->matchUniqueId;
    }

    /**
     * @return bool
     */
    public function isValidated(): bool
    {
        return $this->isValidated;
    }

    /**
     * @return bool
     */
    public function isLocked(): bool
    {
        return $this->isLocked;
    }

}
