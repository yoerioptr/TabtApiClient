<?php

namespace Yoerioptr\TabtApiClient\Repository;

use Yoerioptr\TabtApiClient\Request\GetPlayerCategoriesRequest;
use Yoerioptr\TabtApiClient\Response\GetPlayerCategoriesResponse;

/**
 * Class PlayerCategoryRepository
 *
 * @package Yoerioptr\TabtApiClient\Repository
 */
final class PlayerCategoryRepository extends RepositoryBase
{

    /**
     * @return GetPlayerCategoriesResponse
     */
    public function listPlayerCategories(): GetPlayerCategoriesResponse
    {
        $request = new GetPlayerCategoriesRequest();

        return $this->client->handleRequest($request);
    }

    /**
     * @param array $parameters
     *
     * @return GetPlayerCategoriesResponse
     */
    public function listPlayerCategoriesBy(array $parameters): GetPlayerCategoriesResponse
    {
        $request = new GetPlayerCategoriesRequest($parameters);

        return $this->client->handleRequest($request);
    }

}
