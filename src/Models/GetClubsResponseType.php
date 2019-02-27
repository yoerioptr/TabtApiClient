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
     * @var ClubEntryType|ClubEntryType[]
     */
    private $ClubEntries;

    /**
     * GetClubsResponseType constructor.
     *
     * @param object $response
     */
    public function __construct(object $response)
    {
        if (($this->ClubCount = $response->ClubCount) != 0) {
            if (is_array($response->ClubEntries)) {
                foreach ($response->ClubEntries as $clubEntry) {
                    $this->ClubEntries[] = new ClubEntryType($clubEntry);
                }
            } elseif (is_object($response->ClubEntries)) {
                $this->ClubEntries[] = new ClubEntryType($response->ClubEntries);
            }
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
     * @return ClubEntryType|ClubEntryType[]
     */
    public function getClubEntries()
    {
        return $this->ClubEntries;
    }
}
