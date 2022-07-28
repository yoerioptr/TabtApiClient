<?php

namespace Yoerioptr\TabtApiClient\Request;

use Yoerioptr\TabtApiClient\Response\GetMatchesResponse;
use Yoerioptr\TabtApiClient\Response\GetMatchSystemsResponse;

/**
 * Class GetMatchSystemsRequest
 *
 * @package Yoerioptr\TabtApiClient\Request
 */
final class GetMatchSystemsRequest extends RequestBase
{

    /**
     * {@inheritDoc}
     */
    public function getEndpoint(): string
    {
        return 'GetMatchSystems';
    }

    /**
     * {@inheritDoc}
     */
    public function getResponseClass(): string
    {
        return GetMatchSystemsResponse::class;
    }

}
