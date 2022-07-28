<?php

namespace Yoerioptr\TabtApiClient\Client;

use Yoerioptr\TabtApiClient\Entries\CredentialsType;
use Yoerioptr\TabtApiClient\Request\RequestInterface;
use Yoerioptr\TabtApiClient\Response\ResponseInterface;

/**
 * Interface ClientInterface
 *
 * @package Yoerioptr\TabtApiClient\Client
 */
interface ClientInterface
{

    /**
     * @param RequestInterface $request
     *
     * @return ResponseInterface
     */
    public function handleRequest(RequestInterface $request): ResponseInterface;

    /**
     * @param CredentialsType $credentials
     */
    public function setCredentials(CredentialsType $credentials): void;

}
