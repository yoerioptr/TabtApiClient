<?php

namespace Yoerioptr\TabtApiClient\Requests;

/**
 * Class GetTournamentsRequest
 *
 * @package Yoerioptr\TabtApiClient\Requests
 */
class GetTournamentsRequest extends RequestBase
{
    /**
     * @return string
     */
    public function getEndpoint(): string
    {
        return 'GetTournaments';
    }
}
