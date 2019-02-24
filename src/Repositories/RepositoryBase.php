<?php

namespace Yoerioptr\TabtApiClient\Repositories;

use SoapClient;

/**
 * Class RepositoryBase
 *
 * @package Yoerioptr\TabtApiClient\Repositories
 */
abstract class RepositoryBase
{
    /**
     * @var SoapClient
     */
    protected $soapClient;

    /**
     * RepositoryBase constructor.
     *
     * @param SoapClient $soapClient
     */
    public function __construct(SoapClient $soapClient)
    {
        $this->soapClient = $soapClient;
    }
}
