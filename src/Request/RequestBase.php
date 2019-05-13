<?php


namespace Yoerioptr\TabtApiClient\Request;

/**
 * Class RequestBase
 *
 * @package Yoerioptr\TabtApiClient\Request
 */
abstract class RequestBase implements RequestInterface
{
    /**
     * @var array
     */
    protected $parameters;

    /**
     * @return array
     */
    public function getParameters(): ?array
    {
        return $this->parameters;
    }
}
