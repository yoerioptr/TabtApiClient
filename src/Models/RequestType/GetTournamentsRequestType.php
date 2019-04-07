<?php

namespace Yoerioptr\TabtApiClient\Models\RequestType;

use Yoerioptr\TabtApiClient\Models\RequestTypeInterface;

/**
 * Class GetTournamentsRequestType
 *
 * @package Yoerioptr\TabtApiClient\Models\RequestType
 */
class GetTournamentsRequestType implements RequestTypeInterface
{
    public const PARAM_SEASON = 'Season';
    public const PARAM_TOURNAMENT_UNIQUE_INDEX = 'TournamentUniqueIndex';

    /**
     * @var int
     */
    public $Season;

    /**
     * @var int
     */
    public $TournamentUniqueIndex;

    /**
     * @var bool
     */
    public $WithResults;

    /**
     * @param string $param
     * @param $value
     *
     * @return GetTournamentsRequestType
     */
    public static function createBy(string $param, $value): self
    {
        $requestType = new static();

        $requestType->$param = $value;

        return $requestType;
    }
}
