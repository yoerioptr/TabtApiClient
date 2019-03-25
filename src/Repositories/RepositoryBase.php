<?php

namespace Yoerioptr\TabtApiClient\Repositories;

use Yoerioptr\TabtApiClient\Models\RequestType\CredentialsType;
use Yoerioptr\TabtApiClient\Models\RequestType\RequestType;
use Yoerioptr\TabtApiClient\Models\RequestType\RequestTypeInterface;
use Yoerioptr\TabtApiClient\Requests\RequestInterface;

/**
 * Class RepositoryBase
 *
 * @package Yoerioptr\TabtApiClient\Repositories
 */
abstract class RepositoryBase
{
    /**
     * @var \SoapClient
     */
    private $soapClient;

    /**
     * @var CredentialsType
     */
    private $credentials;

    /**
     * RepositoryBase constructor.
     *
     * @param \SoapClient $soapClient
     * @param CredentialsType|null $credentials
     */
    public function __construct(
        \SoapClient $soapClient,
        ?CredentialsType $credentials = null
    ) {
        $this->soapClient = $soapClient;
        $this->credentials = $credentials;
    }

    /**
     * @param RequestInterface $request
     *
     * @return object
     */
    protected function handleRequest(RequestInterface $request): object
    {
        $request->setSoapClient($this->soapClient);

        return $request->handle();
    }

    /**
     * @param RequestTypeInterface|null $requestType
     *
     * @return RequestTypeInterface|null
     */
    protected function mergeCredentials(?RequestTypeInterface $requestType = null): ?RequestTypeInterface
    {
        $requestType = $requestType ?? new RequestType();
        $requestType->Credentials = $this->credentials ?? null;

        return $requestType;
    }
}
