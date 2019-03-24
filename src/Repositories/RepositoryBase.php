<?php

namespace Yoerioptr\TabtApiClient\Repositories;

use SoapClient;
use Yoerioptr\TabtApiClient\Models\CredentialsType;
use Yoerioptr\TabtApiClient\Models\ResponseTypeInterface;
use Yoerioptr\TabtApiClient\Requests\RequestInterface;

/**
 * Class RepositoryBase
 *
 * @package Yoerioptr\TabtApiClient\Repositories
 */
abstract class RepositoryBase
{
    /**
     * @var SoapClient
     */
    private $soapClient;

    /**
     * @var CredentialsType
     */
    protected $credentials;

    /**
     * RepositoryBase constructor.
     *
     * @param SoapClient $soapClient
     * @param CredentialsType $credentials
     */
    public function __construct(
        SoapClient $soapClient,
        ?CredentialsType $credentials
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
}
