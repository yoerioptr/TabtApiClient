<?php

namespace Yoerioptr\TabtApiClient\Entries;

/**
 * Class ClubEntriy
 *
 * @package Yoerioptr\TabtApiClient\Entries
 */
class ClubEntry
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
     * @var int
     */
    private $longName;

    /**
     * @var int
     */
    private $category;

    /**
     * @var int
     */
    private $categoryName;

    /**
     * @var int
     */
    private $venueCount;

    /**
     * @var VenueEntry[]
     */
    private $venueEntries;

    /**
     * TeamEntry constructor.
     *
     * @param $rawResponse
     */
    public function __construct($rawResponse)
    {
        foreach ((array) $rawResponse as $key => $value) {
            if ($key !== 'VenueEntries') {
                $property = lcfirst($key);
                $this->$property = $value;
                continue;
            }

            foreach ($value as $venueEntry) {
                $this->venueEntries[] = new VenueEntry($venueEntry);
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
     * @return int
     */
    public function getLongName(): int
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
     * @return int
     */
    public function getCategoryName(): int
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

}
