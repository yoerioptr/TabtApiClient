<?php

namespace Yoerioptr\TabtApiClient\Models\EntryType;

use DateTime;
use Exception;
use Yoerioptr\TabtApiClient\Models\EntryTypeInterface;

/**
 * Class TournamentEntry
 *
 * @package Yoerioptr\TabtApiClient\Models\RequestType
 */
class TournamentEntry implements EntryTypeInterface
{
    /**
     * @var int
     */
    private $uniqueIndex;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $externalIndex;

    /**
     * @var DateTime
     */
    private $dateFrom;

    /**
     * @var DateTime
     */
    private $dateTo;

    /**
     * @var DateTime
     */
    private $registrationDate;

    /**
     * @var VenueEntryType
     */
    private $venue;

    /**
     * @var int
     */
    private $serieCount;

    /**
     * @var SerieEntry[]
     */
    private $serieEntries = [];

    /**
     * TournamentEntry constructor.
     *
     * @param $response
     *
     * @throws Exception
     */
    public function __construct($response)
    {
        $this->uniqueIndex = $response->UniqueIndex;
        $this->name = $response->Name;
        $this->externalIndex = $response->ExternalIndex;
        $this->dateFrom = new DateTime($response->DateFrom);
        $this->dateTo = new DateTime($response->DateTo);
        $this->registrationDate = new DateTime($response->RegistrationDate);
        $this->serieCount = $response->SerieCount;

        if ($response->Venue !== null) {
            $this->venue = new TournamentVenueEntryType($response->Venue);
        }

        if ($this->serieCount !== 0) {
            if (is_array($response->SerieEntries)) {
                foreach ($response->SerieEntries as $serieEntry) {
                    $this->serieEntries[] = new SeasonEntryType($serieEntry);
                }
            }
            elseif (is_object($response->SeasonEntries)) {
                $this->serieEntries[] = new SeasonEntryType($response->SerieEntries);
            }
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
     * @return string
     */
    public function getExternalIndex(): string
    {
        return $this->externalIndex;
    }

    /**
     * @return DateTime
     */
    public function getDateFrom(): DateTime
    {
        return $this->dateFrom;
    }

    /**
     * @return DateTime
     */
    public function getDateTo(): DateTime
    {
        return $this->dateTo;
    }

    /**
     * @return DateTime
     */
    public function getRegistrationDate(): DateTime
    {
        return $this->registrationDate;
    }

    /**
     * @return VenueEntryType
     */
    public function getVenue(): VenueEntryType
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
     * @return SerieEntry[]
     */
    public function getSerieEntries(): array
    {
        return $this->serieEntries;
    }
}
