<?php

require __DIR__ . '/../vendor/autoload.php';

use Aveiv\OpenExchangeRatesApi\Client;
use GuzzleHttp\Client as GuzzleClient;


$client = new Client('YOUR_APP_ID', new GuzzleClient());

// Get currency list
print_r($client->getCurrencies());

// Get latest rates
print_r($client->getLatest());

// Get latest rates with custom base currency
print_r($client->getLatest('EUR'));

// Get rates by date
print_r($client->getHistorical(new DateTime()));

// Get rates by date with custom base currency
print_r($client->getHistorical(new DateTime(), 'EUR'));
