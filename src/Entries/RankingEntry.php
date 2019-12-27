<?php

namespace Yoerioptr\TabtApiClient\Entries;

/**
 * Class RankingEntry
 *
 * @package Yoerioptr\TabtApiClient\Entries
 */
class RankingEntry
{

    /**
     * @var int
     */
    private $position;

    /**
     * @var string
     */
    private $team;

    /**
     * @var int
     */
    private $gamesPlayed;

    /**
     * @var int
     */
    private $gamesWon;

    /**
     * @var int
     */
    private $gamesLost;

    /**
     * @var int
     */
    private $gamesDraw;

    /**
     * @var int
     */
    private $individualMatchesWon;

    /**
     * @var int
     */
    private $individualMatchesLost;

    /**
     * @var int
     */
    private $individualSetsWon;

    /**
     * @var int
     */
    private $individualSetsLost;

    /**
     * @var int
     */
    private $points;

    /**
     * @var string
     */
    private $teamClub;

    /**
     * RankingEntry constructor.
     *
     * @param $rawResponse
     */
    public function __construct($rawResponse)
    {
        foreach ((array) $rawResponse as $key => $value) {
            $property = lcfirst($key);
            $this->$property = $value;
        }
    }

    /**
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }

    /**
     * @return string
     */
    public function getTeam(): string
    {
        return $this->team;
    }

    /**
     * @return int
     */
    public function getGamesPlayed(): int
    {
        return $this->gamesPlayed;
    }

    /**
     * @return int
     */
    public function getGamesWon(): int
    {
        return $this->gamesWon;
    }

    /**
     * @return int
     */
    public function getGamesLost(): int
    {
        return $this->gamesLost;
    }

    /**
     * @return int
     */
    public function getGamesDraw(): int
    {
        return $this->gamesDraw;
    }

    /**
     * @return int
     */
    public function getIndividualMatchesWon(): int
    {
        return $this->individualMatchesWon;
    }

    /**
     * @return int
     */
    public function getIndividualMatchesLost(): int
    {
        return $this->individualMatchesLost;
    }

    /**
     * @return int
     */
    public function getIndividualSetsWon(): int
    {
        return $this->individualSetsWon;
    }

    /**
     * @return int
     */
    public function getIndividualSetsLost(): int
    {
        return $this->individualSetsLost;
    }

    /**
     * @return int
     */
    public function getPoints(): int
    {
        return $this->points;
    }

    /**
     * @return string
     */
    public function getTeamClub(): string
    {
        return $this->teamClub;
    }

}
