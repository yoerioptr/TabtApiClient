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
     * Credentials constructor.
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
        $this->Account = $account;
        $this->Password = $password;
        $this->OnBehalfOf = $onBehalfOf;
    }
}
