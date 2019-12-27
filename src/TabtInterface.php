<?php

namespace Yoerioptr\TabtApiClient;

use Yoerioptr\TabtApiClient\Repository\ClubRepository;
use Yoerioptr\TabtApiClient\Repository\DivisionRepository;
use Yoerioptr\TabtApiClient\Repository\MatchRepository;
use Yoerioptr\TabtApiClient\Repository\MemberRepository;
use Yoerioptr\TabtApiClient\Repository\SeasonRepository;
use Yoerioptr\TabtApiClient\Repository\TestRepository;

/**
 * Interface TabtInterface
 *
 * @package Yoerioptr\TabtApiClient
 */
interface TabtInterface
{

    /**
     * @return TestRepository
     */
    public function test(): TestRepository;

    /**
     * @return SeasonRepository
     */
    public function seasons(): SeasonRepository;

    /**
     * @return ClubRepository
     */
    public function club(): ClubRepository;

    /**
     * @return DivisionRepository
     */
    public function division(): DivisionRepository;

    /**
     * @return MatchRepository
     */
    public function match(): MatchRepository;

    /**
     * @return MemberRepository
     */
    public function member(): MemberRepository;

}
