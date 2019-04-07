<?php

namespace Yoerioptr\TabtApiClient\Requests;

/**
 * Class GetSeasonsRequest
 *
 * @package Yoerioptr\TabtApiClient\Requests
 */
class GetSeasonsRequest extends RequestBase
{
    /**
     * @return string
     */
    public function getEndpoint(): string
    {
        return 'GetSeasons';
    }
}
