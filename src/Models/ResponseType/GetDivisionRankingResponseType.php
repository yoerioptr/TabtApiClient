<?php

namespace Yoerioptr\TabtApiClient\Models\ResponseType;

use Yoerioptr\TabtApiClient\Models\EntryType\RankingEntryType;

/**
 * Class GetDivisionRankingResponseType
 *
 * @package Yoerioptr\TabtApiClient\Models\ResponseType
 */
class GetDivisionRankingResponseType
{
    /**
     * @var string
     */
    private $DivisionName;

    /**
     * @var RankingEntryType[]
     */
    private $RankingEntries;

    /**
     * GetDivisionRankingResponseType constructor.
     *
     * @param object $response
     */
    public function __construct(object $response)
    {
        $this->DivisionName = $response->DivisionName;
        foreach ($response->RankingEntries as $rankingEntry) {
            $this->RankingEntries[] = new RankingEntryType($rankingEntry);
        }
    }

    /**
     * @return string
     */
    public function getDivisionName(): string
    {
        return $this->DivisionName;
    }

    /**
     * @return RankingEntryType[]
     */
    public function getRankingEntries(): array
    {
        return $this->RankingEntries;
    }
}
