<?php
ob_start();
require_once 'vendor/autoload.php';

if (!session_id())
{
    session_start();
}

// Call Facebook API

$facebook = new \Facebook\Facebook([
    'app_id'      => '672448357531623',
    'app_secret'     => 'c68215917e8ced3c6feeaaf799a39cad',
    'default_graph_version'  => 'v2.10'
]);
//logout.php

//include 'config.php';

//Reset OAuth access token
//$google_client->revokeToken();

//Destroy entire session data.
session_destroy();

//redirect page to index.php
header('location:index2.php');

?>