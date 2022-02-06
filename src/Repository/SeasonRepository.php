<?php

namespace Yoerioptr\TabtApiClient\Repository;

use Yoerioptr\TabtApiClient\Request\GetSeasonsRequest;
use Yoerioptr\TabtApiClient\Response\GetSeasonsResponse;

/**
 * Class SeasonRepository
 *
 * @package Yoerioptr\TabtApiClient\Repository
 */
final class SeasonRepository extends RepositoryBase
{

    /**
     * @return GetSeasonsResponse
     */
    public function listSeasons(): GetSeasonsResponse
    {
        $request = new GetSeasonsRequest();

        return $this->client->handleRequest($request);
    }

}
