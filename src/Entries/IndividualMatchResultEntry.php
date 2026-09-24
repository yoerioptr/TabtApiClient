<?php

namespace Yoerioptr\TabtApiClient\Entries;

/**
 * Class IndividualMatchResultEntry
 *
 * @package Yoerioptr\TabtApiClient\Entries
 */
final class IndividualMatchResultEntry
{

    /**
     * @var int|null
     */
    private ?int $position = null;

    /**
     * @var int[]
     */
    private array $homePlayerMatchIndex = [];

    /**
     * @var int[]
     */
    private array $homePlayerUniqueIndex = [];

    /**
     * @var int[]
     */
    private array $awayPlayerMatchIndex = [];

    /**
     * @var int[]
     */
    private array $awayPlayerUniqueIndex = [];

    /**
     * @var int|null
     */
    private ?int $homeSetCount = null;

    /**
     * @var int|null
     */
    private ?int $awaySetCount = null;

    /**
     * @var bool|null
     */
    private ?bool $isHomeForfeited = null;

    /**
     * @var bool|null
     */
    private ?bool $isAwayForfeited = null;

    /**
     * @var string|null
     */
    private ?string $scores = null;

    /**
     * @var TeamMatchPlayerEntry[]
     */
    private array $homePlayers = [];

    /**
     * @var TeamMatchPlayerEntry[]
     */
    private array $awayPlayers = [];

    /**
     * IndividualMatchResultEntry constructor.
     *
     * @param $rawResponse
     */
    public function __construct(mixed $rawResponse)
    {
        foreach ((array) $rawResponse as $key => $value) {
            $property = lcfirst($key);

            if (in_array($property, [
                'homePlayerMatchIndex',
                'homePlayerUniqueIndex',
                'awayPlayerMatchIndex',
                'awayPlayerUniqueIndex',
            ], true)) {
                $this->$property = !is_array($value) ? [$value] : $value;
                continue;
            }

            if ($property === 'homePlayer') {
                foreach (!is_array($value) ? [$value] : $value as $player) {
                    $this->homePlayers[] = new TeamMatchPlayerEntry($player);
                }
                continue;
            }

            if ($property === 'awayPlayer') {
                foreach (!is_array($value) ? [$value] : $value as $player) {
                    $this->awayPlayers[] = new TeamMatchPlayerEntry($player);
                }
                continue;
            }

            $this->$property = $value;
        }
    }

    /**
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }

    /**
     * @return int[]
     */
    public function getHomePlayerMatchIndex(): array
    {
        return $this->homePlayerMatchIndex;
    }

    /**
     * @return int[]
     */
    public function getHomePlayerUniqueIndex(): array
    {
        return $this->homePlayerUniqueIndex;
    }

    /**
     * @return int[]
     */
    public function getAwayPlayerMatchIndex(): array
    {
        return $this->awayPlayerMatchIndex;
    }

    /**
     * @return int[]
     */
    public function getAwayPlayerUniqueIndex(): array
    {
        return $this->awayPlayerUniqueIndex;
    }

    /**
     * @return int|null
     */
    public function getHomeSetCount(): ?int
    {
        return $this->homeSetCount;
    }

    /**
     * @return int|null
     */
    public function getAwaySetCount(): ?int
    {
        return $this->awaySetCount;
    }

    /**
     * @return bool|null
     */
    public function isHomeForfeited(): ?bool
    {
        return $this->isHomeForfeited;
    }

    /**
     * @return bool|null
     */
    public function isAwayForfeited(): ?bool
    {
        return $this->isAwayForfeited;
    }

    /**
     * @return string|null
     */
    public function getScores(): ?string
    {
        return $this->scores;
    }

    /**
     * @return TeamMatchPlayerEntry[]
     */
    public function getHomePlayers(): array
    {
        return $this->homePlayers;
    }

    /**
     * @return TeamMatchPlayerEntry[]
     */
    public function getAwayPlayers(): array
    {
        return $this->awayPlayers;
    }

}
