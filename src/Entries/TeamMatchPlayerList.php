<?php

namespace Yoerioptr\TabtApiClient\Entries;

use Yoerioptr\TabtApiClient\Traits\HydratesProperties;

/**
 * Class TeamMatchPlayerList
 *
 * @package Yoerioptr\TabtApiClient\Entries
 */
final class TeamMatchPlayerList
{

    use HydratesProperties;

    /**
     * @var int
     */
    private int $playerCount = 0;

    /**
     * @var int
     */
    private int $doubleTeamCount = 0;

    /**
     * @var TeamMatchPlayerEntry[]
     */
    private array $players = [];

    /**
     * TeamMatchPlayerList constructor.
     *
     * @param $rawResponse
     */
    public function __construct(mixed $rawResponse)
    {
        foreach ((array) $rawResponse as $key => $value) {
            $property = lcfirst($key);

            if ($property === 'players') {
                foreach (!is_array($value) ? [$value] : $value as $player) {
                    $this->players[] = new TeamMatchPlayerEntry($player);
                }
                continue;
            }

            $this->hydrateProperty($property, $value);
        }
    }

    /**
     * @return int
     */
    public function getPlayerCount(): int
    {
        return $this->playerCount;
    }

    /**
     * @return int
     */
    public function getDoubleTeamCount(): int
    {
        return $this->doubleTeamCount;
    }

    /**
     * @return TeamMatchPlayerEntry[]
     */
    public function getPlayers(): array
    {
        return $this->players;
    }

}
