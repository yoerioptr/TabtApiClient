<?php

namespace Yoerioptr\TabtApiClient\Repositories;

use Yoerioptr\TabtApiClient\Models\ResponseType\TestResponseType;
use Yoerioptr\TabtApiClient\Requests\TestRequest;

/**
 * Class TestRepository
 */
class TestRepository extends RepositoryBase
{
    /**
     * @return TestResponseType
     * @throws \Exception
     */
    public function info(): TestResponseType
    {
        $request = new TestRequest($this->mergeCredentials());

        return new TestResponseType(
            $this->handleRequest($request)
        );
    }
}
