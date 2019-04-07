<?php

namespace Yoerioptr\TabtApiClient\Models\RequestType;

use DateTime;
use Yoerioptr\TabtApiClient\Models\RequestTypeInterface;

/**
 * Class GetMatchesRequestType
 *
 * @package Yoerioptr\TabtApiClient\Models\RequestType
 */
class GetMatchesRequestType implements RequestTypeInterface
{
    public const PARAM_DIVISION_ID = 'DivisionId';
    public const PARAM_CLUB = 'Club';
    public const PARAM_WEEK_NAME = 'WeekName';
    public const PARAM_MATCH_UNIQUE_ID = 'MatchUniqueId';

    /**
     * @var int|null
     */
    public $DivisionId;

    /**
     * @var string|null
     */
    public $Club;

    /**
     * @var string|null
     */
    public $Team;

    /**
     * @var int|null
     */
    public $DivisionCategory;

    /**
     * @var int|null
     */
    public $Season;

    /**
     * @var string|null
     */
    public $WeekName;

    /**
     * @var int|null
     */
    public $Level;

    /**
     * @var string|null
     */
    public $ShowDivisionName;

    /**
     * @var DateTime
     */
    public $YearDateFrom;

    /**
     * @var DateTime
     */
    public $YearDateTo;

    /**
     * @var bool|null
     */
    public $WithDetails;

    /**
     * @var string|null
     */
    public $MatchId;

    /**
     * @var string|null
     */
    public $MatchUniqueId;

    /**
     * @param string $param
     * @param mixed $value
     *
     * @return GetMatchesRequestType
     */
    public static function createBy(string $param, $value): self
    {
        $requestType = new static();
        
        $requestType->$param = $value;

        return $requestType;
    }
}
