<?php

namespace Yoerioptr\TabtApiClient\Repositories;

use Yoerioptr\TabtApiClient\Models\CredentialsType;
use Yoerioptr\TabtApiClient\Models\GetClubTeamsResponseType;
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
}
