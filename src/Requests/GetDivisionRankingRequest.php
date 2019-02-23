<?php

namespace Yoerioptr\TabtApiClient\Requests;

/**
 * Class GetDivisionRankingRequest
 *
 * @package Yoerioptr\TabtApiClient\Requests
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
}
