<?php

namespace Yoerioptr\TabtApiClient\Entries;

/**
 * Class TeamMatchDefinitionEntry
 *
 * @package Yoerioptr\TabtApiClient\Entries
 */
class TeamMatchDefinitionEntry
{
    /**
     * @var int
     */
    private $position;

    /**
     * @var int
     */
    private $type;

    /**
     * @var int
     */
    private $homePlayerIndex;

    /**
     * @var int
     */
    private $awayPlayerIndex;

    /**
     * TeamMatchDefinitionEntry constructor.
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
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getHomePlayerIndex(): int
    {
        return $this->homePlayerIndex;
    }

    /**
     * @return int
     */
    public function getAwayPlayerIndex(): int
    {
        return $this->awayPlayerIndex;
    }
}
