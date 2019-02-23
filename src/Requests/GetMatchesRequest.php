<?php

namespace Yoerioptr\TabtApiClient\Requests;

/**
 * Class GetMatchesRequest
 *
 * @package Yoerioptr\TabtApiClient\Requests
 */
class GetMatchesRequest extends RequestBase
{
    /**
     * @return string
     */
    public function getEndpoint(): string
    {
        return 'GetMatches';
    }
}
