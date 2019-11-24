<?php

namespace Yoerioptr\TabtApiClient\Response;

use DateTime;

/**
 * Class TestResponse
 *
 * @package Yoerioptr\TabtApiClient\Response
 */
class TestResponse implements ResponseInterface
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
     * @param object $rawResponse
     */
    public function __construct($rawResponse)
    {
        foreach ((array) $rawResponse as $key => $value) {
            $property = lcfirst($key);
            $this->$property = $value;
        }
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
    public function isValidAccount(): bool
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
