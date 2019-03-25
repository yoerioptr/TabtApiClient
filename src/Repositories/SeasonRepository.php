<?php

namespace Yoerioptr\TabtApiClient\Repositories;

use Yoerioptr\TabtApiClient\Models\GetSeasonsResponseType;
use Yoerioptr\TabtApiClient\Requests\GetSeasonsRequest;

/**
 * Class SeasonRepository
 *
 * @package Yoerioptr\TabtApiClient\Repositories
 */
class SeasonRepository extends RepositoryBase
{
    /**
     * @return GetSeasonsResponseType
     */
    public function getSeasons(): GetSeasonsResponseType
    {
        $request = new GetSeasonsRequest($this->mergeCredentials());

        return new GetSeasonsResponseType(
            $this->handleRequest($request)
        );
    }
}
