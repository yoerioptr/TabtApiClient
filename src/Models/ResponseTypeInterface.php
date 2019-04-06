<?php

namespace Yoerioptr\TabtApiClient\Models;

/**
 * Interface ResponseTypeInterface
 *
 * @package Yoerioptr\TabtApiClient\Models
 */
interface ResponseTypeInterface
{
    /**
     * ResponseTypeInterface constructor.
     *
     * @param object $response
     */
    public function __construct(object $response);
}
