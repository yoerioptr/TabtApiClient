<?php

namespace Yoerioptr\TabtApiClient\Repository;

use Yoerioptr\TabtApiClient\Request\GetMatchesRequest;
use Yoerioptr\TabtApiClient\Request\GetMatchSystemsRequest;
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
     * @return ResponseInterface
     */
    public function listMatchesBy(array $parameters): ResponseInterface
    {
        $request = new GetMatchesRequest($parameters);

        return $this->client->handleRequest($request);
    }

    /**
     * @param int $divisionId
     *
     * @return ResponseInterface
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
     * @return ResponseInterface
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
     * @return ResponseInterface
     */
    public function listMatchSystems(): ResponseInterface
    {
        $request = new GetMatchSystemsRequest([]);

        return $this->client->handleRequest($request);
    }
}
