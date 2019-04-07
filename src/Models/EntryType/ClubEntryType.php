<?php

namespace Yoerioptr\TabtApiClient\Models\EntryType;

use Yoerioptr\TabtApiClient\Models\EntryTypeInterface;

/**
 * Class ClubEntryType
 *
 * @package Yoerioptr\TabtApiClient\Models\EntryType
 */
class ClubEntryType implements EntryTypeInterface
{
    /**
     * @var string
     */
    private $uniqueIndex;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $longName;

    /**
     * @var int
     */
    private $category;

    /**
     * @var string
     */
    private $categoryName;

    /**
     * @var int
     */
    private $venueCount;

    /**
     * @var VenueEntryType[]
     */
    private $venueEntries;

    /**
     * ClubEntryType constructor.
     *
     * @param $response
     */
    public function __construct($response)
    {
        $this->uniqueIndex = $response->UniqueIndex;
        $this->name = $response->Name;
        $this->longName = $response->LongName;
        $this->category = $response->Category;
        $this->categoryName = $response->CategoryName;
        $this->venueCount = $response->VenueCount;

        if ($this->venueCount !== 0) {
            if (is_array($response->VenueEntries)) {
                foreach ($response->VenueEntries as $venueEntry) {
                    $this->venueEntries[] = new VenueEntryType($venueEntry);
                }
            }
            elseif (is_object($response->VenueEntries)) {
                $this->venueEntries[] = new VenueEntryType($response->VenueEntries);
            }
        }
    }

    /**
     * @return string
     */
    public function getUniqueIndex(): string
    {
        return $this->uniqueIndex;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getLongName(): string
    {
        return $this->longName;
    }

    /**
     * @return int
     */
    public function getCategory(): int
    {
        return $this->category;
    }

    /**
     * @return string
     */
    public function getCategoryName(): string
    {
        return $this->categoryName;
    }

    /**
     * @return int
     */
    public function getVenueCount(): int
    {
        return $this->venueCount;
    }

    /**
     * @return VenueEntryType|VenueEntryType[]
     */
    public function getVenueEntries()
    {
        return $this->venueEntries;
    }
}
