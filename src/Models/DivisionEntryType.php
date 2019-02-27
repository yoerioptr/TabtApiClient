<?php

namespace Yoerioptr\TabtApiClient\Models;

/**
 * Class DivisionEntryType
 *
 * @package Yoerioptr\TabtApiClient\Models
 */
class DivisionEntryType
{
    /**
     * @var int
     */
    private $DivisionId;

    /**
     * @var string
     */
    private $DivisionName;

    /**
     * @var int
     */
    private $DivisionCategory;

    /**
     * @var int
     */
    private $Level;

    /**
     * @var int
     */
    private $MatchType;

    /**
     * DivisionEntryType constructor.
     *
     * @param object $response
     */
    public function __construct(object $response)
    {
        $this->DivisionId = $response->DivisionId;
        $this->DivisionName = $response->DivisionName;
        $this->DivisionCategory = $response->DivisionCategory;
        $this->Level = $response->Level;
        $this->MatchType = $response->MatchType;
    }

    /**
     * @return int
     */
    public function getDivisionId(): int
    {
        return $this->DivisionId;
    }

    /**
     * @return string
     */
    public function getDivisionName(): string
    {
        return $this->DivisionName;
    }

    /**
     * @return int
     */
    public function getDivisionCategory(): int
    {
        return $this->DivisionCategory;
    }

    /**
     * @return int
     */
    public function getLevel(): int
    {
        return $this->Level;
    }

    /**
     * @return int
     */
    public function getMatchType(): int
    {
        return $this->MatchType;
    }
}
