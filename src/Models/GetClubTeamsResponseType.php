<?php

namespace Yoerioptr\TabtApiClient\Models;

/**
 * Class GetClubTeamsResponseType
 *
 * @package Yoerioptr\TabtApiClient\Models
 */
class GetClubTeamsResponseType
{
    /**
     * @var string
     */
    private $ClubName;

    /**
     * @var int
     */
    private $TeamCount;

    /**
     * @var TeamEntryType[]
     */
    private $TeamEntries;

    /**
     * GetClubTeamsResponseType constructor.
     *
     * @param object $response
     */
    public function __construct(object $response)
    {
        $this->ClubName = $response->ClubName;
        $this->TeamCount = $response->TeamCount;
        foreach ($response->TeamEntries as $teamEntry) {
            $this->TeamEntries[] = new TeamEntryType($teamEntry);
        }
    }

    /**
     * @return string
     */
    public function getClubName(): string
    {
        return $this->ClubName;
    }

    /**
     * @return int
     */
    public function getTeamCount(): int
    {
        return $this->TeamCount;
    }

    /**
     * @return TeamEntryType[]
     */
    public function getTeamEntries(): array
    {
        return $this->TeamEntries;
    }
}
