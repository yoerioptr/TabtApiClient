<?php

namespace Yoerioptr\TabtApiClient\Response;

use Yoerioptr\TabtApiClient\Entries\TeamEntry;

/**
 * Class GetClubTeamsResponse
 *
 * @package Yoerioptr\TabtApiClient\Response
 */
class GetClubTeamsResponse implements ResponseInterface
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
     * @var
     */
    private $teamEntries = [];

    /**
     * GetClubTeamsResponse constructor.
     *
     * @param $rawResponse
     */
    public function __construct($rawResponse)
    {
        foreach ((array) $rawResponse as $key => $value) {
            if ($key !== 'TeamEntries') {
                $property = lcfirst($key);
                $this->$property = $value;
                continue;
            }

            foreach ($value as $teamEntry) {
                $this->teamEntries[] = new TeamEntry($teamEntry);
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
     * @return mixed
     */
    public function getTeamEntries()
    {
        return $this->teamEntries;
    }
}
