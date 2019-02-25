<?php

namespace Yoerioptr\TabtApiClient\Models;

/**
 * Class GetClubsResponseType
 *
 * @package Yoerioptr\TabtApiClient\Models
 */
class GetClubsResponseType
{
    /**
     * @var int
     */
    private $ClubCount;

    /**
     * @var ClubEntryType[]
     */
    private $ClubEntries;

    /**
     * GetClubsResponseType constructor.
     *
     * @param object $response
     */
    public function __construct(object $response)
    {
        $this->ClubCount = $response->ClubCount;
        foreach ($response->ClubEntries as $clubEntry) {
            $this->ClubEntries[] = new ClubEntryType($clubEntry);
        }
    }

    /**
     * @return int
     */
    public function getClubCount(): int
    {
        return $this->ClubCount;
    }

    /**
     * @return ClubEntryType[]
     */
    public function getClubEntries(): array
    {
        return $this->ClubEntries;
    }
}
