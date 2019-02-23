<?php

namespace Yoerioptr\TabtApiClient\Requests;

/**
 * Class GetMembersRequest
 *
 * @package Yoerioptr\TabtApiClient\Requests
 */
class GetMembersRequest extends RequestBase
{
    /**
     * @return string
     */
    public function getEndpoint(): string
    {
        return 'GetMembersRequest';
    }
}
