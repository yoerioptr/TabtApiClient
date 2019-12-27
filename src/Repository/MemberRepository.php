<?php

namespace Yoerioptr\TabtApiClient\Repository;

use Yoerioptr\TabtApiClient\Request\GetMembersRequest;
use Yoerioptr\TabtApiClient\Response\GetMembersResponse;
use Yoerioptr\TabtApiClient\Response\ResponseInterface;

/**
 * Class MemberRepository
 *
 * @package Yoerioptr\TabtApiClient\Repository
 */
class MemberRepository extends RepositoryBase
{

    /**
     * @param array $parameters
     *
     * @return GetMembersResponse
     */
    public function listMembersBy(array $parameters): ResponseInterface
    {
        $request = new GetMembersRequest($parameters);

        return $this->client->handleRequest($request);
    }

    /**
     * @param string $club
     *
     * @return GetMembersResponse
     */
    public function listMembersByClub(string $club): ResponseInterface
    {
        $request = new GetMembersRequest(
            [
                'Club' => $club,
            ]
        );

        return $this->client->handleRequest($request);
    }

}
