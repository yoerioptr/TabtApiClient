<?php

namespace Yoerioptr\TabtApiClient\Requests;

/**
 * Class TestRequest
 *
 * @package Yoeriopt\TabtApiClient\Requests
 */
class TestRequest extends RequestBase
{
    /**
     * @return string
     */
    public function getEndpoint(): string
    {
        return 'Test';
    }
}
