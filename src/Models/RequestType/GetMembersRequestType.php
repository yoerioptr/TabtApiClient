<?php

namespace Yoerioptr\TabtApiClient\Models\RequestType;

use Yoerioptr\TabtApiClient\Models\RequestTypeInterface;

/**
 * Class GetMembersRequestType
 *
 * @package Yoerioptr\TabtApiClient\Models\RequestType
 */
class GetMembersRequestType implements RequestTypeInterface
{
    public const PARAM_CLUB = 'Club';
    public const PARAM_UNIQUE_INDEX = 'UniqueIndex';
    public const PARAM_NAME_SEARCH = 'NameSearch';

    /**
     * @var string
     */
    public $Club;

    /**
     * @var int
     */
    public $Season;

    /**
     * @var int
     */
    public $PlayerCategory;

    /**
     * @var int
     */
    public $UniqueIndex;

    /**
     * @var string
     */
    public $NameSearch;

    /**
     * @var bool
     */
    public $ExtendedInformation;

    /**
     * @var bool
     */
    public $RankingPointsInformation;

    /**
     * @var bool
     */
    public $WithResults;

    /**
     * @var bool
     */
    public $WithOpponentRankingEvaluation;

    /**
     * @param string $param
     * @param mixed $value
     *
     * @return GetMembersRequestType
     */
    public static function createBy(string $param, $value): self
    {
        $requestType = new static();

        $requestType->$param = $value;

        return $requestType;
    }
}
