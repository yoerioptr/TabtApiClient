<?php

namespace Yoerioptr\TabtApiClient\Models\EntryType;

use Yoerioptr\TabtApiClient\Models\EntryTypeInterface;

/**
 * Class SerieEntry
 *
 * @package Yoerioptr\TabtApiClient\Models\RequestType
 */
class SerieEntry implements EntryTypeInterface
{
    /**
     * @var int
     */
    private $uniqueId;

    /**
     * @var string
     */
    private $name;

    /**
     * SerieEntry constructor.
     *
     * @param $response
     */
    public function __construct($response)
    {
        $this->uniqueId = $response->UniqueId;
        $this->name = $response->Name;
    }

    /**
     * @return int
     */
    public function getUniqueId(): int
    {
        return $this->uniqueId;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
