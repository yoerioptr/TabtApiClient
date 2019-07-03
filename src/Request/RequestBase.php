<?php


namespace Yoerioptr\TabtApiClient\Request;

/**
 * Class RequestBase
 *
 * @package Yoerioptr\TabtApiClient\Request
 */
abstract class RequestBase implements RequestInterface
{
    public function __construct(array $parameters = null)
    {
        $this->parameters = $parameters;
    }

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
