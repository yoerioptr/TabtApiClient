<?php

namespace Yoerioptr\TabtApiClient\Models\RequestType;

/**
 * Class GetClubTeamsRequestType
 *
 * @package Yoerioptr\TabtApiClient\Models\RequestType
 */
class GetClubTeamsRequestType implements RequestTypeInterface
{
    /**
     * @var string
     */
    public $Club;

    /**
     * @var int
     */
    public $Season;

    /**
     * @param string $club
     * @param int $season
     *
     * @return GetClubTeamsRequestType
     */
    public static function Create(
        string $club,
        int $season
    ): self {
        $requestType = new self();

        $requestType->Club = $club;
        $requestType->Season = $season;

        return $requestType;
    }
}