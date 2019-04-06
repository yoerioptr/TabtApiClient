<?php

namespace Yoerioptr\TabtApiClient\Repositories;

use Exception;
use Yoerioptr\TabtApiClient\Models\RequestTypeInterface;
use Yoerioptr\TabtApiClient\Models\ResponseType\GetMatchesResponseType;
use Yoerioptr\TabtApiClient\Models\ResponseType\GetMatchSystemsResponseType;
use Yoerioptr\TabtApiClient\Requests\GetMatchesRequest;
use Yoerioptr\TabtApiClient\Requests\GetMatchSystemsRequest;

/**
 * Class MatchRepository
 *
 * @package Yoerioptr\TabtApiClient\Repositories
 */
class MatchRepository extends RepositoryBase
{
    /**
     * @param RequestTypeInterface|null $requestType
     *
     * @return GetMatchesResponseType
     * @throws Exception
     */
    public function getMatches(
        ?RequestTypeInterface $requestType = null
    ): GetMatchesResponseType {
        $request = new GetMatchesRequest(
            $this->mergeCredentials($requestType)
        );

        return new GetMatchesResponseType(
            $this->handleRequest($request)
        );
    }

    /**
     * @param RequestTypeInterface|null $requestType
     *
     * @return GetMatchSystemsResponseType
     */
    public function getMatchSystems(
        ?RequestTypeInterface $requestType = null
    ): GetMatchSystemsResponseType {
        $request = new GetMatchSystemsRequest(
            $this->mergeCredentials($requestType)
        );

        return new GetMatchSystemsResponseType(
            $this->handleRequest($request)
        );
    }
}
