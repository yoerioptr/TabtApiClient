<?php

namespace Yoerioptr\TabtApiClient\Repository;

use Yoerioptr\TabtApiClient\Request\GetSeasonsRequest;
use Yoerioptr\TabtApiClient\Response\GetSeasonsResponse;
use Yoerioptr\TabtApiClient\Response\ResponseInterface;

/**
 * Class SeasonRepository
 *
 * @package Yoerioptr\TabtApiClient\Repository
 */
class SeasonRepository extends RepositoryBase
{
    /**
     * @return GetSeasonsResponse
     */
    public function listSeasons(): ResponseInterface
    {
        $request = new GetSeasonsRequest();

        return $this->client->handleRequest($request);
    }
}
