<?php

namespace Yoerioptr\TabtApiClient\Repository;

use Yoerioptr\TabtApiClient\Request\GetMembersRequest;
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
     * @return ResponseInterface
     */
    public function listMembersBy(array $parameters): ResponseInterface
    {
        $request = new GetMembersRequest($parameters);

        return $this->client->handleRequest($request);
    }

    /**
     * @param string $club
     *
     * @return ResponseInterface
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
