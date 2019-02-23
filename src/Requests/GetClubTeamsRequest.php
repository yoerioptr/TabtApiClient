<?php

namespace Yoerioptr\TabtApiClient\Requests;

/**
 * Class GetClubTeamsRequest
 *
 * @package Yoerioptr\TabtApiClient\Requests
 */
class GetClubTeamsRequest extends RequestBase
{
    /**
     * @return string
     */
    public function getEndpoint(): string
    {
        return 'GetClubTeams';
    }
}
