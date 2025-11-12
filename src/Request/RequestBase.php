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
     * RequestBase constructor.
     *
     * @param array|null $parameters
     */
    public function __construct(?array $parameters = null)
    {
        $this->parameters = $parameters;
    }

    /**
     * @var array|null
     */
    protected $parameters;

    /**
     * {@inheritDoc}
     */
    public function getParameters(): ?array
    {
        return $this->parameters;
    }

}
