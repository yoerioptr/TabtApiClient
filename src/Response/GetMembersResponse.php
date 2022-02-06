<?php

namespace Yoerioptr\TabtApiClient\Response;

use Yoerioptr\TabtApiClient\Entries\MemberEntry;

/**
 * Class GetMembersResponse
 *
 * @package Yoerioptr\TabtApiClient\Response
 */
final class GetMembersResponse implements ResponseInterface
{

    /**
     * @var int
     */
    private int $memberCount;

    /**
     * @var array
     */
    private array $memberEntries = [];

    /**
     * GetMembersResponse constructor.
     *
     * @param $rawResponse
     */
    public function __construct($rawResponse)
    {
        foreach ((array) $rawResponse as $key => $value) {
            if ($key !== 'MemberEntries') {
                $property = lcfirst($key);
                $this->$property = $value;
                continue;
            }

            foreach ($value as $memberEntry) {
                $this->memberEntries[] = new MemberEntry($memberEntry);
            }
        }
    }

    /**
     * @return int
     */
    public function getMemberCount(): int
    {
        return $this->memberCount;
    }

    /**
     * @return array
     */
    public function getMemberEntries(): array
    {
        return $this->memberEntries;
    }

}
