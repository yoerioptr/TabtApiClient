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
     * @return string
     */
    public function getEndpoint(): string
    {
        return 'GetSeasons';
    }

    /**
     * @return string
     */
    public function getResponseClass(): string
    {
        return GetSeasonsResponse::class;
    }
}
