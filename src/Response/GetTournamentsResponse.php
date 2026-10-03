<?php

namespace Yoerioptr\TabtApiClient\Response;

use Yoerioptr\TabtApiClient\Entries\TournamentEntry;
use Yoerioptr\TabtApiClient\Traits\HydratesProperties;

/**
 * Class GetTournamentsResponse
 *
 * @package Yoerioptr\TabtApiClient\Response
 */
final class GetTournamentsResponse implements ResponseInterface
{

    use HydratesProperties;

    /**
     * @var int
     */
    private int $tournamentCount;

    /**
     * @var TournamentEntry[]
     */
    private array $tournamentEntries = [];

    /**
     * GetTournamentsResponse constructor.
     *
     * @param $rawResponse
     */
    public function __construct(mixed $rawResponse)
    {
        foreach ((array) $rawResponse as $key => $value) {
            if ($key !== 'TournamentEntries') {
                $property = lcfirst($key);
                $this->hydrateProperty($property, $value);
                continue;
            }

            foreach (!is_array($value) ? [$value] : $value as $tournamentEntry) {
                $this->tournamentEntries[] = new TournamentEntry(
                    $tournamentEntry
                );
            }
        }
    }

    /**
     * @return int
     */
    public function getTournamentCount(): int
    {
        return $this->tournamentCount;
    }

    /**
     * @return TournamentEntry[]
     */
    public function getTournamentEntries(): array
    {
        return $this->tournamentEntries;
    }

}
