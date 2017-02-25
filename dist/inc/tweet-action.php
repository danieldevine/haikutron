<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/vendor/j7mbo/twitter-api-php/TwitterAPIExchange.php');
require_once($_SERVER['DOCUMENT_ROOT'] .'/config/settings.php');



$haikuuu = trim($_POST['haiku']);

$errors = array(); //To store errors
$form_data = array(); //Pass back the data to `form.php`

/* Validate the form on the server side */
if (empty($_POST['haiku'])) { //Name cannot be empty
    $errors['name'] = 'haiku is blank, you have failed.';
}

if (!empty($errors)) { //If errors in validation
    $form_data['success'] = false;
    $form_data['errors']  = $errors;
}
else { //If not, process the form, and return true on success
    $form_data['success'] = true;
    $form_data['posted'] = 'Data Was Posted Successfully';

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
        'status' => $haikuuu
    );

    $twitter = new TwitterAPIExchange($settings);
    echo $twitter->buildOauth($url, $requestMethod)
        ->setPostfields($postfields)
        ->performRequest();

}

//Return the data back to form.php
echo json_encode($form_data);
