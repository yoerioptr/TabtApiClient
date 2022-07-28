<?php

namespace Yoerioptr\TabtApiClient\Client;

use SoapClient;
use Yoerioptr\TabtApiClient\Entries\CredentialsType;
use Yoerioptr\TabtApiClient\Request\RequestInterface;
use Yoerioptr\TabtApiClient\Response\ResponseInterface;

/**
 * Class Client
 *
 * @package Yoerioptr\TabtApiClient\Client
 */
final class Client implements ClientInterface
{

    /**
     * @var SoapClient
     */
    private SoapClient $soapClient;

    /**
     * @var CredentialsType|null
     */
    private ?CredentialsType $credentials = null;

    /**
     * Client constructor.
     */
    public function __construct()
    {
        $this->soapClient = new SoapClient("https://api.vttl.be/0.7/?wsdl");
    }

    /**
     * @param CredentialsType $credentials
     */
    public function setCredentials(CredentialsType $credentials): void
    {
        $this->credentials = $credentials;
    }

    /**
     * @param RequestInterface $request
     *
     * @return ResponseInterface
     */
    public function handleRequest(RequestInterface $request): ResponseInterface
    {
        $parameters = array_merge(
            $request->getParameters() ?: [],
            $this->credentials ? $this->credentials->toArray() : []
        );

        $endpoint = $request->getEndpoint();
        $responseClass = $request->getResponseClass();

        $rawResponse = $this->soapClient->$endpoint($parameters);

        return new $responseClass($rawResponse);
    }

}
