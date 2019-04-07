<?php

namespace Yoerioptr\TabtApiClient\Models\ResponseType;

use http\Client\Response;
use Yoerioptr\TabtApiClient\Models\EntryType\MemberEntry;
use Yoerioptr\TabtApiClient\Models\ResponseTypeInterface;

/**
 * Class GetMembersResponseType
 *
 * @package Yoerioptr\TabtApiClient\Models\ResponseType
 */
class GetMembersResponseType implements ResponseTypeInterface
{
    /**
     * @var int
     */
    private $memberCount;

    /**
     * @var
     */
    private $memberEntries = [];

    /**
     * ResponseTypeInterface constructor.
     *
     * @param $response
     */
    public function __construct($response)
    {
        $this->memberCount = $response->MemberCount;

        if ($this->memberCount !== 0) {
            if (is_array($response->MemberEntries)) {
                foreach ($response->MemberEntries as $memberEntry) {
                    $this->memberEntries[] = new MemberEntry($memberEntry);
                }
            }
            elseif (is_object($response->MemberEntries)) {
                $this->memberEntries[] = new MemberEntry($response->MemberEntries);
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
     * @return mixed
     */
    public function getMemberEntries()
    {
        return $this->memberEntries;
    }
}
