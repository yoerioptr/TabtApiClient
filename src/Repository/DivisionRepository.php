<?php

namespace Yoerioptr\TabtApiClient\Repository;

use Yoerioptr\TabtApiClient\Request\GetDivisionRankingRequest;
use Yoerioptr\TabtApiClient\Request\GetDivisionsRequest;
use Yoerioptr\TabtApiClient\Response\GetDivisionRankingResponse;
use Yoerioptr\TabtApiClient\Response\GetDivisionsResponse;

/**
 * Class DivisionRepository
 *
 * @package Yoerioptr\TabtApiClient\Repository
 */
final class DivisionRepository extends RepositoryBase
{

    /**
     * @return GetDivisionsResponse
     */
    public function listDivisions(): GetDivisionsResponse
    {
        $request = new GetDivisionsRequest();

        return $this->client->handleRequest($request);
    }

    /**
     * @param array $parameters
     *
     * @return GetDivisionsResponse
     */
    public function listDivisionsBy(array $parameters): GetDivisionsResponse
    {
        $request = new GetDivisionsRequest($parameters);

        return $this->client->handleRequest($request);
    }

    /**
     * @param array $parameters
     *
     * @return GetDivisionRankingResponse
     */
    public function listDivisionRankingBy(array $parameters): GetDivisionRankingResponse
    {
        $request = new GetDivisionRankingRequest($parameters);

        return $this->client->handleRequest($request);
    }

    /**
     * @param int $divisionId
     *
     * @return GetDivisionRankingResponse
     */
    public function listDivisionRankingByDivisionId(int $divisionId): GetDivisionRankingResponse
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
     * @return GetDivisionRankingResponse
     */
    public function listDivisionRankingByDivisionIdAndWeekName(int $divisionId, string $weekName): GetDivisionRankingResponse
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
