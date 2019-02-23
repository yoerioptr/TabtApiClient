<?php

namespace Yoerioptr\TabtApiClient\Requests;

/**
 * Class UploadRequest
 *
 * @package Yoerioptr\TabtApiClient\Requests
 */
class UploadRequest extends RequestBase
{
    /**
     * @return string
     */
    public function getEndpoint(): string
    {
        return 'Upload';
    }
}
