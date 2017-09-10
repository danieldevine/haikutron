<?php
/**
 * Tweets Limerick
 *
 * PHP Version 7.1
 *
 * @category Tweet
 * @package  Haikutronix
 * @author   Dan Devine <jerk@coderjerk.com>
 * @license  WTFPL http://www.wtfpl.net/txt/copying/
 * @link     https://haiku.coderjerk.com
 */
$root     = $_SERVER["DOCUMENT_ROOT"];
$site_url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]";

require "vendor/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;
require_once 'config/settings.php';

header('Content-Type: image/jpeg');
$img = imageLimerick($limerick);
imagepng($img, 'limrixx.png');
imagedestroy($img);

$image = $site_url.'limrixx.png';

$connection = new TwitterOAuth($CONSUMER_KEY, $CONSUMER_SECRET, $ACCESS_TOKEN, $ACCESS_TOKEN_SECRET);

$message = "Limerixx 2.0";
$media = $connection->upload('media/upload', ['media' => $image]);
$parameters = [
    'status' => $message,
    'media_ids' => implode(',', [$media->media_id_string])
];

$result = $connection->post('statuses/update', $parameters);