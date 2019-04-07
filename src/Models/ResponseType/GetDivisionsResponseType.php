<?php

namespace Yoerioptr\TabtApiClient\Models\ResponseType;

use Yoerioptr\TabtApiClient\Models\EntryType\DivisionEntryType;
use Yoerioptr\TabtApiClient\Models\ResponseTypeInterface;

/**
 * Class GetDivisionsResponseType
 *
 * @package Yoerioptr\TabtApiClient\Models\ResponseType
 */
class GetDivisionsResponseType implements ResponseTypeInterface
{
    /**
     * @var int
     */
    private $divisionCount;

    /**
     * @var DivisionEntryType[]
     */
    private $divisionEntries = [];

    /**
     * GetDivisionsResponseType constructor.
     *
     * @param object $response
     */
    public function __construct(object $response)
    {
        $this->divisionCount = $response->DivisionCount;

        if ($this->divisionCount !== 0) {
            if (is_array($response->DivisionEntries)) {
                foreach ($response->DivisionEntries as $divisionEntry) {
                    $this->divisionEntries[] = new DivisionEntryType($divisionEntry);
                }
            }
            elseif (is_object($response->DivisionEntries)) {
                $this->divisionEntries[] = new DivisionEntryType($response->DivisionEntries);
            }
        }
    }

    /**
     * @return int
     */
    public function getDivisionCount(): int
    {
        return $this->divisionCount;
    }

    /**
     * @return DivisionEntryType[]
     */
    public function getDivisionEntries(): array
    {
        return $this->divisionEntries;
    }
}
