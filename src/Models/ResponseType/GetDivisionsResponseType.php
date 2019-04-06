<?php

namespace Yoerioptr\TabtApiClient\Models\ResponseType;

use Yoerioptr\TabtApiClient\Models\EntryType\DivisionEntryType;

/**
 * Class GetDivisionsResponseType
 *
 * @package Yoerioptr\TabtApiClient\Models\ResponseType
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
        if (is_array($response->DivisionEntries)) {
            foreach ($response->DivisionEntries as $divisionEntry) {
                $this->DivisionEntries[] = new DivisionEntryType($divisionEntry);
            }
        }
        elseif (is_object($response->DivisionEntries)) {
            $this->DivisionEntries[] = new DivisionEntryType($response->DivisionEntries);
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
