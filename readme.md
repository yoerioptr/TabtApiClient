# TabtApiClient
The TabT API Client is a helper library for [Frenoy's TabT API](http://api.frenoy.net/)

## Setup
Basic setup to get you started using the client.

```php
use Yoerioptr\TabtApiClient\Tabt\Tabt;

$tabt = new Tabt();
```

Optionally you can provide your VTTL credentials.

```php
use Yoerioptr\TabtApiClient\Models\Credentials\Credentials;
use Yoerioptr\TabtApiClient\Tabt\Tabt;

$credentials = new Credentials(
    'account',
    'password'
);

$tabt = new Tabt($credentials);
```

## Making Requests
Doing requests makes use of repositories, which can easily be accessed from the TabT helper class.

For example.

```php
$testResponse = $tabt->test()->info();
```

For convenience there is a `RequestType` class for each request that requires additional data as shown below.

```php
use Yoerioptr\TabtApiClient\Models\RequestType\GetClubTeamsRequestType

$getClubTeamsRequestType = new GetClubTeamsRequestType(
    'LK058',
    19
);

$getClubTeamsResponse = $tabt->club()->getClubTeams($getClubTeamsRequestType);
```

In special cases you can provide the `ParameterName` and `value` as shown below.

```php
use Yoerioptr\TabtApiClient\Models\RequestType\GetMatchesRequestType

$getMatchesRequestType = GetMatchesRequestType::createBy(
    GetMatchesRequestType::PARAM_DIVISION_ID,
    1
);

$getMatchesResponse = $tabt->match()->getMatches($getMatchesRequestType);
```
