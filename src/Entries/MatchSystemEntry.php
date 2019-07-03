<?php

namespace Yoerioptr\TabtApiClient\Entries;

/**
 * Class TeamMatchSystemEntry
 *
 * @package Yoerioptr\TabtApiClient\Entries
 */
class MatchSystemEntry
{
    /**
     * @var int
     */
    private $uniqueIndex;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $singleMatchCount;

    /**
     * @var int
     */
    private $doubleMatchCount;

    /**
     * @var int
     */
    private $setCount;

    /**
     * @var int
     */
    private $pointCount;

    /**
     * @var bool
     */
    private $forcedDoubleTeams;

    /**
     * @var int
     */
    private $substituteCount;

    /**
     * @var int
     */
    private $teamMatchCount;

    /**
     * @var TeamMatchDefinitionEntry[]
     */
    private $teamMatchDefinitionEntries = [];

    /**
     * TeamMatchSystemEntry constructor.
     *
     * @param $rawResponse
     */
    public function __construct($rawResponse)
    {
        foreach ((array) $rawResponse as $key => $value) {
            if ($key !== 'TeamMatchDefinitionEntries') {
                $property = lcfirst($key);
                $this->$property = $value;
                continue;
            }

            foreach ($value as $teamMatchDefinitionEntry) {
                $this->teamMatchDefinitionEntries[] = new TeamMatchDefinitionEntry($teamMatchDefinitionEntry);
            }
        }
    }

    /**
     * @return int
     */
    public function getUniqueIndex(): int
    {
        return $this->uniqueIndex;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getSingleMatchCount(): int
    {
        return $this->singleMatchCount;
    }

    /**
     * @return int
     */
    public function getDoubleMatchCount(): int
    {
        return $this->doubleMatchCount;
    }

    /**
     * @return int
     */
    public function getSetCount(): int
    {
        return $this->setCount;
    }

    /**
     * @return int
     */
    public function getPointCount(): int
    {
        return $this->pointCount;
    }

    /**
     * @return bool
     */
    public function isForcedDoubleTeams(): bool
    {
        return $this->forcedDoubleTeams;
    }

    /**
     * @return int
     */
    public function getSubstituteCount(): int
    {
        return $this->substituteCount;
    }

    /**
     * @return int
     */
    public function getTeamMatchCount(): int
    {
        return $this->teamMatchCount;
    }

    /**
     * @return TeamMatchDefinitionEntry[]
     */
    public function getTeamMatchDefinitionEntries(): array
    {
        return $this->teamMatchDefinitionEntries;
    }
}
