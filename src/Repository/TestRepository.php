<?php

namespace Yoerioptr\TabtApiClient\Repository;

use Yoerioptr\TabtApiClient\Request\TestRequest;
use Yoerioptr\TabtApiClient\Response\TestResponse;

/**
 * Class TestRepository
 *
 * @package Yoerioptr\TabtApiClient\Repository
 */
class TestRepository extends RepositoryBase
{
    /**
     * @return TestResponse
     */
    public function info(): TestResponse
    {
        return $this->client->handleRequest(new TestRequest());
    }
}
