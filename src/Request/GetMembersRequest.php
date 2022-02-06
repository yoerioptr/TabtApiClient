<?php

namespace Yoerioptr\TabtApiClient\Request;

use Yoerioptr\TabtApiClient\Response\GetMembersResponse;

/**
 * Class GetMembersRequest
 *
 * @package Yoerioptr\TabtApiClient\Request
 */
final class GetMembersRequest extends RequestBase
{

    /**
     * {@inheritDoc}
     */
    public function getEndpoint(): string
    {
        return 'GetMembers';
    }

    /**
     * {@inheritDoc}
     */
    public function getResponseClass(): string
    {
        return GetMembersResponse::class;
    }

}
