<?php

namespace Yoerioptr\TabtApiClient\Repository;

use Yoerioptr\TabtApiClient\Request\GetMatchesRequest;
use Yoerioptr\TabtApiClient\Request\GetMatchSystemsRequest;
use Yoerioptr\TabtApiClient\Response\GetMatchesResponse;
use Yoerioptr\TabtApiClient\Response\GetMatchSystemsResponse;
use Yoerioptr\TabtApiClient\Response\ResponseInterface;

/**
 * Class MatchRepository
 *
 * @package Yoerioptr\TabtApiClient\Repository
 */
class MatchRepository extends RepositoryBase
{
    /**
     * @param array $parameters
     *
     * @return GetMatchesResponse
     */
    public function listMatchesBy(array $parameters): ResponseInterface
    {
        $request = new GetMatchesRequest($parameters);

        return $this->client->handleRequest($request);
    }

    /**
     * @param int $divisionId
     *
     * @return GetMatchesResponse
     */
    public function listMatchesByDivisionId(int $divisionId): ResponseInterface
    {
        $request = new GetMatchesRequest(
            [
                'DivisionId' => $divisionId,
            ]
        );

        return $this->client->handleRequest($request);
    }

    /**
     * @param string $club
     *
     * @return GetMatchesResponse
     */
    public function listMatchesByClub(string $club): ResponseInterface
    {
        $request = new GetMatchesRequest(
            [
                'Club' => $club,
            ]
        );

        return $this->client->handleRequest($request);
    }

    /**
     * @return GetMatchSystemsResponse
     */
    public function listMatchSystems(): ResponseInterface
    {
        $request = new GetMatchSystemsRequest();

        return $this->client->handleRequest($request);
    }
}
