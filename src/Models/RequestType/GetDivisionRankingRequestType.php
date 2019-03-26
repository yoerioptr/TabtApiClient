<?php

namespace Yoerioptr\TabtApiClient\Models\RequestType;

use Yoerioptr\TabtApiClient\Models\RequestTypeInterface;

/**
 * Class GetDivisionRankingRequestType
 *
 * @package Yoerioptr\TabtApiClient\Models\RequestType
 */
class GetDivisionRankingRequestType implements RequestTypeInterface
{
    /**
     * @var int
     */
    public $DivisionId;

    /**
     * @var string|null
     */
    public $WeekName;

    /**
     * @var string|null
     */
    public $RankingSystem;

    /**
     * @param int $divisionId
     * @param string|null $weekname
     * @param string|null $rankingSystem
     *
     * @return GetDivisionRankingRequestType
     */
    public static function Create(
        int $divisionId,
        ?string $weekname = null,
        ?string $rankingSystem = null
    ): self {
        $requestType = new self();

        $requestType->DivisionId = $divisionId;
        $requestType->WeekName = $weekname;
        $requestType->RankingSystem = $rankingSystem;

        return $requestType;
    }
}