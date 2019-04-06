<?php

namespace Yoerioptr\TabtApiClient\Models\EntryType;

/**
 * Class TeamMatchDefinitionEntry
 *
 * @package Yoerioptr\TabtApiClient\Models\EntryType
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
     * @param object $response
     */
    public function __construct(object $response)
    {
        $this->position = $response->Position;
        $this->type = $response->Type;
        $this->homePlayerIndex = $response->HomePlayerIndex;
        $this->awayPlayerIndex = $response->AwayPlayerIndex;
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
