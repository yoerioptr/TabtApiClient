<?php

namespace Yoerioptr\TabtApiClient\Models\EntryType;

use Yoerioptr\TabtApiClient\Models\EntryTypeInterface;

/**
 * Class MatchSystemEntry
 *
 * @package Yoerioptr\TabtApiClient\Models\EntryType
 */
class MatchSystemEntry implements EntryTypeInterface
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
     * MatchSystemEntry constructor.
     *
     * @param object $response
     */
    public function __construct(object $response)
    {
        $this->uniqueIndex = $response->UniqueIndex;
        $this->name = $response->Name;
        $this->singleMatchCount = $response->SingleMatchCount;
        $this->doubleMatchCount = $response->DoubleMatchCount;
        $this->setCount = $response->SetCount;
        $this->pointCount = $response->PointCount;
        $this->forcedDoubleTeams = $response->ForcedDoubleTeams;
        $this->substituteCount = $response->SubstituteCount;
        $this->teamMatchCount = $response->TeamMatchCount;

        if ($this->teamMatchCount !== 0) {
            if (is_array($response->TeamMatchDefinitionEntries)) {
                foreach ($response->TeamMatchDefinitionEntries as $teamMatchDefinitionEntry) {
                    $this->teamMatchDefinitionEntries[] = new TeamMatchDefinitionEntry($teamMatchDefinitionEntry);
                }
            }
            elseif (is_object($response->TeamMatchDefinitionEntries)) {
                $this->teamMatchDefinitionEntries[] = new TeamMatchDefinitionEntry(
                    $response->TeamMatchDefinitionEntries
                );
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
