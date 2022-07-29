<?php

namespace Yoerioptr\TabtApiClient\Entries;

/**
 * Class MemberEntry
 *
 * @package Yoerioptr\TabtApiClient\Entries
 */
final class MemberEntry
{

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
     * MemberEntry constructor.
     *
     * @param $rawResponse
     */
    public function __construct($rawResponse)
    {
        foreach ((array) $rawResponse as $key => $value) {
            $property = lcfirst($key);
            $this->$property = $value;
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

}
