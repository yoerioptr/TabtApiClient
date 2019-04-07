<?php

use Yoerioptr\TabtApiClient\Models\RequestType\GetClubTeamsRequestType;
use Yoerioptr\TabtApiClient\Tabt\Tabt;

// Creating the TabT helper class
$tabt = new Tabt();

// Creating the request
$getClubTeamsRequestType = new GetClubTeamsRequestType(
    'LK058',
    19
);

// Getting the response
$getClubTeamsResponse = $tabt->club()->getClubTeams($getClubTeamsRequestType);
