<?php

namespace Yoerioptr\TabtApiClient\Entries;

/**
 * Class TournamentSerieEntry
 *
 * @package Yoerioptr\TabtApiClient\Entries
 */
final class TournamentSerieEntry
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
     * @var int|null
     */
    private ?int $resultCount = null;

    /**
     * @var IndividualMatchResultEntry[]
     */
    private array $resultEntries = [];

    /**
     * @var int|null
     */
    private ?int $registrationCount = null;

    /**
     * @var TournamentRegistrationEntry[]
     */
    private array $registrationEntries = [];

    /**
     * TournamentSerieEntry constructor.
     *
     * @param $rawResponse
     */
    public function __construct(mixed $rawResponse)
    {
        foreach ((array) $rawResponse as $key => $value) {
            if ($key === 'ResultEntries') {
                foreach (!is_array($value) ? [$value] : $value as $resultEntry) {
                    $this->resultEntries[] = new IndividualMatchResultEntry(
                        $resultEntry
                    );
                }
                continue;
            }

            if ($key === 'RegistrationEntries') {
                foreach (!is_array($value) ? [$value] : $value as $registrationEntry) {
                    $this->registrationEntries[] = new TournamentRegistrationEntry(
                        $registrationEntry
                    );
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
     * @return int|null
     */
    public function getResultCount(): ?int
    {
        return $this->resultCount;
    }

    /**
     * @return IndividualMatchResultEntry[]
     */
    public function getResultEntries(): array
    {
        return $this->resultEntries;
    }

    /**
     * @return int|null
     */
    public function getRegistrationCount(): ?int
    {
        return $this->registrationCount;
    }

    /**
     * @return TournamentRegistrationEntry[]
     */
    public function getRegistrationEntries(): array
    {
        return $this->registrationEntries;
    }

}
