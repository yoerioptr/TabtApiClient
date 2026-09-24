<?php

namespace Yoerioptr\TabtApiClient\Response;

use Yoerioptr\TabtApiClient\Entries\DivisionEntry;

/**
 * Class GetDivisionsResponse
 *
 * @package Yoerioptr\TabtApiClient\Response
 */
final class GetDivisionsResponse implements ResponseInterface
{

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
                $this->$property = $value;
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
