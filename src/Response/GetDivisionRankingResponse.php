<?php

namespace Yoerioptr\TabtApiClient\Response;

use Yoerioptr\TabtApiClient\Entries\RankingEntry;
use Yoerioptr\TabtApiClient\Traits\HydratesProperties;

/**
 * Class GetDivisionRankingResponse
 *
 * @package Yoerioptr\TabtApiClient\Response
 */
final class GetDivisionRankingResponse implements ResponseInterface
{

    use HydratesProperties;

    /**
     * @var string
     */
    private string $divisionName;

    /**
     * @var RankingEntry[]
     */
    private array $rankingEntries = [];

    /**
     * GetDivisionRankingResponse constructor.
     *
     * @param $rawResponse
     */
    public function __construct(mixed $rawResponse)
    {
        foreach ((array) $rawResponse as $key => $value) {
            if ($key !== 'RankingEntries') {
                $property = lcfirst($key);
                $this->hydrateProperty($property, $value);
                continue;
            }

            foreach ($value as $rankingEntry) {
                $this->rankingEntries[] = new RankingEntry($rankingEntry);
            }
        }
    }

    /**
     * @return string
     */
    public function getDivisionName(): string
    {
        return $this->divisionName;
    }

    /**
     * @return RankingEntry[]
     */
    public function getRankingEntries(): array
    {
        return $this->rankingEntries;
    }

}
