<?php

namespace Yoerioptr\TabtApiClient\Models;

/**
 * Class GetDivisionsResponseType
 *
 * @package Yoerioptr\TabtApiClient\Models
 */
class GetDivisionsResponseType
{
    /**
     * @var int
     */
    private $DivisionCount;

    /**
     * @var DivisionEntryType[]
     */
    private $DivisionEntries;

    /**
     * GetDivisionsResponseType constructor.
     *
     * @param object $response
     */
    public function __construct(object $response)
    {
        $this->DivisionCount = $response->DivisionCount;
        foreach ($response->DivisionEntries as $divisionEntry) {
            $this->DivisionEntries[] = new DivisionEntryType($divisionEntry);
        }
    }

    /**
     * @return int
     */
    public function getDivisionCount(): int
    {
        return $this->DivisionCount;
    }

    /**
     * @return DivisionEntryType[]
     */
    public function getDivisionEntries(): array
    {
        return $this->DivisionEntries;
    }
}
