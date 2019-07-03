<?php


namespace Yoerioptr\TabtApiClient\Client;

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
}
