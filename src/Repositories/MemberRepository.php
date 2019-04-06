<?php

namespace Yoerioptr\TabtApiClient\Repositories;

use Yoerioptr\TabtApiClient\Models\RequestTypeInterface;
use Yoerioptr\TabtApiClient\Models\ResponseType\GetMembersResponseType;
use Yoerioptr\TabtApiClient\Requests\GetMembersRequest;

/**
 * Class MemberRepository
 *
 * @package Yoerioptr\TabtApiClient\Repositories
 */
class MemberRepository extends RepositoryBase
{
    /**
     * @param RequestTypeInterface|null $requestType
     *
     * @return GetMembersResponseType
     */
    public function getMembers(
        ?RequestTypeInterface $requestType = null
    ): GetMembersResponseType {
        $request = new GetMembersRequest(
            $this->mergeCredentials($requestType)
        );

        return new GetMembersResponseType(
            $this->handleRequest($request)
        );
    }
}
