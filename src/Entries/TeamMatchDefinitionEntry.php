<?php

namespace Yoerioptr\TabtApiClient\Entries;

/**
 * Class TeamMatchDefinitionEntry
 *
 * @package Yoerioptr\TabtApiClient\Entries
 */
final class TeamMatchDefinitionEntry
{

    /**
     * @var int
     */
    private int $position;

    /**
     * @var int
     */
    private int $type;

    /**
     * @var int
     */
    private int $homePlayerIndex;

    /**
     * @var int
     */
    private int $awayPlayerIndex;

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
