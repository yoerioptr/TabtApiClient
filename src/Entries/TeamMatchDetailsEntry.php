<?php

namespace Yoerioptr\TabtApiClient\Entries;

/**
 * Class TeamMatchDetailsEntry
 *
 * @package Yoerioptr\TabtApiClient\Entries
 */
final class TeamMatchDetailsEntry
{

    /**
     * @var bool|null
     */
    private ?bool $detailsCreated = null;

    /**
     * @var string|null
     */
    private ?string $startTime = null;

    /**
     * @var string|null
     */
    private ?string $endTime = null;

    /**
     * @var int|null
     */
    private ?int $homeCaptain = null;

    /**
     * @var int|null
     */
    private ?int $awayCaptain = null;

    /**
     * @var int|null
     */
    private ?int $referee = null;

    /**
     * @var int|null
     */
    private ?int $hallCommissioner = null;

    /**
     * @var TeamMatchPlayerList|null
     */
    private ?TeamMatchPlayerList $homePlayers = null;

    /**
     * @var TeamMatchPlayerList|null
     */
    private ?TeamMatchPlayerList $awayPlayers = null;

    /**
     * @var IndividualMatchResultEntry[]
     */
    private array $individualMatchResults = [];

    /**
     * @var int|null
     */
    private ?int $matchSystem = null;

    /**
     * @var int|null
     */
    private ?int $homeScore = null;

    /**
     * @var int|null
     */
    private ?int $awayScore = null;

    /**
     * @var int|null
     */
    private ?int $commentCount = null;

    /**
     * @var array
     */
    private array $commentEntries = [];

    /**
     * TeamMatchDetailsEntry constructor.
     *
     * @param $rawResponse
     */
    public function __construct(mixed $rawResponse)
    {
        foreach ((array) $rawResponse as $key => $value) {
            $property = lcfirst($key);

            if ($property === 'homePlayers' || $property === 'awayPlayers') {
                $this->$property = new TeamMatchPlayerList($value);
                continue;
            }

            if ($property === 'individualMatchResults') {
                foreach (!is_array($value) ? [$value] : $value as $result) {
                    $this->individualMatchResults[] = new IndividualMatchResultEntry($result);
                }
                continue;
            }

            $this->$property = $value;
        }
    }

    /**
     * @return bool|null
     */
    public function getDetailsCreated(): ?bool
    {
        return $this->detailsCreated;
    }

    /**
     * @return string|null
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * @return string|null
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * @return int|null
     */
    public function getHomeCaptain(): ?int
    {
        return $this->homeCaptain;
    }

    /**
     * @return int|null
     */
    public function getAwayCaptain(): ?int
    {
        return $this->awayCaptain;
    }

    /**
     * @return int|null
     */
    public function getReferee(): ?int
    {
        return $this->referee;
    }

    /**
     * @return int|null
     */
    public function getHallCommissioner(): ?int
    {
        return $this->hallCommissioner;
    }

    /**
     * @return TeamMatchPlayerList|null
     */
    public function getHomePlayers(): ?TeamMatchPlayerList
    {
        return $this->homePlayers;
    }

    /**
     * @return TeamMatchPlayerList|null
     */
    public function getAwayPlayers(): ?TeamMatchPlayerList
    {
        return $this->awayPlayers;
    }

    /**
     * @return IndividualMatchResultEntry[]
     */
    public function getIndividualMatchResults(): array
    {
        return $this->individualMatchResults;
    }

    /**
     * @return int|null
     */
    public function getMatchSystem(): ?int
    {
        return $this->matchSystem;
    }

    /**
     * @return int|null
     */
    public function getHomeScore(): ?int
    {
        return $this->homeScore;
    }

    /**
     * @return int|null
     */
    public function getAwayScore(): ?int
    {
        return $this->awayScore;
    }

    /**
     * @return int|null
     */
    public function getCommentCount(): ?int
    {
        return $this->commentCount;
    }

    /**
     * @return array
     */
    public function getCommentEntries(): array
    {
        return $this->commentEntries;
    }

}
