<?php

namespace Yoerioptr\TabtApiClient\Request;

use Yoerioptr\TabtApiClient\Response\GetPlayerCategoriesResponse;

/**
 * Class GetPlayerCategoriesRequest
 *
 * @package Yoerioptr\TabtApiClient\Request
 */
final class GetPlayerCategoriesRequest extends RequestBase
{

    /**
     * {@inheritDoc}
     */
    public function getEndpoint(): string
    {
        return 'GetPlayerCategories';
    }

    /**
     * {@inheritDoc}
     */
    public function getResponseClass(): string
    {
        return GetPlayerCategoriesResponse::class;
    }

}
