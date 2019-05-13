<?php

namespace Yoerioptr\TabtApiClient\Request;

use Yoerioptr\TabtApiClient\Response\TestResponse;

/**
 * Class TestRequest
 *
 * @package Yoerioptr\TabtApiClient\Request
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

    /**
     * @return string
     */
    public function getResponseClass(): string
    {
        return TestResponse::class;
    }
}
