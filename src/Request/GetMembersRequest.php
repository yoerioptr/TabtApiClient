<?php

namespace Yoerioptr\TabtApiClient\Request;

use Yoerioptr\TabtApiClient\Response\GetMembersResponse;

/**
 * Class GetMembersRequest
 *
 * @package Yoerioptr\TabtApiClient\Request
 */
class GetMembersRequest extends RequestBase
{
    /**
     * @return string
     */
    public function getEndpoint(): string
    {
        return 'GetMembers';
    }

    /**
     * @return string
     */
    public function getResponseClass(): string
    {
        return GetMembersResponse::class;
    }
}
