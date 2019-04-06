<?php

namespace Yoerioptr\TabtApiClient\Models\EntryType;

use Yoerioptr\TabtApiClient\Models\EntryTypeInterface;

/**
 * Class TeamMatchesEntryType
 *
 * @package Yoerioptr\TabtApiClient\Models\EntryType
 */
class TeamMatchesEntryType implements EntryTypeInterface
{
    /**
     * @var string
     */
    private $MatchId;

    /**
     * @var string
     */
    private $WeekName;

    /**
     * @var \DateTime
     */
    private $Date;

    /**
     * @var string
     */
    private $Time;

    /**
     * @var string
     */
    private $Venue;

    /**
     * @var string
     */
    private $HomeClub;

    /**
     * @var string
     */
    private $HomeTeam;

    /**
     * @var string
     */
    private $AwayClub;

    /**
     * @var string
     */
    private $AwayTeam;

    /**
     * @var string
     */
    private $Score;

    /**
     * @var string
     */
    private $NextWeekName;

    /**
     * @var bool
     */
    private $IsHomeForfeited;

    /**
     * @var bool
     */
    private $IsAwayForfeited;

    /**
     * @var int
     */
    private $DivisionId;

    /**
     * @var int
     */
    private $DivisionCategory;

    /**
     * @var string
     */
    private $isHomeWithdrawn;

    /**
     * @var string
     */
    private $isAwayWithdrawn;

    /**
     * TeamMatchesEntryType constructor.
     *
     * @param object $response
     */
    public function __construct(object $response)
    {
        dump($response);
        die;
    }
}
