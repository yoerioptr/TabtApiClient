<?php

namespace Yoerioptr\TabtApiClient\Entries;

use Yoerioptr\TabtApiClient\Traits\HydratesProperties;

/**
 * Class MemberEntry
 *
 * @package Yoerioptr\TabtApiClient\Entries
 */
final class MemberEntry
{

    use HydratesProperties;

    /**
     * @var int
     */
    private int $position;

    /**
     * @var int
     */
    private int $uniqueIndex;

    /**
     * @var int
     */
    private int $rankingIndex;

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
     * @var string|null
     */
    private ?string $status = null;

    /**
     * @var string|null
     */
    private ?string $club = null;

    /**
     * MemberEntry constructor.
     *
     * @param $rawResponse
     */
    public function __construct(mixed $rawResponse)
    {
        foreach ((array) $rawResponse as $key => $value) {
            $property = lcfirst($key);
            $this->hydrateProperty($property, $value);
        }
    }

    /**
     * @return int
     */
    public function getPosition(): int
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
     * @return int
     */
    public function getRankingIndex(): int
    {
        return $this->rankingIndex;
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
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @return string|null
     */
    public function getClub(): ?string
    {
        return $this->club;
    }

}
