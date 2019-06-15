<?php

namespace Yoerioptr\TabtApiClient\Response;

use Yoerioptr\TabtApiClient\Entries\TeamMatchesEntry;

/**
 * Class GetMatchesResponse
 *
 * @package Yoerioptr\TabtApiClient\Response
 */
class GetMatchesResponse implements ResponseInterface
{
    /**
     * @var int
     */
    private $matchCount;

    /**
     * @var TeamMatchesEntry[]
     */
    private $teamMatchesEntries = [];

    /**
     * GetMatchesResponse constructor.
     *
     * @param $rawResponse
     */
    public function __construct($rawResponse)
    {
        foreach ((array) $rawResponse as $key => $value) {
            if ($key !== 'TeamMatchesEntries') {
                $property = lcfirst($key);
                $this->$property = $value;
                continue;
            }

            foreach ($value as $teamMatchesEntry) {
                $this->teamMatchesEntries[] = new TeamMatchesEntry($teamMatchesEntry);
            }
        }
    }

    /**
     * @return int
     */
    public function getMatchCount(): int
    {
        return $this->matchCount;
    }

    /**
     * @return TeamMatchesEntry[]
     */
    public function getTeamMatchesEntries(): array
    {
        return $this->teamMatchesEntries;
    }
}
