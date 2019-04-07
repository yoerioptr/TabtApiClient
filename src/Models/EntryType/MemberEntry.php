<?php

namespace Yoerioptr\TabtApiClient\Models\EntryType;

use Yoerioptr\TabtApiClient\Models\EntryTypeInterface;

/**
 * Class MemberEntry
 *
 * @package Yoerioptr\TabtApiClient\Models\EntryType
 */
class MemberEntry implements EntryTypeInterface
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
     * @param $response
     */
    public function __construct($response)
    {
        $this->position = $response->Position;
        $this->uniqueIndex = $response->UniqueIndex;
        $this->rankingIndex = $response->RankingIndex;
        $this->firstName = $response->FirstName;
        $this->lastName = $response->LastName;
        $this->ranking = $response->Ranking;
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
