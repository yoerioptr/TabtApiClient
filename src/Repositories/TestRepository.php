<?php

namespace Yoerioptr\TabtApiClient\Repositories;

use Yoerioptr\TabtApiClient\Models\CredentialsType;
use Yoerioptr\TabtApiClient\Models\TestResponseType;
use Yoerioptr\TabtApiClient\Requests\TestRequest;

/**
 * Class TestRepository
 */
class TestRepository extends RepositoryBase
{
    /**
     * @param CredentialsType|null $credentialsType
     *
     * @return TestResponseType
     * @throws \Exception
     */
    public function executeTestRequest(
        CredentialsType $credentialsType = null
    ): TestResponseType {
        $request = new TestRequest(
            [
                'Credentials' => $credentialsType,
            ]
        );
        $request->setSoapClient($this->soapClient);
        $response = $request->handle();

        return new TestResponseType($response);
    }
}
