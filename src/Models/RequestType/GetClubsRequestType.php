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
     * GetClubsRequestType constructor.
     *
     * @param string|null $club
     * @param int|null $season
     * @param string|null $clubCategory
     */
    public function __construct(
        ?string $club = null,
        ?int $season = null,
        ?string $clubCategory = null
    ) {
        $this->Club = $club;
        $this->ClubCategory = $clubCategory;
        $this->Season = $season;
    }
}
