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
    private $currentSeason;

    /**
     * @var string
     */
    private $currentSeasonName;

    /**
     * @var SeasonEntryType[]
     */
    private $seasonEntries = [];

    /**
     * GetSeasonsResponseType constructor.
     *
     * @param object $response
     */
    public function __construct(object $response)
    {
        $this->currentSeason = $response->CurrentSeason;
        $this->currentSeasonName = $response->CurrentSeasonName;

        if (is_array($response->SeasonEntries)) {
            foreach ($response->SeasonEntries as $seasonEntry) {
                $this->seasonEntries[] = new SeasonEntryType($seasonEntry);
            }
        }
        elseif (is_object($response->SeasonEntries)) {
            $this->seasonEntries[] = new SeasonEntryType($response->SeasonEntries);
        }
    }

    /**
     * @return int
     */
    public function getCurrentSeason(): int
    {
        return $this->currentSeason;
    }

    /**
     * @return string
     */
    public function getCurrentSeasonName(): string
    {
        return $this->currentSeasonName;
    }

    /**
     * @return SeasonEntryType[]
     */
    public function getSeasonEntries(): array
    {
        return $this->seasonEntries;
    }
}
