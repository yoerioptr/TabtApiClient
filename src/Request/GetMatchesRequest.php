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
     * {@inheritDoc}
     */
    public function getEndpoint(): string
    {
        return 'GetMatches';
    }

    /**
     * {@inheritDoc}
     */
    public function getResponseClass(): string
    {
        return GetMatchesResponse::class;
    }
}
