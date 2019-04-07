<?php

use Yoerioptr\TabtApiClient\Models\Credentials\Credentials;
use Yoerioptr\TabtApiClient\Tabt\Tabt;

// Setting up the credentials (optional)
$credentials = new Credentials(
    'account',
    'password'
);

// Creating the TabT helper class
$tabt = new Tabt($credentials);

// Getting the response
$testResponse = $tabt->test()->info();
