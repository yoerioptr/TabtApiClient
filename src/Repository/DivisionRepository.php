<?php

namespace Yoerioptr\TabtApiClient\Repository;

use http\Client;
use Yoerioptr\TabtApiClient\Request\GetDivisionRankingRequest;
use Yoerioptr\TabtApiClient\Response\ResponseInterface;

/**
 * Class DivisionRepository
 *
 * @package Yoerioptr\TabtApiClient\Repository
 */
class DivisionRepository extends RepositoryBase
{
    /**
     * @param int $divisionId
     *
     * @return ResponseInterface
     */
    public function listDivisionsRankingByDivisionId(int $divisionId): ResponseInterface
    {
        $request = new GetDivisionRankingRequest(
            [
                'DivisionId' => $divisionId,
            ]
        );

        return $this->client->handleRequest($request);
    }

    /**
     * @param int $divisionId
     * @param string $weekName
     *
     * @return ResponseInterface
     */
    public function listDivisionRankingByDivisionIdAndWeekName(int $divisionId, string $weekName): ResponseInterface
    {
        $request = new GetDivisionRankingRequest(
            [
                'DivisionId' => $divisionId,
                'WeekName' => $weekName,
            ]
        );

        return $this->client->handleRequest($request);
    }
}
