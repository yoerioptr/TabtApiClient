<?php

namespace Yoerioptr\TabtApiClient\Tabt;

use Yoerioptr\TabtApiClient\Models\Credentials\Credentials;
use Yoerioptr\TabtApiClient\Repositories\ClubRepository;
use Yoerioptr\TabtApiClient\Repositories\DivisionRepository;
use Yoerioptr\TabtApiClient\Repositories\MatchRepository;
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
     * @var Credentials|null
     */
    private $credentials;

    /**
     * Tabt constructor.
     *
     * @param Credentials|null $credentials
     */
    public function __construct(?Credentials $credentials = null)
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

    /**
     * @return MatchRepository
     */
    public function match(): MatchRepository
    {
        return new MatchRepository($this->soapClient, $this->credentials);
    }
}
