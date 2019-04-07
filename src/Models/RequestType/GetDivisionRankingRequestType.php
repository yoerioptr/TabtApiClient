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
     * GetDivisionRankingRequestType constructor.
     *
     * @param int $divisionId
     * @param string|null $weekName
     * @param string|null $rankingSystem
     */
    public function __construct(
        int $divisionId,
        ?string $weekName = null,
        ?string $rankingSystem = null
    ) {
        $this->DivisionId = $divisionId;
        $this->WeekName = $weekName;
        $this->RankingSystem = $rankingSystem;
    }
}
