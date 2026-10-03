<?php

namespace Yoerioptr\TabtApiClient\Entries;

use Yoerioptr\TabtApiClient\Traits\HydratesProperties;

/**
 * Class VenueEntry
 *
 * @package Yoerioptr\TabtApiClient\Entries
 */
final class VenueEntry
{

    use HydratesProperties;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var string
     */
    private string $street;

    /**
     * @var string
     */
    private string $town;

    /**
     * @var string|null
     */
    private ?string $phone = null;

    /**
     * @var string|null
     */
    private ?string $comment = null;

    /**
     * VenueEntry constructor.
     *
     * @param $rawResponse
     */
    public function __construct(mixed $rawResponse)
    {
        foreach ((array) $rawResponse as $key => $value) {
            $property = lcfirst($key);
            $this->hydrateProperty($property, $value);
        }
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
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * @return string
     */
    public function getTown(): string
    {
        return $this->town;
    }

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }

}
