<!--Here we discuss about Operators in php-->
<!-- 1. Arithmetic Operators -->
<!-- 2. Logical Operators -->
<!-- 3. Comparison Operators -->
<!-- 4. Assignment Operators -->
<!-- 5. Increment Operators -->
<!-- 6. String Operators -->
<!-- 7. Array Operators -->

<?php
echo "1. Arithmetic Operator (+, -, *, /, **)";
echo "<br> 5+2 = ",5+2;     
echo "<br> 5-2 = ",5-2;     
echo "<br> 5*2 = ",5*2;     
echo "<br> 5/2 = ",5/2;     
echo "<br> 5**2 = ",5**2;

echo "<br><br>2. Logical Operator(&&, ||, !, xor)<br>";
$age = 25;
$isStudent = true;

if ($age >= 18 && $isStudent) {
    echo "You are eligible for a student discount.";
} else {
    echo "You are not eligible for a student discount.";
}

$isMember = false;
$isGuest = true;

if ($isMember || $isGuest) {
    echo "<br>Welcome to our website!";
} else {
    echo "Please log in or sign up to access our content.";
}

$loggedIn = false;

if (!$loggedIn) {
    echo "<br>Please log in to continue.";
} else {
    echo "Welcome back!";
}

$isMale = true;
$isMarried = false;

if ($isMale xor $isMarried) {
    echo "<br>You are a single male.";
} else {
    echo "You are either married or not male.";
}

echo "<br><br>3. Comparison Operator(++, != <>, <, >, <=, >=, ===, !==)";
$num1 = 5;
$num2 = "5";

if ($num1 == $num2) {
    echo "<br>They are equal.";
} else {
    echo "They are not equal.";
}
$num1 = 5;
$num2 = "5";

if ($num1 === $num2) {
    echo "They are identical.";
} else {
    echo "<br>They are not identical.";
}
$num1 = 5;
$num2 = "5";

if ($num1 != $num2) {
    echo "They are not equal.";
} else {
    echo "<br>They are equal.";
}
$num1 = 5;
$num2 = "5";

if ($num1 !== $num2) {
    echo "<br>They are not identical.";
} else {
    echo "They are identical.";
}
$age = 25;

if ($age > 18) {
    echo "<br>You are older than 18.";
} else {
    echo "You are not older than 18.";
}
$score = 85;

if ($score < 90) {
    echo "<br>You did not score 90 or higher.";
} else {
    echo "You scored 90 or higher.";
}
$quantity = 10;

if ($quantity >= 5) {
    echo "<br>You have enough items.";
} else {
    echo "You do not have enough items.";
}
$temperature = 30;

if ($temperature <= 32) {
    echo "<br>It's freezing!";
} else {
    echo "It's not freezing.";
}

echo "<br><br>4. Assignment Operator (=, +=, -=, *=, /=, %=)";
$x = 10;
$y = 5;
$x = 10;
$x += 5; // Equivalent to $x = $x + 5;

echo $x; // Output: 15
echo "<br>";
$y = 20;
$y -= 7; // Equivalent to $y = $y - 7;
echo $y; // Output: 13
echo "<br>";
$a = 5;
$a *= 4; // Equivalent to $a = $a * 4;
echo $a; // Output: 20
echo "<br>";
$b = 50;
$b /= 10; // Equivalent to $b = $b / 10;
echo $b; // Output: 5
echo "<br>";
$c = 17;
$c %= 5; // Equivalent to $c = $c % 5;
echo $c; // Output: 2
echo "<br>";
$message = "Hello, ";
$name = "John";
$message .= $name; // Equivalent to $message = $message . $name;
echo $message; // Output: "Hello, John"
echo "<br>";


?>