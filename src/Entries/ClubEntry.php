<?php

namespace Yoerioptr\TabtApiClient\Entries;

/**
 * Class ClubEntriy
 *
 * @package Yoerioptr\TabtApiClient\Entries
 */
final class ClubEntry
{

    /**
     * @var string
     */
    private string $uniqueIndex;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var string
     */
    private string $longName;

    /**
     * @var int
     */
    private int $category;

    /**
     * @var string
     */
    private string $categoryName;

    /**
     * @var int
     */
    private int $venueCount;

    /**
     * @var VenueEntry[]
     */
    private array $venueEntries;

    /**
     * TeamEntry constructor.
     *
     * @param $rawResponse
     */
    public function __construct($rawResponse)
    {
        foreach ((array)$rawResponse as $key => $value) {
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

}
