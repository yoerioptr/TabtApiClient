<?php

namespace Yoerioptr\TabtApiClient\Response;

use Yoerioptr\TabtApiClient\Entries\SeasonEntry;

/**
 * Class GetSeasonsResponse
 *
 * @package Yoerioptr\TabtApiClient\Response
 */
class GetSeasonsResponse implements ResponseInterface
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
     * @var SeasonEntry[]
     */
    private $seasonEntries = [];

    /**
     * GetSeasonsResponse constructor.
     *
     * @param $rawResponse
     */
    public function __construct($rawResponse)
    {
        foreach ((array) $rawResponse as $key => $value) {
            if ($key !== 'SeasonEntries') {
                $property = lcfirst($key);
                $this->$property = $value;
                continue;
            }

            foreach ($value as $seasonEntry) {
                $this->seasonEntries[] = new SeasonEntry($seasonEntry);
            }
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
     * @return SeasonEntry[]
     */
    public function getSeasonEntries(): array
    {
        return $this->seasonEntries;
    }
}
