<?php

namespace Yoerioptr\TabtApiClient\Models\ResponseType;

use Yoerioptr\TabtApiClient\Models\EntryType\TeamMatchesEntryType;
use Yoerioptr\TabtApiClient\Models\ResponseTypeInterface;

/**
 * Class GetMatchesResponseType
 *
 * @package Yoerioptr\TabtApiClient\Models\ResponseType
 */
class GetMatchesResponseType implements ResponseTypeInterface
{
    /**
     * @var int
     */
    private $MatchCount;

    /**
     * @var TeamMatchesEntryType[]
     */
    private $TeamMatchesEntries;

    /**
     * ResponseTypeInterface constructor.
     *
     * @param object $response
     */
    public function __construct(object $response)
    {
        $this->MatchCount = $response->MatchCount;
        if (is_array($response->TeamMatchesEntries)) {
            foreach ($response->TeamMatchesEntries as $teamMatchesEntry) {
                $this->TeamMatchesEntries[] = new TeamMatchesEntryType($teamMatchesEntry);
            }
        }
        elseif (is_object($response->TeamMatchesEntries)) {
            $this->TeamMatchesEntries[] = new TeamMatchesEntryType($response->TeamMatchesEntries);
        }
    }
}
