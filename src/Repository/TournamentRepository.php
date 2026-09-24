<?php

namespace Yoerioptr\TabtApiClient\Repository;

use Yoerioptr\TabtApiClient\Request\GetTournamentsRequest;
use Yoerioptr\TabtApiClient\Response\GetTournamentsResponse;

/**
 * Class TournamentRepository
 *
 * @package Yoerioptr\TabtApiClient\Repository
 */
final class TournamentRepository extends RepositoryBase
{

    /**
     * @return GetTournamentsResponse
     */
    public function listTournaments(): GetTournamentsResponse
    {
        $request = new GetTournamentsRequest();

        return $this->client->handleRequest($request);
    }

    /**
     * @param array $parameters
     *
     * @return GetTournamentsResponse
     */
    public function listTournamentsBy(array $parameters): GetTournamentsResponse
    {
        $request = new GetTournamentsRequest($parameters);

        return $this->client->handleRequest($request);
    }

}
