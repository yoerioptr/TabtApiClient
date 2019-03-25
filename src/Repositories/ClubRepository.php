<?php

namespace Yoerioptr\TabtApiClient\Repositories;

use Yoerioptr\TabtApiClient\Models\GetClubsResponseType;
use Yoerioptr\TabtApiClient\Models\GetClubTeamsResponseType;
use Yoerioptr\TabtApiClient\Models\RequestType\RequestTypeInterface;
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
     * @param RequestTypeInterface|null $requestType
     *
     * @return GetClubTeamsResponseType
     */
    public function getClubTeams(?RequestTypeInterface $requestType = null): GetClubTeamsResponseType
    {
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
    public function getClubs(?RequestTypeInterface $requestType = null): GetClubsResponseType
    {
        $request = new GetClubsRequest(
            $this->mergeCredentials($requestType)
        );

        return new GetClubsResponseType(
            $this->handleRequest($request)
        );
    }
}
