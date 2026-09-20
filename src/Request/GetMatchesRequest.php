<?php

namespace Yoerioptr\TabtApiClient\Request;

use Yoerioptr\TabtApiClient\Response\GetMatchesResponse;

/**
 * Class GetMatchesRequest
 *
 * @package Yoerioptr\TabtApiClient\Request
 */
final class GetMatchesRequest extends RequestBase
{

    public const string SHOW_DIVISION_NAME = 'yes';

    public const string HIDE_DIVISION_NAME = 'no';

    public const string SHORT_DIVISION_NAME = 'short';

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
