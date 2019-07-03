<?php

namespace Yoerioptr\TabtApiClient\Request;

/**
 * Interface RequestInterface
 *
 * @package Yoerioptr\TabtApiClient\Requests
 */
interface RequestInterface
{
    /**
     * @return string
     */
    public function getEndpoint(): string;

    /**
     * @return string
     */
    public function getResponseClass(): string;

    /**
     * @return array
     */
    public function getParameters(): ?array;
}
