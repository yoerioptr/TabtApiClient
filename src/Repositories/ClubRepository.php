<?php

namespace Yoerioptr\TabtApiClient\Repositories;

use Yoerioptr\TabtApiClient\Models\CredentialsType;
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
     * @param string $Club
     * @param int $Season
     * @param CredentialsType|null $credentialsType
     *
     * @return GetClubTeamsResponseType
     */
    public function executeGetClubTeamsRequest(
        string $Club,
        int $Season,
        CredentialsType $credentialsType = null
    ): GetClubTeamsResponseType {
        $request = new GetClubTeamsRequest(
            [
                'Credentials' => $credentialsType,
                'Club' => $Club,
                'Season' => $Season,
            ]
        );
        $request->setSoapClient($this->soapClient);
        $response = $request->handle();

        return new GetClubTeamsResponseType($response);
    }

    /**
     * @param string|null $Club
     * @param int|null $ClubCategory
     * @param int|null $Season
     * @param CredentialsType|null $credentialsType
     *
     * @return GetClubsResponseType
     */
    public function executeGetClubsRequest(
        string $Club = null,
        int $ClubCategory = null,
        int $Season = null,
        CredentialsType $credentialsType = null
    ): GetClubsResponseType {
        $request = new GetClubsRequest(
            [
                'Credentials' => $credentialsType,
                'Club' => $Club,
                'ClubCategory' => $ClubCategory,
                'Season' => $Season,
            ]
        );
        $request->setSoapClient($this->soapClient);
        $response = $request->handle();

        dump($response);
        return new GetClubsResponseType($response);
    }
}
