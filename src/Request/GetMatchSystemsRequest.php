<?php

namespace Yoerioptr\TabtApiClient\Request;

use Yoerioptr\TabtApiClient\Response\GetMatchesResponse;
use Yoerioptr\TabtApiClient\Response\GetMatchSystemsResponse;

/**
 * Class GetMatchSystemsRequest
 *
 * @package Yoerioptr\TabtApiClient\Request
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

    /**
     * @return string
     */
    public function getResponseClass(): string
    {
        return GetMatchSystemsResponse::class;
    }
}
