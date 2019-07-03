<?php

namespace Yoerioptr\TabtApiClient;

use Yoerioptr\TabtApiClient\Client\ClientInterface;
use Yoerioptr\TabtApiClient\Repository\ClubRepository;
use Yoerioptr\TabtApiClient\Repository\DivisionRepository;
use Yoerioptr\TabtApiClient\Repository\MatchRepository;
use Yoerioptr\TabtApiClient\Repository\MemberRepository;
use Yoerioptr\TabtApiClient\Repository\SeasonRepository;
use Yoerioptr\TabtApiClient\Repository\TestRepository;

/**
 * Class Tabt
 *
 * @package Yoerioptr\TabtApiClient
 */
class Tabt
{
    /**
     * @var ClientInterface
     */
    private $client;

    /**
     * Tabt constructor.
     *
     * @param ClientInterface $client
     */
    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * @return TestRepository
     */
    public function test(): TestRepository
    {
        return new TestRepository($this->client);
    }

    /**
     * @return SeasonRepository
     */
    public function seasons(): SeasonRepository
    {
        return new SeasonRepository($this->client);
    }

    /**
     * @return ClubRepository
     */
    public function club(): ClubRepository
    {
        return new ClubRepository($this->client);
    }

    /**
     * @return DivisionRepository
     */
    public function division(): DivisionRepository
    {
        return new DivisionRepository($this->client);
    }

    /**
     * @return MatchRepository
     */
    public function match(): MatchRepository
    {
        return new MatchRepository($this->client);
    }

    /**
     * @return MemberRepository
     */
    public function member(): MemberRepository
    {
        return new MemberRepository($this->client);
    }
}
