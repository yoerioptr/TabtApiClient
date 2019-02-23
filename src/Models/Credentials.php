<?php

namespace Yoerioptr\TabtApiClient\Models;

/**
 * Class Credentials
 *
 * @package Yoerioptr\TabtApiClient\Models
 */
class Credentials
{
    /**
     * @var string
     */
    private $account;

    /**
     * @var string
     */
    private $password;

    /**
     * @var int
     */
    private $onBehalfOf;

    /**
     * @param string $account
     * @param string $password
     */
    public function create($account, $password)
    {
        $this->account = $account;
        $this->password = $password;
    }

    public function _toJson()
    {
        return [
            'Account' => $this->account,
            'Password' => $this->password,
            'OnBehalfOf' => $this->onBehalfOf,
        ];
    }

    /**
     * @return string
     */
    public function getAccount(): string
    {
        return $this->account;
    }

    /**
     * @param string $account
     */
    public function setAccount(string $account): void
    {
        $this->account = $account;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return int
     */
    public function getOnBehalfOf(): int
    {
        return $this->onBehalfOf;
    }

    /**
     * @param int $onBehalfOf
     */
    public function setOnBehalfOf(int $onBehalfOf): void
    {
        $this->onBehalfOf = $onBehalfOf;
    }
}
