<?php

namespace Yoerioptr\TabtApiClient\Response;

use Yoerioptr\TabtApiClient\Entries\RankingEntry;

/**
 * Class GetDivisionRankingResponse
 *
 * @package Yoerioptr\TabtApiClient\Response
 */
class GetDivisionRankingResponse implements ResponseInterface
{

    /**
     * @var string
     */
    private $divisionName;

    /**
     * @var RankingEntry[]
     */
    private $rankingEntries = [];

    /**
     * GetDivisionRankingResponse constructor.
     *
     * @param $rawResponse
     */
    public function __construct($rawResponse)
    {
        foreach ((array) $rawResponse as $key => $value) {
            if ($key !== 'RankingEntries') {
                $property = lcfirst($key);
                $this->$property = $value;
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
