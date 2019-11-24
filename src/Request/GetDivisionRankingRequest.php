<?php

namespace Yoerioptr\TabtApiClient\Request;

use Yoerioptr\TabtApiClient\Response\GetDivisionRankingResponse;

/**
 * Class GetDivisionRankingRequest
 *
 * @package Yoerioptr\TabtApiClient\Request
 */
class GetDivisionRankingRequest extends RequestBase
{

    /**
     * {@inheritDoc}
     */
    public function getEndpoint(): string
    {
        return 'GetDivisionRanking';
    }

    /**
     * {@inheritDoc}
     */
    public function getResponseClass(): string
    {
        return GetDivisionRankingResponse::class;
    }

}
