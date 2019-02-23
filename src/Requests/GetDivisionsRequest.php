<?php

namespace Yoerioptr\TabtApiClient\Requests;

/**
 * Class GetDivisionsRequest
 *
 * @package Yoerioptr\TabtApiClient\Requests
 */
class GetDivisionsRequest extends RequestBase
{
    /**
     * @return string
     */
    public function getEndpoint(): string
    {
        return 'GetDivisions';
    }
}
