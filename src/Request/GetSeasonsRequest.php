<?php

namespace Yoerioptr\TabtApiClient\Request;

use Yoerioptr\TabtApiClient\Response\GetSeasonsResponse;

/**
 * Class GetSeasonsRequest
 *
 * @package Yoerioptr\TabtApiClient\Request
 */
class GetSeasonsRequest extends RequestBase
{
    /**
     * {@inheritDoc}
     */
    public function getEndpoint(): string
    {
        return 'GetSeasons';
    }

    /**
     * {@inheritDoc}
     */
    public function getResponseClass(): string
    {
        return GetSeasonsResponse::class;
    }
}
