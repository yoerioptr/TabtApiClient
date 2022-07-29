<?php

namespace Yoerioptr\TabtApiClient\Response;

use Yoerioptr\TabtApiClient\Entries\ClubEntry;

/**
 * Class GetClubsResponse
 *
 * @package Yoerioptr\TabtApiClient\Response
 */
final class GetClubsResponse implements ResponseInterface
{

    /**
     * @var int
     */
    private int $clubCount;

    /**
     * @var ClubEntry[]
     */
    private array $clubEntries = [];

    /**
     * GetClubTeamsResponse constructor.
     *
     * @param $rawResponse
     */
    public function __construct($rawResponse)
    {
        foreach ((array) $rawResponse as $key => $value) {
            if ($key !== 'ClubEntries') {
                $property = lcfirst($key);
                $this->$property = $value;
                continue;
            }

            foreach ($value as $clubEntry) {
                $this->clubEntries[] = new ClubEntry($clubEntry);
            }
        }
    }

    /**
     * @return int
     */
    public function getClubCount(): int
    {
        return $this->clubCount;
    }

    /**
     * @return ClubEntry[]
     */
    public function getClubEntries(): array
    {
        return $this->clubEntries;
    }

}
