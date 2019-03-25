<?php

namespace Yoerioptr\TabtApiClient\Tabt;

use Yoerioptr\TabtApiClient\Models\RequestType\CredentialsType;
use Yoerioptr\TabtApiClient\Repositories\DivisionRepository;
use Yoerioptr\TabtApiClient\Repositories\SeasonRepository;
use Yoerioptr\TabtApiClient\Repositories\TestRepository;

/**
 * Interface TabtInterface
 *
 * @package Yoerioptr\TabtApiClient\Tabt
 */
interface TabtInterface
{
    /**
     * TabtInterface constructor.
     *
     * @param CredentialsType|null $credentials
     */
    public function __construct(?CredentialsType $credentials = null);

    /**
     * @return TestRepository
     */
    public function test(): TestRepository;

    /**
     * @return DivisionRepository
     */
    public function division(): DivisionRepository;

    /**
     * @return SeasonRepository
     */
    public function season(): SeasonRepository;
}