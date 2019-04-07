<?php

namespace Yoerioptr\TabtApiClient\Models\Credentials;

use Yoerioptr\TabtApiClient\Models\RequestTypeInterface;

/**
 * Class Credentials
 *
 * @package Yoerioptr\TabtApiClient\Models\Credentials
 */
class Credentials implements RequestTypeInterface
{
    /**
     * @var string
     */
    public $Account;

    /**
     * @var string
     */
    public $Password;

    /**
     * @var int|null
     */
    public $OnBehalfOf;

    /**
     * @param string $account
     * @param string $password
     * @param int|null $onBehalfOf
     *
     * @return Credentials
     */
    public static function Create(
        string $account,
        string $password,
        ?int $onBehalfOf = null
    ): self {
        $requestType = new self();

        $requestType->Account = $account;
        $requestType->Password = $password;
        $requestType->OnBehalfOf = $onBehalfOf;

        return $requestType;
    }
}
