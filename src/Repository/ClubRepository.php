<?php

namespace Yoerioptr\TabtApiClient\Repository;

use Yoerioptr\TabtApiClient\Request\GetClubsRequest;
use Yoerioptr\TabtApiClient\Request\GetClubTeamsRequest;
use Yoerioptr\TabtApiClient\Response\GetClubsResponse;
use Yoerioptr\TabtApiClient\Response\GetClubTeamsResponse;

/**
 * Class ClubRepository
 *
 * @package Yoerioptr\TabtApiClient\Repository
 */
final class ClubRepository extends RepositoryBase
{

    /**
     * @return GetClubsResponse
     */
    public function listClubs(): GetClubsResponse
    {
        $request = new GetClubsRequest();

        return $this->client->handleRequest($request);
    }

    /**
     * @param string $club
     *
     * @return GetClubTeamsResponse
     */
    public function listTeamsByClub(string $club): GetClubTeamsResponse
    {
        $request = new GetClubTeamsRequest(
            [
                'Club' => $club,
            ]
        );

        return $this->client->handleRequest($request);
    }

    /**
     * @param string $club
     * @param int $season
     *
     * @return GetClubTeamsResponse
     */
    public function listTeamsByClubAndSeason(string $club, int $season): GetClubTeamsResponse
    {
        $request = new GetClubTeamsRequest(
            [
                'Club' => $club,
                'Season' => $season,
            ]
        );

        return $this->client->handleRequest($request);
    }

}
