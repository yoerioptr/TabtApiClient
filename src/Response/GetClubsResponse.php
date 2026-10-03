<?php

namespace Yoerioptr\TabtApiClient\Response;

use Yoerioptr\TabtApiClient\Entries\ClubEntry;
use Yoerioptr\TabtApiClient\Traits\HydratesProperties;

/**
 * Class GetClubsResponse
 *
 * @package Yoerioptr\TabtApiClient\Response
 */
final class GetClubsResponse implements ResponseInterface
{

    use HydratesProperties;

    /**
     * @var int
     */
    private int $clubCount;

    /**
     * @var ClubEntry[]
     */
    private array $clubEntries = [];

    /**
     * GetClubTeamsResponse constructor.
     *
     * @param $rawResponse
     */
    public function __construct(mixed $rawResponse)
    {
        foreach ((array) $rawResponse as $key => $value) {
            if ($key !== 'ClubEntries') {
                $property = lcfirst($key);
                $this->hydrateProperty($property, $value);
                continue;
            }

            foreach ($value as $clubEntry) {
                $this->clubEntries[] = new ClubEntry($clubEntry);
            }
        }
    }

    /**
     * @return int
     */
    public function getClubCount(): int
    {
        return $this->clubCount;
    }

    /**
     * @return ClubEntry[]
     */
    public function getClubEntries(): array
    {
        return $this->clubEntries;
    }

}
