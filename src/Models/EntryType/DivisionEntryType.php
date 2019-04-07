<?php

namespace Yoerioptr\TabtApiClient\Models\EntryType;

use Yoerioptr\TabtApiClient\Models\EntryTypeInterface;

/**
 * Class DivisionEntryType
 *
 * @package Yoerioptr\TabtApiClient\Models\EntryType
 */
class DivisionEntryType implements EntryTypeInterface
{
    /**
     * @var int
     */
    private $divisionId;

    /**
     * @var string
     */
    private $divisionName;

    /**
     * @var int
     */
    private $divisionCategory;

    /**
     * @var int
     */
    private $level;

    /**
     * @var int
     */
    private $matchType;

    /**
     * DivisionEntryType constructor.
     *
     * @param $response
     */
    public function __construct($response)
    {
        $this->divisionId = $response->DivisionId;
        $this->divisionName = $response->DivisionName;
        $this->divisionCategory = $response->DivisionCategory;
        $this->level = $response->Level;
        $this->matchType = $response->MatchType;
    }

    /**
     * @return int
     */
    public function getDivisionId(): int
    {
        return $this->divisionId;
    }

    /**
     * @return string
     */
    public function getDivisionName(): string
    {
        return $this->divisionName;
    }

    /**
     * @return int
     */
    public function getDivisionCategory(): int
    {
        return $this->divisionCategory;
    }

    /**
     * @return int
     */
    public function getLevel(): int
    {
        return $this->level;
    }

    /**
     * @return int
     */
    public function getMatchType(): int
    {
        return $this->matchType;
    }
}