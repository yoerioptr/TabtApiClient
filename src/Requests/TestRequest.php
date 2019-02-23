<?php

namespace Yoerioptr\TabtApiClient\Requests;

use Yoerioptr\TabtApiClient\Models\Credentials;

/**
 * Class TestRequest
 *
 * @package Yoeriopt\TabtApiClient\Requests
 */
class TestRequest extends RequestBase
{
    /**
     * TestRequest constructor.
     *
     * @param array|null $credentials
     */
    public function __construct(array $credentials = null)
    {
        $this->parameters = $credentials;
    }

    /**
     * @return string
     */
    public function getEndpoint(): string
    {
        return 'Test';
    }
}
