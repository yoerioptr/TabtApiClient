<?php

use Yoerioptr\TabtApiClient\Client\Client;
use Yoerioptr\TabtApiClient\Entries\CredentialsType;
use Yoerioptr\TabtApiClient\Tabt;

// Instantiate the client
$client = new Client();

// Optionally you can provide your credentials
$credentials = new CredentialsType('username', 'password');
$client->setCredentials($credentials);

// Instantiate the TabT Api Client
$tabt = new Tabt($client);

// Make the testRequest using the TestRepository provided by the TabT Api Client
$testResponse = $tabt->test()->info();
