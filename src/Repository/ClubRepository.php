<?php

namespace Yoerioptr\TabtApiClient\Repository;

use Yoerioptr\TabtApiClient\Request\GetClubTeamsRequest;
use Yoerioptr\TabtApiClient\Response\ResponseInterface;

/**
 * Class ClubRepository
 *
 * @package Yoerioptr\TabtApiClient\Repository
 */
class ClubRepository extends RepositoryBase
{
    /**
     * @param string $club
     *
     * @return ResponseInterface
     */
    public function listTeamsByClub(string $club): ResponseInterface
    {
        $request = new GetClubTeamsRequest(
            [
                'Club' => $club,
            ]
        );

        return $this->client->handleRequest($request);
    }

    public function listTeamsByClubAndSeason(string $club, int $season): ResponseInterface
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
