<?php

namespace Yoerioptr\TabtApiClient\Models\ResponseType;

use Yoerioptr\TabtApiClient\Models\EntryType\RankingEntryType;
use Yoerioptr\TabtApiClient\Models\ResponseTypeInterface;

/**
 * Class GetDivisionRankingResponseType
 *
 * @package Yoerioptr\TabtApiClient\Models\ResponseType
 */
class GetDivisionRankingResponseType implements ResponseTypeInterface
{
    /**
     * @var string
     */
    private $divisionName;

    /**
     * @var RankingEntryType[]
     */
    private $rankingEntries = [];

    /**
     * GetDivisionRankingResponseType constructor.
     *
     * @param $response
     */
    public function __construct($response)
    {
        $this->divisionName = $response->DivisionName;

        if (is_array($response->RankingEntries)) {
            foreach ($response->RankingEntries as $rankingEntry) {
                $this->rankingEntries[] = new RankingEntryType($rankingEntry);
            }
        }
        elseif (is_object($response->RankingEntries)) {
            $this->rankingEntries[] = new RankingEntryType($response->DivisionEntries);
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
     * @return RankingEntryType[]
     */
    public function getRankingEntries(): array
    {
        return $this->rankingEntries;
    }
}
