<?php

namespace Yoerioptr\TabtApiClient\Response;

use Yoerioptr\TabtApiClient\Entries\DivisionEntry;
use Yoerioptr\TabtApiClient\Traits\HydratesProperties;

/**
 * Class GetDivisionsResponse
 *
 * @package Yoerioptr\TabtApiClient\Response
 */
final class GetDivisionsResponse implements ResponseInterface
{

    use HydratesProperties;

    /**
     * @var int
     */
    private int $divisionCount;

    /**
     * @var DivisionEntry[]
     */
    private array $divisionEntries = [];

    /**
     * GetDivisionsResponse constructor.
     *
     * @param $rawResponse
     */
    public function __construct(mixed $rawResponse)
    {
        foreach ((array) $rawResponse as $key => $value) {
            if ($key !== 'DivisionEntries') {
                $property = lcfirst($key);
                $this->hydrateProperty($property, $value);
                continue;
            }

            foreach (!is_array($value) ? [$value] : $value as $divisionEntry) {
                $this->divisionEntries[] = new DivisionEntry($divisionEntry);
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
     * @return DivisionEntry[]
     */
    public function getDivisionEntries(): array
    {
        return $this->divisionEntries;
    }

}
