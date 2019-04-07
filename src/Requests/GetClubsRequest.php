<?php

namespace Yoerioptr\TabtApiClient\Requests;

/**
 * Class GetClubsRequest
 *
 * @package Yoerioptr\TabtApiClient\Requests
 */
class GetClubsRequest extends RequestBase
{
    /**
     * @return string
     */
    public function getEndpoint(): string
    {
        return 'GetClubs';
    }
}
