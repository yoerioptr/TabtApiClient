<?php

namespace Yoerioptr\TabtApiClient\Repositories;

use Yoerioptr\TabtApiClient\Models\CredentialsType;
use Yoerioptr\TabtApiClient\Models\GetSeasonsResponseType;
use Yoerioptr\TabtApiClient\Requests\GetSeasonsRequest;

/**
 * Class SeasonRepository
 *
 * @package Yoerioptr\TabtApiClient\Repositories
 */
class SeasonRepository extends RepositoryBase
{
    public function executeGetSeasonsRequest(CredentialsType $credentialsType = null)
    {
        $request = new GetSeasonsRequest(
            [
                'Credentials' => $credentialsType,
            ]
        );
        $request->setSoapClient($this->soapClient);
        $response = $request->handle();

        return new GetSeasonsResponseType($response);
    }
}
