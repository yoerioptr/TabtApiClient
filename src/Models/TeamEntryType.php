<?php

namespace Yoerioptr\TabtApiClient\Models;

/**
 * Class TeamEntryType
 *
 * @package Yoerioptr\TabtApiClient\Models
 */
class TeamEntryType
{
    /**
     * @var string
     */
    private $TeamId;

    /**
     * @var string
     */
    private $Team;

    /**
     * @var int
     */
    private $DivisionId;

    /**
     * @var string
     */
    private $DivisionName;

    /**
     * @var int
     */
    private $DivisionCategory;

    /**
     * @var int
     */
    private $MatchType;

    /**
     * TeamEntryType constructor.
     *
     * @param object $response
     */
    public function __construct(object $response)
    {
        $this->TeamId = $response->TeamId;
        $this->Team = $response->Team;
        $this->DivisionId = $response->DivisionId;
        $this->DivisionName = $response->DivisionName;
        $this->DivisionCategory = $response->DivisionCategory;
        $this->MatchType = $response->MatchType;
    }

    /**
     * @return string
     */
    public function getTeamId(): string
    {
        return $this->TeamId;
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
    public function getDivisionId(): int
    {
        return $this->DivisionId;
    }

    /**
     * @return string
     */
    public function getDivisionName(): string
    {
        return $this->DivisionName;
    }

    /**
     * @return int
     */
    public function getDivisionCategory(): int
    {
        return $this->DivisionCategory;
    }

    /**
     * @return int
     */
    public function getMatchType(): int
    {
        return $this->MatchType;
    }
}
