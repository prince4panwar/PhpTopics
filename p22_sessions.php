<!-- essions allow you to maintain user-specific information, such as login status, shopping cart contents, and other temporary data. Here's how you can use sessions in PHP: -->
<!-- Typically, this is done at the beginning of each PHP script where you want to work with session data. -->
<?php
// Starting a Session:
session_start();
// Session is now started and can store data
// Your PHP code here

// Storing Data in a Session:
// You can store data in the session by using the $_SESSION superglobal array
$_SESSION['username'] = 'JohnDoe';
$_SESSION['user_id'] = 123;


// Retrieving Data from a Session:
// To retrieve data from the session, you simply access the $_SESSION superglobal array.
$username = $_SESSION['username'];
$user_id = $_SESSION['user_id'];


// Unsetting and Destroying a Session:
// If you want to remove specific session data, you can use the unset() function.
// unset($_SESSION['username']);


// To end a user's session and clear all session data, you can use the session_destroy() function:
// session_destroy();



// Session Configuration Options:
// You can configure various session options using the session_set_cookie_params() and session_set_save_handler() functions. For example, you can control the session timeout, session cookie parameters, and more.

// Set the session timeout to 30 minutes
// session_set_cookie_params(1800);

// Checking for Session Existence:
    // To check if a session variable exists, you can use isset():

if (isset($_SESSION['username'])) {
    echo "Session exist";
}
else{
    echo "Session doesn't exist";
}
        



?>
