<?php

namespace Yoerioptr\TabtApiClient\Repositories;

use Yoerioptr\TabtApiClient\Models\TestResponseType;
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
        $request = new TestRequest(
            [
                'Credentials' => $this->credentials,
            ]
        );

        return new TestResponseType(
            $this->handleRequest($request)
        );
    }
}
