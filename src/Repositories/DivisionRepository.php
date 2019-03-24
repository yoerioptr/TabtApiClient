<?php

namespace Yoerioptr\TabtApiClient\Repositories;

use Yoerioptr\TabtApiClient\Models\GetDivisionRankingResponseType;
use Yoerioptr\TabtApiClient\Models\GetDivisionsResponseType;
use Yoerioptr\TabtApiClient\Requests\GetDivisionRankingRequest;
use Yoerioptr\TabtApiClient\Requests\GetDivisionsRequest;

/**
 * Class DivisionRepository
 *
 * @package Yoerioptr\TabtApiClient\Repositories
 */
class DivisionRepository extends RepositoryBase
{
    /**
     * @param int|null $season
     * @param int|null $level
     * @param string $showDivisionName
     *
     * @return GetDivisionsResponseType
     */
    public function getDivisions(
        int $season = null,
        int $level = null,
        string $showDivisionName = null
    ): GetDivisionsResponseType {
        $request = new GetDivisionsRequest(
            [
                'Credentials' => $this->credentials,
                'Season' => $season,
                'Level' => $level,
                'ShowDivisionName' => $showDivisionName,
            ]
        );

        return new GetDivisionsResponseType(
            $this->handleRequest($request)
        );
    }

    /**
     * @param int $divisionId
     * @param string|null $weekName
     * @param string|null $rankingSystem
     *
     * @return GetDivisionRankingResponseType
     */
    public function getDivisionRanking(
        int $divisionId,
        string $weekName = null,
        string $rankingSystem = null
    ): GetDivisionRankingResponseType {
        $request = new GetDivisionRankingRequest(
            [
                'Credentials' => $this->credentials,
                'DivisionId' => $divisionId,
                'WeekName' => $weekName,
                'RankingSystem' => $rankingSystem,
            ]
        );

        return new GetDivisionRankingResponseType(
            $this->handleRequest($request)
        );
    }
}
