<?php

namespace Yoerioptr\TabtApiClient\Models\RequestType;

use Yoerioptr\TabtApiClient\Models\RequestTypeInterface;

/**
 * Class GetDivisionsRequestType
 *
 * @package Yoerioptr\TabtApiClient\Models\RequestType
 */
class GetDivisionsRequestType implements RequestTypeInterface
{
    /**
     * @var int|null
     */
    public $Season;

    /**
     * @var int|null
     */
    public $Level;

    /**
     * @var string|null
     */
    public $ShowDivisionName;

    /**
     * GetDivisionsRequestType constructor.
     *
     * @param int|null $season
     * @param int|null $level
     * @param string|null $showDivisionName
     */
    public function __construct(
        ?int $season = null,
        ?int $level = null,
        ?string $showDivisionName = null
    ) {
        $this->Season = $season;
        $this->Level = $level;
        $this->ShowDivisionName = $showDivisionName;
    }
}
