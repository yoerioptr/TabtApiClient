<?php

namespace Yoerioptr\TabtApiClient\Entries;

/**
 * Class PlayerCategoryEntry
 *
 * @package Yoerioptr\TabtApiClient\Entries
 */
final class PlayerCategoryEntry
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
     * @var string
     */
    private string $shortName;

    /**
     * @var int
     */
    private int $rankingCategory;

    /**
     * @var bool|null
     */
    private ?bool $isGroup = null;

    /**
     * @var string|null
     */
    private ?string $groupMembers = null;

    /**
     * @var string|null
     */
    private ?string $sex = null;

    /**
     * @var string|null
     */
    private ?string $strictSex = null;

    /**
     * @var int|null
     */
    private ?int $minimumAge = null;

    /**
     * @var int|null
     */
    private ?int $maximumAge = null;

    /**
     * @var int|null
     */
    private ?int $strictMinimumAge = null;

    /**
     * @var int|null
     */
    private ?int $strictMaximumAge = null;

    /**
     * PlayerCategoryEntry constructor.
     *
     * @param $rawResponse
     */
    public function __construct(mixed $rawResponse)
    {
        foreach ((array) $rawResponse as $key => $value) {
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
     * @return string
     */
    public function getShortName(): string
    {
        return $this->shortName;
    }

    /**
     * @return int
     */
    public function getRankingCategory(): int
    {
        return $this->rankingCategory;
    }

    /**
     * @return bool|null
     */
    public function isGroup(): ?bool
    {
        return $this->isGroup;
    }

    /**
     * @return string|null
     */
    public function getGroupMembers(): ?string
    {
        return $this->groupMembers;
    }

    /**
     * @return string|null
     */
    public function getSex(): ?string
    {
        return $this->sex;
    }

    /**
     * @return string|null
     */
    public function getStrictSex(): ?string
    {
        return $this->strictSex;
    }

    /**
     * @return int|null
     */
    public function getMinimumAge(): ?int
    {
        return $this->minimumAge;
    }

    /**
     * @return int|null
     */
    public function getMaximumAge(): ?int
    {
        return $this->maximumAge;
    }

    /**
     * @return int|null
     */
    public function getStrictMinimumAge(): ?int
    {
        return $this->strictMinimumAge;
    }

    /**
     * @return int|null
     */
    public function getStrictMaximumAge(): ?int
    {
        return $this->strictMaximumAge;
    }

}
