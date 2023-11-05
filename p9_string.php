<?php
// Define two strings for concatenation
$string1 = "Hello, ";//This is how we define the string 
$string2 = "World!";//This is how we define the string 

// Concatenate the strings
$concatenatedString = $string1 . $string2;

// Display the concatenated string
echo "Concatenated String: " . $concatenatedString . "<br>";

// Reverse the concatenated string
$reversedString = strrev($concatenatedString);
echo "Reversed String: " . $reversedString . "<br>";

// Find the position of "World" in the concatenated string
$position = strpos($concatenatedString, "World");
if ($position !== false) {
    echo "Position of 'World' in the string: " . $position . "<br>";
} else {
    echo "'World' not found in the string.<br>";
}

// Get the length of the concatenated string
$length = strlen($concatenatedString);
echo "Length of the string: " . $length . "<br>";

// Convert the concatenated string to lowercase
$lowercaseString = strtolower($concatenatedString);
echo "Lowercase String: " . $lowercaseString . "<br>";

// Convert the concatenated string to uppercase
$uppercaseString = strtoupper($concatenatedString);
echo "Uppercase String: " . $uppercaseString . "<br>";



echo "<br><br>HEREDOC :<br>";
echo<<<END
This
is 
how 
we 
use 
heredoc
END;
?>
