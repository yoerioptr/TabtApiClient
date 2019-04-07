<?php

namespace Yoerioptr\TabtApiClient\Models\ResponseType;

use Exception;
use Yoerioptr\TabtApiClient\Models\EntryType\TournamentEntry;
use Yoerioptr\TabtApiClient\Models\ResponseTypeInterface;

/**
 * Class GetTournamentsResponseType
 *
 * @package Yoerioptr\TabtApiClient\Models\ResponseType
 */
class GetTournamentsResponseType implements ResponseTypeInterface
{
    /**
     * @var int
     */
    private $tournamentCount;

    /**
     * @var TournamentEntry[]
     */
    private $tournamentEntries = [];

    /**
     * ResponseTypeInterface constructor.
     *
     * @param object $response
     *
     * @throws Exception
     */
    public function __construct(object $response)
    {
        $this->tournamentCount = $response->TournamentCount;

        if ($this->tournamentCount !== 0) {
            if (is_array($response->TournamentEntries)) {
                foreach ($response->TournamentEntries as $tournamentEntry) {
                    $this->tournamentEntries[] = new TournamentEntry($tournamentEntry);
                }
            }
            elseif (is_object($response->TournamentEntries)) {
                $this->tournamentEntries[] = new TournamentEntry($response->TournamentEntries);
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
