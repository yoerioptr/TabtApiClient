<?php

namespace Yoerioptr\TabtApiClient\Models;

/**
 * Class SeasonEntryType
 *
 * @package Yoerioptr\TabtApiClient\Models
 */
class SeasonEntryType
{
    /**
     * @var int
     */
    private $Season;

    /**
     * @var string
     */
    private $Name;

    /**
     * @var bool
     */
    private $IsCurrent;

    /**
     * SeasonEntryType constructor.
     *
     * @param object $response
     */
    public function __construct(object $response)
    {
        $this->Season = $response->Season;
        $this->Name = $response->Name;
        $this->IsCurrent = $response->IsCurrent;
    }

    /**
     * @return int
     */
    public function getSeason(): int
    {
        return $this->Season;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * @return bool
     */
    public function isCurrent(): bool
    {
        return $this->IsCurrent;
    }
}
