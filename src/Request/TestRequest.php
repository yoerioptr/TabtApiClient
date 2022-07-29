<?php

namespace Yoerioptr\TabtApiClient\Request;

use Yoerioptr\TabtApiClient\Response\TestResponse;

/**
 * Class TestRequest
 *
 * @package Yoerioptr\TabtApiClient\Request
 */
final class TestRequest extends RequestBase
{

    /**
     * {@inheritDoc}
     */
    public function getEndpoint(): string
    {
        return 'Test';
    }

    /**
     * {@inheritDoc}
     */
    public function getResponseClass(): string
    {
        return TestResponse::class;
    }

}
