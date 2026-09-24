<?php

namespace Yoerioptr\TabtApiClient\Entries;

/**
 * Class TournamentRegistrationEntry
 *
 * @package Yoerioptr\TabtApiClient\Entries
 */
final class TournamentRegistrationEntry
{

    /**
     * @var int
     */
    private int $uniqueIndex;

    /**
     * @var string|null
     */
    private ?string $registrationDate = null;

    /**
     * @var MemberEntry|null
     */
    private ?MemberEntry $member = null;

    /**
     * @var ClubEntry|null
     */
    private ?ClubEntry $club = null;

    /**
     * TournamentRegistrationEntry constructor.
     *
     * @param $rawResponse
     */
    public function __construct(mixed $rawResponse)
    {
        foreach ((array) $rawResponse as $key => $value) {
            if ($key === 'Member') {
                $this->member = new MemberEntry($value);
                continue;
            }

            if ($key === 'Club') {
                $this->club = new ClubEntry($value);
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
     * @return string|null
     */
    public function getRegistrationDate(): ?string
    {
        return $this->registrationDate;
    }

    /**
     * @return MemberEntry|null
     */
    public function getMember(): ?MemberEntry
    {
        return $this->member;
    }

    /**
     * @return ClubEntry|null
     */
    public function getClub(): ?ClubEntry
    {
        return $this->club;
    }

}
