<?php

namespace Yoerioptr\TabtApiClient\Models\ResponseType;

use DateTime;
use Exception;
use Yoerioptr\TabtApiClient\Models\ResponseTypeInterface;

/**
 * Class TestResponseType
 *
 * @package Yoerioptr\TabtApiClient\Models\ResponseType
 */
class TestResponseType implements ResponseTypeInterface
{
    /**
     * @var DateTime
     */
    private $timestamp;

    /**
     * @var string
     */
    private $apiVersion;

    /**
     * @var bool
     */
    private $isValidAccount;

    /**
     * @var string
     */
    private $language;

    /**
     * @var string
     */
    private $database;

    /**
     * @var string
     */
    private $requestorIp;

    /**
     * @var int
     */
    private $consumedTicks;

    /**
     * @var int
     */
    private $currentQuota;

    /**
     * @var int
     */
    private $allowedQuota;

    /**
     * TestResponse constructor.
     *
     * @param object $response
     *
     * @throws Exception
     */
    public function __construct(object $response)
    {
        $this->timestamp = new DateTime($response->Timestamp);
        $this->apiVersion = $response->ApiVersion;
        $this->isValidAccount = $response->IsValidAccount;
        $this->language = $response->Language;
        $this->database = $response->Database;
        $this->requestorIp = $response->RequestorIp;
        $this->consumedTicks = $response->ConsumedTicks;
        $this->currentQuota = $response->CurrentQuota;
        $this->allowedQuota = $response->AllowedQuota;
    }

    /**
     * @return DateTime
     */
    public function getTimestamp(): DateTime
    {
        return $this->timestamp;
    }

    /**
     * @return string
     */
    public function getApiVersion(): string
    {
        return $this->apiVersion;
    }

    /**
     * @return bool
     */
    public function IsValidAccount(): bool
    {
        return $this->isValidAccount;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * @return string
     */
    public function getDatabase(): string
    {
        return $this->database;
    }

    /**
     * @return string
     */
    public function getRequestorIp(): string
    {
        return $this->requestorIp;
    }

    /**
     * @return int
     */
    public function getConsumedTicks(): int
    {
        return $this->consumedTicks;
    }

    /**
     * @return int
     */
    public function getCurrentQuota(): int
    {
        return $this->currentQuota;
    }

    /**
     * @return int
     */
    public function getAllowedQuota(): int
    {
        return $this->allowedQuota;
    }
}
