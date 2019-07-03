<?php

namespace Yoerioptr\TabtApiClient\Request;

use Yoerioptr\TabtApiClient\Response\GetClubTeamsResponse;

/**
 * Class GetClubTeamsRequest
 *
 * @package Yoerioptr\TabtApiClient\Request
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

    /**
     * @return string
     */
    public function getResponseClass(): string
    {
        return GetClubTeamsResponse::class;
    }
}
