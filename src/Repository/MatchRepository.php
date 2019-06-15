<?php

namespace Yoerioptr\TabtApiClient\Repository;

use Yoerioptr\TabtApiClient\Request\GetMatchesRequest;
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

    public function listMatchesByDivisionId(int $divisionId): ResponseInterface
    {
        $request = new GetMatchesRequest(
            [
                'DivisionId' => $divisionId,
            ]
        );

        return $this->client->handleRequest($request);
    }
}
