<?php

namespace Yoerioptr\TabtApiClient\Models\RequestType;

use Yoerioptr\TabtApiClient\Models\RequestTypeInterface;

/**
 * Class GetClubsRequestType
 *
 * @package Yoerioptr\TabtApiClient\Models\RequestType
 */
class GetClubsRequestType implements RequestTypeInterface
{
    /**
     * @var string|null
     */
    public $Club;

    /**
     * @var string|null
     */
    public $ClubCategory;

    /**
     * @var int|null
     */
    public $Season;

    /**
     * @param string|null $club
     * @param int|null $season
     * @param string|null $clubCategory
     *
     * @return GetClubsRequestType
     */
    public static function Create(
        ?string $club = null,
        ?int $season = null,
        ?string $clubCategory = null
    ): self {
        $requestType = new self();

        $requestType->Club = $club;
        $requestType->ClubCategory = $clubCategory;
        $requestType->Season = $season;

        return $requestType;
    }
}