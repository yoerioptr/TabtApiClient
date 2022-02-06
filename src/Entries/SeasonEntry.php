<?php

namespace Yoerioptr\TabtApiClient\Entries;

/**
 * Class SeasonEntry
 *
 * @package Yoerioptr\TabtApiClient\Entries
 */
final class SeasonEntry
{

    /**
     * @var int
     */
    private int $season;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var bool
     */
    private bool $isCurrent;

    /**
     * SeasonEntry constructor.
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
    public function getSeason(): int
    {
        return $this->season;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return bool
     */
    public function isCurrent(): bool
    {
        return $this->isCurrent;
    }

}
