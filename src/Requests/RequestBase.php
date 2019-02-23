<?php

namespace Yoerioptr\TabtApiClient\Requests;

use SoapClient;

/**
 * Class RequestBase
 *
 * @package Yoeriopt\TabtApiClient\Requests
 */
abstract class RequestBase implements RequestInterface
{
    /**
     * @var mixed|null
     */
    protected $parameters;

    /**
     * @var SoapClient
     */
    protected $soapClient;

    /**
     * @return array
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }

    /**
     * @param SoapClient $soapClient
     */
    public function setSoapClient(SoapClient $soapClient)
    {
        $this->soapClient = $soapClient;
    }

    /**
     * @return mixed
     */
    public function handle()
    {
        $function = $this->getEndpoint();
        $response = $this->soapClient->$function($this->parameters);

        return $response;
    }
}
