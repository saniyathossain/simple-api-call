<?php

require __DIR__.'/vendor/autoload.php';

use GuzzleHttp\Client;

const TEST_ENDPOINT = 'http://staging.quran.com:3000/api/v3/chapters/1/verses';

/**
 * request
 *
 * @return
 */
function request($type = 'GET', $endpoint)
{
	$client = new Client();
	return $client->request($type, $endpoint);
}

echo request('GET', TEST_ENDPOINT)->getBody();