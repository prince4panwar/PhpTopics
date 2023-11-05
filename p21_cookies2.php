<?php

$cookieName = "user";
$cookieValue = "John Doe";
$expirationTime = time() + 3600;//time to expire cookies
$path = "/";
$domain = "example.com";
$secure = true; // Cookie transmitted over HTTPS only
$httponly = true; // JavaScript cannot access the cookie

setcookie($cookieName, $cookieValue, $expirationTime, $path, $domain, $secure, $httponly);

?>
