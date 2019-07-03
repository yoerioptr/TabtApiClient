<?php

namespace Yoerioptr\TabtApiClient\Entries;

/**
 * Class MemberEntry
 *
 * @package Yoerioptr\TabtApiClient\Entries
 */
class MemberEntry
{
    /**
     * @var int
     */
    private $position;

    /**
     * @var int
     */
    private $uniqueIndex;

    /**
     * @var int
     */
    private $rankingIndex;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $ranking;

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
