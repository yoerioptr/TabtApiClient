<?php

use Yoerioptr\TabtApiClient\Models\RequestType\GetMatchesRequestType;
use Yoerioptr\TabtApiClient\Tabt\Tabt;

require 'vendor/autoload.php';

$tabt = new Tabt();

dump(
    $tabt->match()->getMatchSystems(

    )
);
