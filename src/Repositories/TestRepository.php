<?php

namespace Yoerioptr\TabtApiClient\Repositories;

use SoapClient;
use Yoerioptr\TabtApiClient\Models\CredentialsType;
use Yoerioptr\TabtApiClient\Models\TestResponseType;
use Yoerioptr\TabtApiClient\Requests\TestRequest;

/**
 * Class TestRepository
 */
class TestRepository
{
    /**
     * @var SoapClient
     */
    private $soapClient;

    /**
     * TestRepository constructor.
     *
     * @param SoapClient $soapClient
     */
    public function __construct(SoapClient $soapClient)
    {
        $this->soapClient = $soapClient;
    }

    /**
     * @param CredentialsType|null $credentialsType
     *
     * @return TestResponseType
     * @throws \Exception
     */
    public function executeTestRequest(CredentialsType $credentialsType = null): TestResponseType
    {
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
