<?php

namespace Yoerioptr\TabtApiClient\Models\EntryType;

/**
 * Class SeasonEntryType
 *
 * @package Yoerioptr\TabtApiClient\Models\EntryType
 */
class SeasonEntryType
{
    /**
     * @var int
     */
    private $season;

    /**
     * @var string
     */
    private $name;

    /**
     * @var bool
     */
    private $isCurrent;

    /**
     * SeasonEntryType constructor.
     *
     * @param object $response
     */
    public function __construct(object $response)
    {
        $this->season = $response->Season;
        $this->name = $response->Name;
        $this->isCurrent = $response->IsCurrent;
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
