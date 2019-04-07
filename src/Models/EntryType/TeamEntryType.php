<?php

namespace Yoerioptr\TabtApiClient\Models\EntryType;

use Yoerioptr\TabtApiClient\Models\EntryTypeInterface;

/**
 * Class TeamEntryType
 *
 * @package Yoerioptr\TabtApiClient\Models\EntryType
 */
class TeamEntryType implements EntryTypeInterface
{
    /**
     * @var string
     */
    private $teamId;

    /**
     * @var string
     */
    private $team;

    /**
     * @var int
     */
    private $divisionId;

    /**
     * @var string
     */
    private $divisionName;

    /**
     * @var int
     */
    private $divisionCategory;

    /**
     * @var int
     */
    private $matchType;

    /**
     * TeamEntryType constructor.
     *
     * @param $response
     */
    public function __construct($response)
    {
        $this->teamId = $response->TeamId;
        $this->team = $response->Team;
        $this->divisionId = $response->DivisionId;
        $this->divisionName = $response->DivisionName;
        $this->divisionCategory = $response->DivisionCategory;
        $this->matchType = $response->MatchType;
    }

    /**
     * @return string
     */
    public function getTeamId(): string
    {
        return $this->teamId;
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
    public function getDivisionId(): int
    {
        return $this->divisionId;
    }

    /**
     * @return string
     */
    public function getDivisionName(): string
    {
        return $this->divisionName;
    }

    /**
     * @return int
     */
    public function getDivisionCategory(): int
    {
        return $this->divisionCategory;
    }

    /**
     * @return int
     */
    public function getMatchType(): int
    {
        return $this->matchType;
    }
}
