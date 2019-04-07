<?php

namespace Yoerioptr\TabtApiClient\Models\EntryType;

use Yoerioptr\TabtApiClient\Models\EntryTypeInterface;

/**
 * Class TournamentVenueEntryType
 *
 * @package Yoerioptr\TabtApiClient\Models\EntryType
 */
class TournamentVenueEntryType implements EntryTypeInterface
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $street;

    /**
     * @var string
     */
    private $town;

    /**
     * TournamentVenueEntryType constructor.
     *
     * @param object $response
     */
    public function __construct(object $response)
    {
        $this->name = $response->Name;
        $this->street = $response->Street;
        $this->town = $response->Town;
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
}
