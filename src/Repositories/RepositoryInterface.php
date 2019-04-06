<?php

namespace Yoerioptr\TabtApiClient\Repositories;

use Yoerioptr\TabtApiClient\Models\Credentials\Credentials;

/**
 * Interface RepositoryInterface
 *
 * @package Yoerioptr\TabtApiClient\Repositories
 */
interface RepositoryInterface
{
    /**
     * RepositoryInterface constructor.
     *
     * @param \SoapClient $soapClient
     * @param Credentials|null $credentials
     */
    public function __construct(\SoapClient $soapClient, ?Credentials $credentials);
}
