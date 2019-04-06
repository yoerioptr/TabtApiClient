<?php

namespace Yoerioptr\TabtApiClient\Models\ResponseType;

use Yoerioptr\TabtApiClient\Models\EntryType\RankingEntryType;
use Yoerioptr\TabtApiClient\Models\EntryType\TeamEntryType;

/**
 * Class GetClubTeamsResponseType
 *
 * @package Yoerioptr\TabtApiClient\Models\ResponseType
 */
class GetClubTeamsResponseType
{
    /**
     * @var string
     */
    private $clubName;

    /**
     * @var int
     */
    private $teamCount;

    /**
     * @var TeamEntryType[]
     */
    private $teamEntries = [];

    /**
     * GetClubTeamsResponseType constructor.
     *
     * @param object $response
     */
    public function __construct(object $response)
    {
        $this->clubName = $response->ClubName;
        $this->teamCount = $response->TeamCount;

        if ($this->teamCount!== 0) {
            if (is_array($response->TeamEntries)) {
                foreach ($response->TeamEntries as $teamEntry) {
                    $this->teamEntries[] = new TeamEntryType($teamEntry);
                }
            }
            elseif (is_object($response->TeamEntries)) {
                $this->teamEntries[] = new TeamEntryType($response->TeamEntries);
            }
        }
    }

    /**
     * @return string
     */
    public function getClubName(): string
    {
        return $this->clubName;
    }

    /**
     * @return int
     */
    public function getTeamCount(): int
    {
        return $this->teamCount;
    }

    /**
     * @return TeamEntryType[]
     */
    public function getTeamEntries(): array
    {
        return $this->teamEntries;
    }
}
