<?php

namespace Yoerioptr\TabtApiClient\Repositories;

use Yoerioptr\TabtApiClient\Models\CredentialsType;
use Yoerioptr\TabtApiClient\Models\GetDivisionRankingResponseType;
use Yoerioptr\TabtApiClient\Models\GetDivisionsResponseType;
use Yoerioptr\TabtApiClient\Requests\GetDivisionRankingRequest;
use Yoerioptr\TabtApiClient\Requests\GetDivisionsRequest;

/**
 * Class DivisionRepository
 *
 * @package Yoerioptr\TabtApiClient\Repositories
 */
class DivisionRepository extends RepositoryBase
{
    /**
     * @param int|null $Season
     * @param int|null $Level
     * @param string|null $ShowDivisionName
     * @param CredentialsType|null $Credentials
     *
     * @return GetDivisionsResponseType
     */
    public function executeGetDivisionRequest(
        int $Season = null,
        int $Level = null,
        string $ShowDivisionName = null,
        CredentialsType $Credentials = null
    ): GetDivisionsResponseType {
        $request = new GetDivisionsRequest(
            [
                'Credentials' => $Credentials,
                'Season' => $Season,
                'Level' => $Level,
                'ShowDivisionName' => $ShowDivisionName,
            ]
        );
        $request->setSoapClient($this->soapClient);
        $response = $request->handle();

        return new GetDivisionsResponseType($response);
    }

    /**
     * @param int $DivisionId
     * @param string $WeekName
     * @param string|null $RankingSystem
     * @param CredentialsType|null $Credentials
     *
     * @return GetDivisionRankingResponseType
     */
    public function executeGetDivisionRankingRequest(
        int $DivisionId,
        string $WeekName = null,
        string $RankingSystem = null,
        CredentialsType $Credentials = null
    ): GetDivisionRankingResponseType {
        $request = new GetDivisionRankingRequest(
            [
                'Credentials' => $Credentials,
                'DivisionId' => $DivisionId,
                'WeekName' => $WeekName,
                'RankingSystem' => $RankingSystem,
            ]
        );
        $request->setSoapClient($this->soapClient);
        $response = $request->handle();

        return new GetDivisionRankingResponseType($response);
    }
}
