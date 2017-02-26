<?php

require_once('vendor/j7mbo/twitter-api-php/TwitterAPIExchange.php');
require_once('config/settingshkt.php');

/**
 * Tokens, keys and secrets.
 * @var array
 */
$settings = array(
    'oauth_access_token' => $ACCESS_TOKEN,
    'oauth_access_token_secret' => $ACCESS_TOKEN_SECRET,
    'consumer_key' => $CONSUMER_KEY,
    'consumer_secret' => $CONSUMER_SECRET
);


$url = 'https://api.twitter.com/1.1/statuses/update.json';
$requestMethod = 'POST';

$postfields = array(
    'status' => $haiku
);

$twitter = new TwitterAPIExchange($settings);
$twitter->buildOauth($url, $requestMethod)
    ->setPostfields($postfields)
    ->performRequest();
