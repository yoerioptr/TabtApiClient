<?php

namespace Yoerioptr\TabtApiClient\Request;

use Yoerioptr\TabtApiClient\Response\GetClubTeamsResponse;

/**
 * Class GetClubTeamsRequest
 *
 * @package Yoerioptr\TabtApiClient\Request
 */
final class GetClubTeamsRequest extends RequestBase
{

    /**
     * {@inheritDoc}
     */
    public function getEndpoint(): string
    {
        return 'GetClubTeams';
    }

    /**
     * {@inheritDoc}
     */
    public function getResponseClass(): string
    {
        return GetClubTeamsResponse::class;
    }

}
