<?php

namespace Yoerioptr\TabtApiClient\Models\RequestType;

use Yoerioptr\TabtApiClient\Models\RequestTypeInterface;

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
     * GetClubTeamsRequestType constructor.
     *
     * @param string $club
     * @param int $season
     */
    public function __construct(
        string $club,
        int $season
    ) {
        $this->Club = $club;
        $this->Season = $season;
    }
}
