<?php

namespace Yoerioptr\TabtApiClient\Repositories;

use Yoerioptr\TabtApiClient\Models\GetClubsResponseType;
use Yoerioptr\TabtApiClient\Models\GetClubTeamsResponseType;
use Yoerioptr\TabtApiClient\Requests\GetClubsRequest;
use Yoerioptr\TabtApiClient\Requests\GetClubTeamsRequest;

/**
 * Class ClubRepository
 *
 * @package Yoerioptr\TabtApiClient\Repositories
 */
class ClubRepository extends RepositoryBase
{
    /**
     * @param string $club
     * @param int $season
     *
     * @return GetClubTeamsResponseType
     */
    public function getClubTeams(
        string $club,
        int $season
    ): GetClubTeamsResponseType {
        $request = new GetClubTeamsRequest(
            [
                'Credentials' => $this->credentials,
                'Club' => $club,
                'Season' => $season,
            ]
        );

        return new GetClubTeamsResponseType(
            $this->handleRequest($request)
        );
    }

    /**
     * @param string|null $club
     * @param int|null $clubCategory
     * @param int|null $season
     *
     * @return GetClubsResponseType
     */
    public function getClubs(
        string $club = null,
        int $clubCategory = null,
        int $season = null
    ): GetClubsResponseType {
        $request = new GetClubsRequest(
            [
                'Credentials' => $this->credentials,
                'Club' => $club,
                'ClubCategory' => $clubCategory,
                'Season' => $season,
            ]
        );

        return new GetClubsResponseType(
            $this->handleRequest($request)
        );
    }
}
