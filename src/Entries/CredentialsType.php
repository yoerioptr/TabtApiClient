<?php

namespace Yoerioptr\TabtApiClient\Entries;

/**
 * Class CredentialsType
 *
 * @package Yoerioptr\TabtApiClient\Entries
 */
final class CredentialsType implements RequestTypeInterface
{

    /**
     * @var string
     */
    private string $account;

    /**
     * @var string
     */
    private string $password;

    /**
     * @var int|null
     */
    private ?int $onBehalfOf = null;

    /**
     * CredentialsType constructor.
     *
     * @param string $account
     * @param string $password
     * @param int|null $onBehalfOf
     */
    public function __construct(
        string $account,
        string $password,
        ?int $onBehalfOf = null
    ) {
        $this->account = $account;
        $this->password = $password;
        $this->onBehalfOf = $onBehalfOf;
    }

    /**
     * @param string $account
     */
    public function setAccount(string $account): void
    {
        $this->account = $account;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @param int|null $onBehalfOf
     */
    public function setOnBehalfOf(?int $onBehalfOf): void
    {
        $this->onBehalfOf = $onBehalfOf;
    }

    /**
     * {@inheritDoc}
     */
    public function toArray(): array
    {
        $array = [];

        foreach ($this as $key => $value) {
            $array[ucfirst($key)] = $value;
        }

        return $array;
    }

}
