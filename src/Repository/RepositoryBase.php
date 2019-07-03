<?php

namespace Yoerioptr\TabtApiClient\Repository;

use Yoerioptr\TabtApiClient\Client\ClientInterface;

/**
 * Class RepositoryBase
 *
 * @package Yoerioptr\TabtApiClient\Repository
 */
abstract class RepositoryBase
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * RepositoryBase constructor.
     *
     * @param ClientInterface $client
     */
    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }
}
