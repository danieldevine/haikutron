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

$limerick = trim($_POST['limerick']);

$errors = array(); //To store errors
$form_data = array(); //Pass back the data to `form.php`

/* Validate the form on the server side */
if (empty($_POST['limerick'])) { //Name cannot be empty
    $errors['name'] = 'limerick is blank, you have failed.';
}

if (!empty($errors)) { //If errors in validation
    $form_data['success'] = false;
    $form_data['errors']  = $errors;
} else { //If not, process the form, and return true on success
    $form_data['success'] = true;
    $form_data['posted'] = 'Data Was Posted Successfully';

    header('Content-Type: image/jpeg');
    $img = imageLimerick($limerick);
    imagepng($img, 'limrixx.png');
    imagedestroy($img);

    $image = $site_url.'limrixx.png';

    $connection = new TwitterOAuth($CONSUMER_KEY, $CONSUMER_SECRET, $ACCESS_TOKEN, $ACCESS_TOKEN_SECRET);

    $message = "Limrixx says hi";
    $media = $connection->upload('media/upload', ['media' => $image]);
    $parameters = [
        'status' => $message,
        'media_ids' => implode(',', [$media->media_id_string])
    ];

    $result = $connection->post('statuses/update', $parameters);

}
//Return the data back to form.php
echo json_encode($form_data);