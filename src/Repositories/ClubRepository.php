<?php

namespace Yoerioptr\TabtApiClient\Repositories;

use Yoerioptr\TabtApiClient\Models\RequestTypeInterface;
use Yoerioptr\TabtApiClient\Models\ResponseType\GetClubsResponseType;
use Yoerioptr\TabtApiClient\Models\ResponseType\GetClubTeamsResponseType;
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
     * @param RequestTypeInterface $requestType
     *
     * @return GetClubTeamsResponseType
     */
    public function getClubTeams(
        RequestTypeInterface $requestType
    ): GetClubTeamsResponseType {
        $request = new GetClubTeamsRequest(
            $this->mergeCredentials($requestType)
        );

        return new GetClubTeamsResponseType(
            $this->handleRequest($request)
        );
    }

    /**
     * @param RequestTypeInterface|null $requestType
     *
     * @return GetClubsResponseType
     */
    public function getClubs(
        ?RequestTypeInterface $requestType = null
    ): GetClubsResponseType {
        $request = new GetClubsRequest(
            $this->mergeCredentials($requestType)
        );

        return new GetClubsResponseType(
            $this->handleRequest($request)
        );
    }
}
