<?php

namespace Yoerioptr\TabtApiClient\Tabt;

use Yoerioptr\TabtApiClient\Models\RequestType\CredentialsType;
use Yoerioptr\TabtApiClient\Repositories\ClubRepository;
use Yoerioptr\TabtApiClient\Repositories\DivisionRepository;
use Yoerioptr\TabtApiClient\Repositories\SeasonRepository;
use Yoerioptr\TabtApiClient\Repositories\TestRepository;

/**
 * Class Tabt
 *
 * @package Yoerioptr\TabtApiClient\Tabt
 */
class Tabt implements TabtInterface
{
    /**
     * @var \SoapClient
     */
    private $soapClient;

    /**
     * @var CredentialsType|null
     */
    private $credentials;

    /**
     * Tabt constructor.
     *
     * @param CredentialsType|null $credentials
     */
    public function __construct(?CredentialsType $credentials = null)
    {
        $this->soapClient = new \SoapClient('http://api.vttl.be?wsdl');
        $this->credentials = $credentials;
    }

    /**
     * @return TestRepository
     */
    public function test(): TestRepository
    {
        return new TestRepository($this->soapClient, $this->credentials);
    }

    /**
     * @return DivisionRepository
     */
    public function division(): DivisionRepository
    {
        return new DivisionRepository($this->soapClient, $this->credentials);
    }

    /**
     * @return SeasonRepository
     */
    public function season(): SeasonRepository
    {
        return new SeasonRepository($this->soapClient, $this->credentials);
    }

    /**
     * @return ClubRepository
     */
    public function club(): ClubRepository
    {
        return new ClubRepository($this->soapClient, $this->credentials);
    }
}