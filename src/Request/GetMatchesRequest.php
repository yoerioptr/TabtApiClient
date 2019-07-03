<?php

namespace Yoerioptr\TabtApiClient\Request;

use Yoerioptr\TabtApiClient\Response\GetMatchesResponse;

/**
 * Class GetMatchesRequest
 *
 * @package Yoerioptr\TabtApiClient\Request
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

    /**
     * @return string
     */
    public function getResponseClass(): string
    {
        return GetMatchesResponse::class;
    }
}
