<?php

namespace Yoerioptr\TabtApiClient\Entries;

/**
 * Class TeamMatchPlayerEntry
 *
 * @package Yoerioptr\TabtApiClient\Entries
 */
final class TeamMatchPlayerEntry
{

    /**
     * @var int|null
     */
    private ?int $position = null;

    /**
     * @var int
     */
    private int $uniqueIndex;

    /**
     * @var string
     */
    private string $firstName;

    /**
     * @var string
     */
    private string $lastName;

    /**
     * @var string
     */
    private string $ranking;

    /**
     * @var int|null
     */
    private ?int $victoryCount = null;

    /**
     * @var bool|null
     */
    private ?bool $isForfeited = null;

    /**
     * TeamMatchPlayerEntry constructor.
     *
     * @param $rawResponse
     */
    public function __construct(mixed $rawResponse)
    {
        foreach ((array) $rawResponse as $key => $value) {
            $property = lcfirst($key);
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
     * @return int
     */
    public function getUniqueIndex(): int
    {
        return $this->uniqueIndex;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getRanking(): string
    {
        return $this->ranking;
    }

    /**
     * @return int|null
     */
    public function getVictoryCount(): ?int
    {
        return $this->victoryCount;
    }

    /**
     * @return bool|null
     */
    public function isForfeited(): ?bool
    {
        return $this->isForfeited;
    }

}
