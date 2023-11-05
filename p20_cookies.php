<!-- Syntax: setcookie(name, value, expire, path, domain, secure, httponly); -->

<?php

$cookieName = "user";
$cookieValue = "John Doe";
$expirationTime = time() + 3600; // 1 hour from now

setcookie($cookieName, $cookieValue, $expirationTime);


// Retrieving Cookie Values
if (isset($_COOKIE["user"])) {
    $userName = $_COOKIE["user"];
    echo "Welcome back, $userName!";
} else {
    echo "Welcome to our website!";
}

// Modifying cookies value
$newCookieValue = "Jane Doe";
setcookie($cookieName, $newCookieValue, $expirationTime);


// Set the cookie's expiration time to a time in the past (e.g., 1 second ago)
// setcookie($cookieName, "", time() - 1);




?>
