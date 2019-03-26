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
    private $Position;

    /**
     * @var string
     */
    private $Team;

    /**
     * @var int
     */
    private $GamesPlayed;

    /**
     * @var int
     */
    private $GamesWon;

    /**
     * @var int
     */
    private $GamesLost;

    /**
     * @var int
     */
    private $GamesDraw;

    /**
     * @var int
     */
    private $IndividualMatchesWon;

    /**
     * @var int
     */
    private $IndividualMatchesLost;

    /**
     * @var int
     */
    private $IndividualSetsWon;

    /**
     * @var int
     */
    private $IndividualSetsLost;

    /**
     * @var int
     */
    private $Points;

    /**
     * @var int
     */
    private $TeamClub;

    /**
     * RankingEntryType constructor.
     *
     * @param object $response
     */
    public function __construct(object $response)
    {
        $this->Position = $response->Position;
        $this->Team = $response->Team;
        $this->GamesPlayed = $response->GamesPlayed;
        $this->GamesWon = $response->GamesWon;
        $this->GamesLost = $response->GamesLost;
        $this->GamesDraw = $response->GamesDraw;
        $this->IndividualMatchesWon = $response->IndividualMatchesWon;
        $this->IndividualMatchesLost = $response->IndividualMatchesLost;
        $this->IndividualSetsWon = $response->IndividualSetsWon;
        $this->IndividualSetsLost = $response->IndividualSetsLost;
        $this->Points = $response->Points;
        $this->TeamClub = $response->TeamClub;
    }

    /**
     * @return int
     */
    public function getPosition(): int
    {
        return $this->Position;
    }

    /**
     * @return string
     */
    public function getTeam(): string
    {
        return $this->Team;
    }

    /**
     * @return int
     */
    public function getGamesPlayed(): int
    {
        return $this->GamesPlayed;
    }

    /**
     * @return int
     */
    public function getGamesWon(): int
    {
        return $this->GamesWon;
    }

    /**
     * @return int
     */
    public function getGamesLost(): int
    {
        return $this->GamesLost;
    }

    /**
     * @return int
     */
    public function getGamesDraw(): int
    {
        return $this->GamesDraw;
    }

    /**
     * @return int
     */
    public function getIndividualMatchesWon(): int
    {
        return $this->IndividualMatchesWon;
    }

    /**
     * @return int
     */
    public function getIndividualMatchesLost(): int
    {
        return $this->IndividualMatchesLost;
    }

    /**
     * @return int
     */
    public function getIndividualSetsWon(): int
    {
        return $this->IndividualSetsWon;
    }

    /**
     * @return int
     */
    public function getIndividualSetsLost(): int
    {
        return $this->IndividualSetsLost;
    }

    /**
     * @return int
     */
    public function getPoints(): int
    {
        return $this->Points;
    }

    /**
     * @return int
     */
    public function getTeamClub(): int
    {
        return $this->TeamClub;
    }
}
