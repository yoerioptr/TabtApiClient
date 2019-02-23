<?php

namespace Yoerioptr\TabtApiClient\Requests;

use SoapClient;

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
     * @return array
     */
    public function getParameters(): array;

    /**
     * @param SoapClient $soapClient
     */
    public function setSoapClient(SoapClient $soapClient);

    /**
     * @return mixed
     */
    public function handle();
}
