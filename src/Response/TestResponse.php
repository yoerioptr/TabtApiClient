<?php

namespace Yoerioptr\TabtApiClient\Response;

use DateTime;

/**
 * Class TestResponse
 *
 * @package Yoerioptr\TabtApiClient\Response
 */
final class TestResponse implements ResponseInterface
{

    /**
     * @var DateTime
     */
    private DateTime $timestamp;

    /**
     * @var string
     */
    private string $apiVersion;

    /**
     * @var bool
     */
    private bool $isValidAccount;

    /**
     * @var string
     */
    private string $language;

    /**
     * @var string
     */
    private string $database;

    /**
     * @var string
     */
    private string $requestorIp;

    /**
     * @var int
     */
    private int $consumedTicks;

    /**
     * @var int
     */
    private int $currentQuota;

    /**
     * @var int
     */
    private int $allowedQuota;

    /**
     * TestResponse constructor.
     *
     * @param object $rawResponse
     * @throws \Exception
     */
    public function __construct($rawResponse)
    {
        foreach ((array) $rawResponse as $key => $value) {
            $property = lcfirst($key);

            switch ($property) {
                case 'timestamp':
                    $this->timestamp = new DateTime((string) $value);
                    break;
                default:
                    $this->$property = $value;
            }
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
