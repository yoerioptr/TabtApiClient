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
     * @return string
     */
    public function getEndpoint(): string
    {
        return 'GetDivisionRanking';
    }

    /**
     * @return string
     */
    public function getResponseClass(): string
    {
        return GetDivisionRankingResponse::class;
    }
}
