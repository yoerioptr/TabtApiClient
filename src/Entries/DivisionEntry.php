<?php

namespace Yoerioptr\TabtApiClient\Entries;

/**
 * Class DivisionEntry
 *
 * @package Yoerioptr\TabtApiClient\Entries
 */
final class DivisionEntry
{

    /**
     * @var int
     */
    private int $divisionId;

    /**
     * @var string|null
     */
    private ?string $divisionName = null;

    /**
     * @var int
     */
    private int $divisionCategory;

    /**
     * @var int
     */
    private int $level;

    /**
     * @var int
     */
    private int $matchType;

    /**
     * @var int
     */
    private int $playerCategory;

    /**
     * DivisionEntry constructor.
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
     * @return int
     */
    public function getDivisionId(): int
    {
        return $this->divisionId;
    }

    /**
     * @return string|null
     */
    public function getDivisionName(): ?string
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

    /**
     * @return int
     */
    public function getPlayerCategory(): int
    {
        return $this->playerCategory;
    }

}
