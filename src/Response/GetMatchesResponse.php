<?php

namespace Yoerioptr\TabtApiClient\Response;

use Yoerioptr\TabtApiClient\Entries\TeamMatchesEntry;

/**
 * Class GetMatchesResponse
 *
 * @package Yoerioptr\TabtApiClient\Response
 */
final class GetMatchesResponse implements ResponseInterface
{

    /**
     * @var int
     */
    private int $matchCount;

    /**
     * @var TeamMatchesEntry[]
     */
    private array $teamMatchesEntries = [];

    /**
     * GetMatchesResponse constructor.
     *
     * @param $rawResponse
     */
    public function __construct(mixed $rawResponse)
    {
        foreach ((array) $rawResponse as $key => $value) {
            if ($key !== 'TeamMatchesEntries') {
                $property = lcfirst($key);
                $this->$property = $value;
                continue;
            }

            foreach (self::normalizeEntries($value) as $teamMatchesEntry) {
                $this->teamMatchesEntries[] = new TeamMatchesEntry(
                    $teamMatchesEntry
                );
            }
        }
    }

    /**
     * @return int
     */
    public function getMatchCount(): int
    {
        return $this->matchCount;
    }

    /**
     * @return TeamMatchesEntry[]
     */
    public function getTeamMatchesEntries(): array
    {
        return $this->teamMatchesEntries;
    }

    /**
     * The API returns a single object instead of a one-element list when the
     * request matches exactly one team match.
     *
     * @return array<int, mixed>
     */
    private static function normalizeEntries(mixed $value): array
    {
        if (is_array($value)) {
            return array_values($value);
        }

        if (is_object($value)) {
            $variables = get_object_vars($value);

            if (array_is_list($variables)) {
                return $variables;
            }
        }

        return [$value];
    }

}
