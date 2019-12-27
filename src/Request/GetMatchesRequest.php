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

    public const SHOW_DIVISION_NAME = 'yes';

    public const HIDE_DIVISION_NAME = 'no';

    public const SHORT_DIVISION_NAME = 'short';

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
