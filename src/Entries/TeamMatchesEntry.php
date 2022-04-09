<?php

namespace Yoerioptr\TabtApiClient\Entries;

use DateTime;
use Exception;

/**
 * Class TeamMatchesEntry
 *
 * @package Yoerioptr\TabtApiClient\Entries
 */
final class TeamMatchesEntry
{

    /**
     * @var string
     */
    private string $matchId;

    /**
     * @var int
     */
    private int $matchUniqueId;

    /**
     * @var string
     */
    private string $weekName;

    /**
     * @var string|null
     */
    private ?string $date = null;

    /**
     * @var string|null
     */
    private ?string $time = null;

    /**
     * @var int
     */
    private int $venue;

    /**
     * @var string
     */
    private string $homeClub;

    /**
     * @var string
     */
    private string $homeTeam;

    /**
     * @var string
     */
    private string $awayClub;

    /**
     * @var string
     */
    private string $awayTeam;

    /**
     * @var string
     */
    private string $score = '';

    /**
     * @var string
     */
    private string $previousWeekName;

    /**
     * @var string
     */
    private string $nextWeekName;

    /**
     * @var bool
     */
    private bool $isHomeForfeited;

    /**
     * @var bool
     */
    private bool $isAwayForfeited;

    /**
     * @var int
     */
    private int $divisionId;

    /**
     * @var int
     */
    private int $divisionCategory;

    /**
     * @var string
     */
    private string $isHomeWithdrawn;

    /**
     * @var string
     */
    private string $isAwayWithdrawn;

    /**
     * @var string|int
     */
    private ?string $venueClub = null;

    /**
     * @var VenueEntry|null
     */
    private ?VenueEntry $venueEntry;

    /**
     * @var bool
     */
    private bool $isValidated;

    /**
     * @var bool
     */
    private bool $isLocked;

    /**
     * @var string|null
     */
    private ?string $divisionName;

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
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * @return string|null
     */
    public function getTime(): ?string
    {
        return $this->time;
    }

    /**
     * @return DateTime
     *
     * @throws Exception
     */
    public function getDateTime(): ?DateTime
    {
        return !is_null($this->getDate()) && !is_null($this->getTime())
            ? new DateTime("{$this->getDate()} {$this->getTime()}")
            : null;
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
     * @return string|null
     */
    public function getScore(): ?string
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
    public function getHomeWithdrawn(): string
    {
        return $this->isHomeWithdrawn;
    }

    /**
     * @return string
     */
    public function getAwayWithdrawn(): string
    {
        return $this->isAwayWithdrawn;
    }

    /**
     * @return string|null
     */
    public function getVenueClub(): ?string
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
