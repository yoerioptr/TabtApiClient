<?php

namespace Yoerioptr\TabtApiClient\Client;

use SoapClient;
use Yoerioptr\TabtApiClient\Request\RequestInterface;
use Yoerioptr\TabtApiClient\Response\ResponseInterface;

/**
 * Class Client
 *
 * @package Yoerioptr\TabtApiClient\Client
 */
class Client implements ClientInterface
{
    /**
     * @var SoapClient
     */
    private $soapClient;

    /**
     * Client constructor.
     *
     * @param SoapClient $soapClient
     */
    public function __construct(SoapClient $soapClient)
    {
        $this->soapClient = $soapClient;
    }

    /**
     * @param RequestInterface $request
     *
     * @return ResponseInterface
     */
    public function handleRequest(RequestInterface $request): ResponseInterface
    {
        $endpoint = $request->getEndpoint();
        $parameters = $request->getParameters();
        $responseClass = $request->getResponseClass();

        $rawResponse = $this->soapClient->$endpoint($parameters);

        return new $responseClass($rawResponse);
    }
}
