<?php

namespace Yoerioptr\TabtApiClient\Requests;

/**
 * Class GetMatchSystemsRequest
 *
 * @package Yoerioptr\TabtApiClient\Requests
 */
class GetMatchSystemsRequest extends RequestBase
{
    /**
     * @return string
     */
    public function getEndpoint(): string
    {
        return 'GetMatchSystems';
    }
}
