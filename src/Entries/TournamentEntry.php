<?php

namespace Yoerioptr\TabtApiClient\Entries;

/**
 * Class TournamentEntry
 *
 * @package Yoerioptr\TabtApiClient\Entries
 */
final class TournamentEntry
{

    /**
     * @var int
     */
    private int $uniqueIndex;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var int
     */
    private int $level;

    /**
     * @var string
     */
    private string $externalIndex;

    /**
     * @var string|null
     */
    private ?string $dateFrom = null;

    /**
     * @var string|null
     */
    private ?string $dateTo = null;

    /**
     * @var string|null
     */
    private ?string $registrationDate = null;

    /**
     * @var VenueEntry|null
     */
    private ?VenueEntry $venue = null;

    /**
     * @var int
     */
    private int $serieCount;

    /**
     * @var TournamentSerieEntry[]
     */
    private array $serieEntries = [];

    /**
     * TournamentEntry constructor.
     *
     * @param $rawResponse
     */
    public function __construct(mixed $rawResponse)
    {
        foreach ((array) $rawResponse as $key => $value) {
            if ($key === 'Venue') {
                $this->venue = new VenueEntry($value);
                continue;
            }

            if ($key === 'SerieEntries') {
                foreach (!is_array($value) ? [$value] : $value as $serieEntry) {
                    $this->serieEntries[] = new TournamentSerieEntry($serieEntry);
                }
                continue;
            }

            $property = lcfirst($key);
            $this->$property = $value;
        }
    }

    /**
     * @return int
     */
    public function getUniqueIndex(): int
    {
        return $this->uniqueIndex;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getLevel(): int
    {
        return $this->level;
    }

    /**
     * @return string
     */
    public function getExternalIndex(): string
    {
        return $this->externalIndex;
    }

    /**
     * @return string|null
     */
    public function getDateFrom(): ?string
    {
        return $this->dateFrom;
    }

    /**
     * @return string|null
     */
    public function getDateTo(): ?string
    {
        return $this->dateTo;
    }

    /**
     * @return string|null
     */
    public function getRegistrationDate(): ?string
    {
        return $this->registrationDate;
    }

    /**
     * @return VenueEntry|null
     */
    public function getVenue(): ?VenueEntry
    {
        return $this->venue;
    }

    /**
     * @return int
     */
    public function getSerieCount(): int
    {
        return $this->serieCount;
    }

    /**
     * @return TournamentSerieEntry[]
     */
    public function getSerieEntries(): array
    {
        return $this->serieEntries;
    }

}
