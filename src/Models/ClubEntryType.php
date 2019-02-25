<?php

namespace Yoerioptr\TabtApiClient\Models;

/**
 * Class ClubEntryType
 *
 * @package Yoerioptr\TabtApiClient\Models
 */
class ClubEntryType
{
    /**
     * @var string
     */
    private $UniqueIndex;

    /**
     * @var string
     */
    private $Name;

    /**
     * @var string
     */
    private $LongName;

    /**
     * @var int
     */
    private $Category;

    /**
     * @var string
     */
    private $CategoryName;

    /**
     * @var int
     */
    private $VenueCount;

    /**
     * @var VenueEntryType[]
     */
    private $VenueEntries;

    /**
     * ClubEntryType constructor.
     *
     * @param object $response
     */
    public function __construct(object $response)
    {
        $this->UniqueIndex = $response->UniqueIndex;
        $this->Name = $response->Name;
        $this->LongName = $response->LongName;
        $this->Category = $response->Category;
        $this->CategoryName = $response->CategoryName;
//        TODO Venue isn't an object (faulty documentation or api)
//        if (($this->VenueCount = $response->VenueCount) > 0){
//            foreach ($response->VenueEntries as $venueEntry) {
//                $this->VenueEntries[] = new VenueEntryType($venueEntry);
//            }
//        }
    }

    /**
     * @return string
     */
    public function getUniqueIndex(): string
    {
        return $this->UniqueIndex;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * @return string
     */
    public function getLongName(): string
    {
        return $this->LongName;
    }

    /**
     * @return int
     */
    public function getCategory(): int
    {
        return $this->Category;
    }

    /**
     * @return string
     */
    public function getCategoryName(): string
    {
        return $this->CategoryName;
    }

    /**
     * @return int
     */
    public function getVenueCount(): int
    {
        return $this->VenueCount;
    }

    /**
     * @return VenueEntryType[]
     */
    public function getVenueEntries(): array
    {
        return $this->VenueEntries;
    }
}
