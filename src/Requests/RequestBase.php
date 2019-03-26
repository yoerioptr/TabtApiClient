<?php

namespace Yoerioptr\TabtApiClient\Requests;

use Yoerioptr\TabtApiClient\Models\RequestTypeInterface;

/**
 * Class RequestBase
 *
 * @package Yoeriopt\TabtApiClient\Requests
 */
abstract class RequestBase implements RequestInterface
{
    /**
     * @var RequestTypeInterface|null
     */
    protected $requestType;

    /**
     * @var \SoapClient
     */
    protected $soapClient;

    /**
     * RequestBase constructor.
     *
     * @param RequestTypeInterface|null $requestType
     */
    public function __construct(?RequestTypeInterface $requestType = null)
    {
        $this->requestType = $requestType;
    }

    /**
     * @return RequestTypeInterface|null
     */
    public function getRequestType(): ?RequestTypeInterface
    {
        return $this->requestType;
    }

    /**
     * @param \SoapClient $soapClient
     */
    public function setSoapClient(\SoapClient $soapClient)
    {
        $this->soapClient = $soapClient;
    }

    /**
     * @return object
     */
    public function handle(): object
    {
        $function = $this->getEndpoint();
        $response = $this->soapClient->$function($this->requestType);

        return $response;
    }
}
