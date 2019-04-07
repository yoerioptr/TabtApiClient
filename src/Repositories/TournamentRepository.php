<?php

namespace Yoerioptr\TabtApiClient\Repositories;

use Exception;
use Yoerioptr\TabtApiClient\Models\RequestTypeInterface;
use Yoerioptr\TabtApiClient\Models\ResponseType\GetTournamentsResponseType;
use Yoerioptr\TabtApiClient\Requests\GetTournamentsRequest;

/**
 * Class TournamentRepository
 *
 * @package Yoerioptr\TabtApiClient\Repositories
 */
class TournamentRepository extends RepositoryBase
{
    /**
     * @param RequestTypeInterface|null $requestType
     *
     * @return GetTournamentsResponseType
     * @throws Exception
     */
    public function getTournaments(
        ?RequestTypeInterface $requestType = null
    ): GetTournamentsResponseType {
        $request = new GetTournamentsRequest(
            $this->mergeCredentials($requestType)
        );

        return new GetTournamentsResponseType(
            $this->handleRequest($request)
        );
    }
}
