<?php

namespace Yoerioptr\TabtApiClient\Repositories;

use Yoerioptr\TabtApiClient\Models\GetDivisionRankingResponseType;
use Yoerioptr\TabtApiClient\Models\GetDivisionsResponseType;
use Yoerioptr\TabtApiClient\Models\RequestType\RequestTypeInterface;
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
     * @param RequestTypeInterface $requestType
     *
     * @return GetDivisionsResponseType|null
     */
    public function getDivisions(?RequestTypeInterface $requestType = null): GetDivisionsResponseType
    {
        $request = new GetDivisionsRequest(
            $this->mergeCredentials($requestType)
        );

        return new GetDivisionsResponseType(
            $this->handleRequest($request)
        );
    }

    /**
     * @param RequestTypeInterface|null $requestType
     *
     * @return GetDivisionRankingResponseType
     */
    public function getDivisionRanking(?RequestTypeInterface $requestType): GetDivisionRankingResponseType
    {
        $request = new GetDivisionRankingRequest(
            $this->mergeCredentials($requestType)
        );

        return new GetDivisionRankingResponseType(
            $this->handleRequest($request)
        );
    }
}
