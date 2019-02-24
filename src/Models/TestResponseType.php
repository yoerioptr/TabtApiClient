<?php

namespace Yoerioptr\TabtApiClient\Models;

use DateTime;

/**
 * Class TestResponseType
 */
class TestResponseType
{
    /**
     * @var DateTime
     */
    private $Timestamp;

    /**
     * @var string
     */
    private $ApiVersion;

    /**
     * @var bool
     */
    private $IsValidAccount;

    /**
     * @var string
     */
    private $Language;

    /**
     * @var string
     */
    private $Database;

    /**
     * @var string
     */
    private $RequestorIp;

    /**
     * @var int
     */
    private $ConsumedTicks;

    /**
     * @var int
     */
    private $CurrentQuota;

    /**
     * @var int
     */
    private $AllowedQuota;

    /**
     * TestResponse constructor.
     *
     * @param object $response
     *
     * @throws \Exception
     */
    public function __construct(object $response)
    {
        $this->Timestamp = new DateTime($response->Timestamp);
        $this->ApiVersion = $response->ApiVersion;
        $this->IsValidAccount = $response->IsValidAccount;
        $this->Language = $response->Language;
        $this->Database = $response->Database;
        $this->RequestorIp = $response->RequestorIp;
        $this->ConsumedTicks = $response->ConsumedTicks;
        $this->CurrentQuota = $response->CurrentQuota;
        $this->AllowedQuota = $response->AllowedQuota;
    }

    /**
     * @return DateTime
     */
    public function getTimestamp(): DateTime
    {
        return $this->Timestamp;
    }

    /**
     * @return string
     */
    public function getApiVersion(): string
    {
        return $this->ApiVersion;
    }

    /**
     * @return bool
     */
    public function IsValidAccount(): bool
    {
        return $this->IsValidAccount;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->Language;
    }

    /**
     * @return string
     */
    public function getDatabase(): string
    {
        return $this->Database;
    }

    /**
     * @return string
     */
    public function getRequestorIp(): string
    {
        return $this->RequestorIp;
    }

    /**
     * @return int
     */
    public function getConsumedTicks(): int
    {
        return $this->ConsumedTicks;
    }

    /**
     * @return int
     */
    public function getCurrentQuota(): int
    {
        return $this->CurrentQuota;
    }

    /**
     * @return int
     */
    public function getAllowedQuota(): int
    {
        return $this->AllowedQuota;
    }
}
