<?php

namespace Yoerioptr\TabtApiClient\Models\ResponseType;

use Yoerioptr\TabtApiClient\Models\EntryType\SeasonEntryType;

/**
 * Class GetSeasonsResponseType
 *
 * @package Yoerioptr\TabtApiClient\Models\ResponseType
 */
class GetSeasonsResponseType
{
    /**
     * @var int
     */
    private $CurrentSeason;

    /**
     * @var string
     */
    private $CurrentSeasonName;

    /**
     * @var SeasonEntryType[]
     */
    private $SeasonEntries;

    /**
     * GetSeasonsResponseType constructor.
     *
     * @param object $response
     */
    public function __construct(object $response)
    {
        $this->CurrentSeason = $response->CurrentSeason;
        $this->CurrentSeasonName = $response->CurrentSeasonName;
        foreach ($response->SeasonEntries as $seasonEntry) {
            $this->SeasonEntries[] = new SeasonEntryType($seasonEntry);
        }
    }

    /**
     * @return int
     */
    public function getCurrentSeason(): int
    {
        return $this->CurrentSeason;
    }

    /**
     * @return string
     */
    public function getCurrentSeasonName(): string
    {
        return $this->CurrentSeasonName;
    }

    /**
     * @return SeasonEntryType[]
     */
    public function getSeasonEntries(): array
    {
        return $this->SeasonEntries;
    }
}
