# TabtApiClient
The TabT API Client is a helper library for [Frenoy's TabT API](http://api.frenoy.net/)

## Setup
Basic setup to get you started using the client.

First of all, install the package using [Composer](https://getcomposer.org/)

```composer log
composer require yoerioptr/tabt-api-client
```

Instantiate the TabT Api Client as shown below

```php
use Yoerioptr\TabtApiClient\Client\Client;
use Yoerioptr\TabtApiClient\Entries\CredentialsType;
use Yoerioptr\TabtApiClient\Tabt;

// Create the SoapClient with the apropiate wsdl
$soapClient = new SoapClient("https://api.vttl.be/0.7/?wsdl");

// Instantiate the client
$client = new Client($soapClient);

// Optionally you can provide your credentials
$credentials = new CredentialsType('username', 'password');
$client->setCredentials($credentials);

// Instantiate the TabT Api Client
$tabt = new Tabt($client);
```


## Making Requests
Executing requests makes use of repositories, which can easily be accessed from the TabT helper class.

```php
$testResponse = $tabt->test()->info();
```

All usable requests can be found [here](https://github.com/yoerioptr/TabtApiClient/tree/master/src/Requests)
