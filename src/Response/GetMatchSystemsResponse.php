<?php

namespace Yoerioptr\TabtApiClient\Response;

use Yoerioptr\TabtApiClient\Entries\MatchSystemEntry;

/**
 * Class GetMatchSystemsResponse
 *
 * @package Yoerioptr\TabtApiClient\Response
 */
class GetMatchSystemsResponse implements ResponseInterface
{

    /**
     * @var int
     */
    private $matchSystemCount;

    /**
     * @var array
     */
    private $matchSystemEntries = [];

    /**
     * GetMatchSystemsResponse constructor.
     *
     * @param $rawResponse
     */
    public function __construct($rawResponse)
    {
        foreach ((array) $rawResponse as $key => $value) {
            if ($key !== 'MatchSystemEntries') {
                $property = lcfirst($key);
                $this->$property = $value;
                continue;
            }

            foreach ($value as $matchSystemEntry) {
                $this->matchSystemEntries[] = new MatchSystemEntry(
                    $matchSystemEntry
                );
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
     * @return array
     */
    public function getMatchSystemEntries(): array
    {
        return $this->matchSystemEntries;
    }

}
