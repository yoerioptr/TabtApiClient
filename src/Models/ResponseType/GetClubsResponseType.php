<?php

namespace Yoerioptr\TabtApiClient\Models\ResponseType;

use Yoerioptr\TabtApiClient\Models\EntryType\ClubEntryType;

/**
 * Class GetClubsResponseType
 *
 * @package Yoerioptr\TabtApiClient\Models\ResponseType
 */
class GetClubsResponseType
{
    /**
     * @var int
     */
    private $clubCount;

    /**
     * @var ClubEntryType[]
     */
    private $clubEntries = [];

    /**
     * GetClubsResponseType constructor.
     *
     * @param object $response
     */
    public function __construct(object $response)
    {
        $this->clubCount = $response->ClubCount;

        if ($this->clubCount !== 0) {
            if (is_array($response->ClubEntries)) {
                foreach ($response->ClubEntries as $clubEntry) {
                    $this->clubEntries[] = new ClubEntryType($clubEntry);
                }
            }
            elseif (is_object($response->ClubEntries)) {
                $this->clubEntries[] = new ClubEntryType($response->ClubEntries);
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
     * @return ClubEntryType|ClubEntryType[]
     */
    public function getClubEntries()
    {
        return $this->clubEntries;
    }
}
