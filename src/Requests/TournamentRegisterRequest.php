<?php

namespace Yoerioptr\TabtApiClient\Requests;

/**
 * Class TournamentRegisterRequest
 *
 * @package Yoerioptr\TabtApiClient\Requests
 */
class TournamentRegisterRequest extends RequestBase
{
    /**
     * @return string
     */
    public function getEndpoint(): string
    {
        return 'TournamentRegister';
    }
}
