<?php

namespace Yoerioptr\TabtApiClient\Repository;

use Yoerioptr\TabtApiClient\Request\GetMembersRequest;
use Yoerioptr\TabtApiClient\Response\GetMembersResponse;

/**
 * Class MemberRepository
 *
 * @package Yoerioptr\TabtApiClient\Repository
 */
final class MemberRepository extends RepositoryBase
{

    /**
     * @param array $parameters
     *
     * @return GetMembersResponse
     */
    public function listMembersBy(array $parameters): GetMembersResponse
    {
        $request = new GetMembersRequest($parameters);

        return $this->client->handleRequest($request);
    }

    /**
     * @param string $club
     *
     * @return GetMembersResponse
     */
    public function listMembersByClub(string $club): GetMembersResponse
    {
        $request = new GetMembersRequest(
            [
                'Club' => $club,
            ]
        );

        return $this->client->handleRequest($request);
    }

}
