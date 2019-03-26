<?php

namespace Yoerioptr\TabtApiClient\Requests;

use Yoerioptr\TabtApiClient\Models\RequestTypeInterface;

/**
 * Interface RequestInterface
 *
 * @package Yoeriopt\TabtApiClient\Requests
 */
interface RequestInterface
{
    /**
     * @return string
     */
    public function getEndpoint(): string;

    /**
     * @return RequestTypeInterface|null
     */
    public function getRequestType(): ?RequestTypeInterface;

    /**
     * @param \SoapClient $soapClient
     */
    public function setSoapClient(\SoapClient $soapClient);

    /**
     * @return object
     */
    public function handle(): object;
}
