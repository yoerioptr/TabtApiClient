<?php

namespace Yoerioptr\TabtApiClient\Models\RequestType;

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
     * @param int|null $season
     * @param int|null $level
     * @param string|null $showDivisionName
     *
     * @return GetDivisionsRequestType
     */
    public static function Create(
        ?int $season = null,
        ?int $level = null,
        ?string $showDivisionName = null
    ): self {
        $requestType = new self();

        $requestType->Season = $season;
        $requestType->Level = $level;
        $requestType->ShowDivisionName = $showDivisionName;

        return $requestType;
    }
}