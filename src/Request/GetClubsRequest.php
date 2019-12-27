<?php

namespace Yoerioptr\TabtApiClient\Request;

use Yoerioptr\TabtApiClient\Response\GetClubsResponse;

/**
 * Class GetClubsRequest
 *
 * @package Yoerioptr\TabtApiClient\Request
 */
class GetClubsRequest extends RequestBase
{

    /**
     * {@inheritDoc}
     */
    public function getEndpoint(): string
    {
        return 'GetClubs';
    }

    /**
     * {@inheritDoc}
     */
    public function getResponseClass(): string
    {
        return GetClubsResponse::class;
    }

}
