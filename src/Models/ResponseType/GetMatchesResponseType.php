<?php

namespace Yoerioptr\TabtApiClient\Models\ResponseType;

use Exception;
use Yoerioptr\TabtApiClient\Models\EntryType\TeamMatchesEntryType;
use Yoerioptr\TabtApiClient\Models\ResponseTypeInterface;

/**
 * Class GetMatchesResponseType
 *
 * @package Yoerioptr\TabtApiClient\Models\ResponseType
 */
class GetMatchesResponseType implements ResponseTypeInterface
{
    /**
     * @var int
     */
    private $matchCount;

    /**
     * @var TeamMatchesEntryType[]
     */
    private $teamMatchesEntries;

    /**
     * ResponseTypeInterface constructor.
     *
     * @param $response
     *
     * @throws Exception
     */
    public function __construct($response)
    {
        $this->matchCount = $response->MatchCount;

        if (is_array($response->TeamMatchesEntries)) {
            foreach ($response->TeamMatchesEntries as $teamMatchesEntry) {
                $this->teamMatchesEntries[] = new TeamMatchesEntryType($teamMatchesEntry);
            }
        }
        elseif (is_object($response->TeamMatchesEntries)) {
            $this->teamMatchesEntries[] = new TeamMatchesEntryType($response->TeamMatchesEntries);
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
     * @return TeamMatchesEntryType[]
     */
    public function getTeamMatchesEntries(): array
    {
        return $this->teamMatchesEntries;
    }
}
