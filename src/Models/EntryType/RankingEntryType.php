<?php

namespace Yoerioptr\TabtApiClient\Models\EntryType;

/**
 * Class RankingEntryType
 *
 * @package Yoerioptr\TabtApiClient\Models\EntryType
 */
class RankingEntryType
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
     * @var int
     */
    private $teamClub;

    /**
     * RankingEntryType constructor.
     *
     * @param object $response
     */
    public function __construct(object $response)
    {
        $this->position = $response->Position;
        $this->team = $response->Team;
        $this->gamesPlayed = $response->GamesPlayed;
        $this->gamesWon = $response->GamesWon;
        $this->gamesLost = $response->GamesLost;
        $this->gamesDraw = $response->GamesDraw;
        $this->individualMatchesWon = $response->IndividualMatchesWon;
        $this->individualMatchesLost = $response->IndividualMatchesLost;
        $this->individualSetsWon = $response->IndividualSetsWon;
        $this->individualSetsLost = $response->IndividualSetsLost;
        $this->points = $response->Points;
        $this->teamClub = $response->TeamClub;
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
     * @return int
     */
    public function getTeamClub(): int
    {
        return $this->teamClub;
    }
}
