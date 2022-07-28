<?php

namespace Yoerioptr\TabtApiClient\Repository;

use Yoerioptr\TabtApiClient\Request\TestRequest;
use Yoerioptr\TabtApiClient\Response\TestResponse;

/**
 * Class TestRepository
 *
 * @package Yoerioptr\TabtApiClient\Repository
 */
final class TestRepository extends RepositoryBase
{

    /**
     * @return TestResponse
     */
    public function info(): TestResponse
    {
        $request = new TestRequest();

        return $this->client->handleRequest($request);
    }

}
