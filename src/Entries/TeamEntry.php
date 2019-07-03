<?php

namespace Yoerioptr\TabtApiClient\Entries;

/**
 * Class TeamEntriy
 *
 * @package Yoerioptr\TabtApiClient\Entries
 */
class TeamEntry
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
     * TeamEntry constructor.
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
