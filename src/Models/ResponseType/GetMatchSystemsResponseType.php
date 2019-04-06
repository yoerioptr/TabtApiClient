<?php

namespace Yoerioptr\TabtApiClient\Models\ResponseType;

use Yoerioptr\TabtApiClient\Models\EntryType\MatchSystemEntry;
use Yoerioptr\TabtApiClient\Models\ResponseTypeInterface;

/**
 * Class GetMatchSystemsResponseType
 *
 * @package Yoerioptr\TabtApiClient\Models\ResponseType
 */
class GetMatchSystemsResponseType implements ResponseTypeInterface
{
    /**
     * @var int
     */
    private $matchSystemCount;

    /**
     * @var MatchSystemEntry[]
     */
    private $matchSystemEntries = [];

    /**
     * ResponseTypeInterface constructor.
     *
     * @param object $response
     */
    public function __construct(object $response)
    {
        $this->matchSystemCount = $response->MatchSystemCount;

        if ($this->matchSystemCount !== 0) {
            if (is_array($response->MatchSystemEntries)) {
                foreach ($response->MatchSystemEntries as $matchSystemEntry) {
                    $this->matchSystemEntries[] = new MatchSystemEntry($matchSystemEntry);
                }
            }
            elseif (is_object($response->MatchSystemEntries)) {
                $this->matchSystemEntries[] = new MatchSystemEntry($response->MatchSystemEntries);
            }
        }
    }

    /**
     * @return int
     */
    public function getMatchSystemCount(): int
    {
        return $this->matchSystemCount;
    }

    /**
     * @return MatchSystemEntry[]
     */
    public function getMatchSystemEntries(): array
    {
        return $this->matchSystemEntries;
    }
}
