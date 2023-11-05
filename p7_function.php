<!-- here we discuss all about the function -->

<?php
echo "FUNCTIONS<br><br>";
// Function definition with arguments
function greet($name) {
    echo "Hello, $name! (function with pararmeters)<br>";
}

// Function call with arguments
greet("John");

// Function definition without arguments
function sayHello() {
    echo "Hello, World! (function without pararmeters)<br>";
}

// Function call without arguments
sayHello();


// Function definition with default argument
function greetDefault($name = "Guest") {
    echo "Hello, $name! (function with default pararmeters)<br>";
}

// Function call without an argument (uses the default)
greetDefault();

echo "<br><br>Two methods of passing arguments in php<br>";
echo "<br>1. Using call by value<br>";

function incrementValue($num) {
    $num++;
    echo "Inside function: $num<br>";
}
$number = 5;
incrementValue($number);
echo "Outside function: $number<br>";

echo "<br>2. Using call by reference<br>";
function incrementReference(&$num) {
    $num++;
    echo "Inside function: $num<br>";
}

$number = 5;
incrementReference($number);
echo "Outside function: $number<br>";

echo "<br><br>RECURSION(In which function calls itself again and again until it get the required result)<br><br>";

function factorial($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

$number = 5; // Change this to the desired number for which you want to calculate the factorial.
$result = factorial($number);
echo "Factorial of $number is $result";




?>