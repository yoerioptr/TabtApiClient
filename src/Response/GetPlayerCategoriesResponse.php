<?php

namespace Yoerioptr\TabtApiClient\Response;

use Yoerioptr\TabtApiClient\Entries\PlayerCategoryEntry;

/**
 * Class GetPlayerCategoriesResponse
 *
 * @package Yoerioptr\TabtApiClient\Response
 */
final class GetPlayerCategoriesResponse implements ResponseInterface
{

    /**
     * @var int
     */
    private int $playerCategoryCount;

    /**
     * @var PlayerCategoryEntry[]
     */
    private array $playerCategoryEntries = [];

    /**
     * GetPlayerCategoriesResponse constructor.
     *
     * @param $rawResponse
     */
    public function __construct(mixed $rawResponse)
    {
        foreach ((array) $rawResponse as $key => $value) {
            if ($key !== 'PlayerCategoryEntries') {
                $property = lcfirst($key);
                $this->$property = $value;
                continue;
            }

            foreach (!is_array($value) ? [$value] : $value as $playerCategoryEntry) {
                $this->playerCategoryEntries[] = new PlayerCategoryEntry(
                    $playerCategoryEntry
                );
            }
        }
    }

    /**
     * @return int
     */
    public function getPlayerCategoryCount(): int
    {
        return $this->playerCategoryCount;
    }

    /**
     * @return PlayerCategoryEntry[]
     */
    public function getPlayerCategoryEntries(): array
    {
        return $this->playerCategoryEntries;
    }

}
