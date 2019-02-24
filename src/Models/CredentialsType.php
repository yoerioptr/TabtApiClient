<?php

namespace Yoerioptr\TabtApiClient\Models;

/**
 * Class CredentialsType
 *
 * @package Yoerioptr\TabtApiClient\Models
 */
class CredentialsType
{
    /**
     * @var string
     */
    private $Account;

    /**
     * @var string
     */
    private $Password;

    /**
     * @var int
     */
    private $OnBehalfOf;

    /**
     * CredentialsType constructor.
     *
     * @param $Account
     * @param $Password
     * @param null $OnBehalfOf
     */
    public function __construct(
        $Account,
        $Password,
        $OnBehalfOf = null
    ) {
        $this->Account = $Account;
        $this->Password = $Password;
        $this->OnBehalfOf = $OnBehalfOf;
    }
}
