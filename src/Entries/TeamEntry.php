<?php

namespace Yoerioptr\TabtApiClient\Entries;

/**
 * Class TeamEntry
 *
 * @package Yoerioptr\TabtApiClient\Entries
 */
final class TeamEntry
{

    /**
     * @var string
     */
    private string $teamId;

    /**
     * @var string
     */
    private string $team;

    /**
     * @var int
     */
    private int $divisionId;

    /**
     * @var string
     */
    private string $divisionName;

    /**
     * @var int
     */
    private int $divisionCategory;

    /**
     * @var int
     */
    private int $matchType;

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
