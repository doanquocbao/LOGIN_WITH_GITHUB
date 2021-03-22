<?php
// Start session
if(!session_id()){
    session_start();
}

// Include Github client library
require_once 'src/github_oauth_client.php';


/*
 * Configuration and setup GitHub API
 */
$clientID         = '28e00160de5f6209cef2';
$clientSecret     = '497ddd844c0502985f5bc7e9094ad0b26a23e963';
$redirectURL     = 'https://loginwithgithub.org/login-github/';

$gitClient = new github_oauth_client(array(
    'client_id' => $clientID,
    'client_secret' => $clientSecret,
    'redirect_uri' => $redirectURL,
));


// Try to get the access token
if(isset($_SESSION['access_token'])){
    $accessToken = $_SESSION['access_token'];
}