<?php

namespace Yoerioptr\TabtApiClient\Response;

use Yoerioptr\TabtApiClient\Entries\MemberEntry;

/**
 * Class GetMembersResponse
 *
 * @package Yoerioptr\TabtApiClient\Response
 */
class GetMembersResponse implements ResponseInterface
{
    /**
     * @var int
     */
    private $memberCount;

    /**
     * @var array
     */
    private $memberEntries = [];

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
}
