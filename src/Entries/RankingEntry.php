<?php

namespace Yoerioptr\TabtApiClient\Entries;

/**
 * Class RankingEntry
 *
 * @package Yoerioptr\TabtApiClient\Entries
 */
final class RankingEntry
{

    /**
     * @var int
     */
    private int $position;

    /**
     * @var string
     */
    private string $team;

    /**
     * @var int
     */
    private int $gamesPlayed;

    /**
     * @var int
     */
    private int $gamesWon;

    /**
     * @var int
     */
    private int $gamesLost;

    /**
     * @var int
     */
    private int $gamesDraw;

    /**
     * @var int
     */
    private int $individualMatchesWon;

    /**
     * @var int
     */
    private int $individualMatchesLost;

    /**
     * @var int
     */
    private int $individualSetsWon;

    /**
     * @var int
     */
    private int $individualSetsLost;

    /**
     * @var int
     */
    private int $points;

    /**
     * @var string
     */
    private string $teamClub;

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
