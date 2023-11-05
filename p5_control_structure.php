<!--Here we discuss about Control structure in php-->

<?php

echo "Control Structure<br><br>";
echo "1. Branching Statements<br>";
$temperature = 32;
if ($temperature > 30)//if statement
{
    echo "It's a hot day!";
}

$temperature = 28;
if ($temperature > 30)//if else statement
{
    echo "It's a hot day!";
} else {
    echo "<br>It's not too hot today.";
}

$grade = 75;
if ($grade >= 90) {//if else if else statement
    echo "A";
} elseif ($grade >= 80) {
    echo "B";
} elseif ($grade >= 70) {
    echo "<br>C";
} elseif ($grade >= 60) {
    echo "D";
} else {
    echo "F";
}


$day = "Monday";
switch ($day) {//switch statment
    case "Monday":
        echo "<br>It's the start of the work week.";
        break;
    case "Tuesday":
    case "Wednesday":
    case "Thursday":
        echo "It's a weekday.";
        break;
    case "Friday":
        echo "It's Friday! The weekend is almost here.";
        break;
    case "Saturday":
    case "Sunday":
        echo "It's the weekend!";
        break;
    default:
        echo "Invalid day.";
}

$age = 20;
// Using the ternary operator to determine if a person is a minor or an adult
$status = ($age < 18) ? "Minor" : "Adult";

echo "<br>You are a $status.";

echo "<br><br>2. Looping Statements";
$counter = 1;
while ($counter <= 5) {
    echo "<br>Iteration $counter";
    $counter++;
}

echo "<br><b>";
for ($i = 1; $i <= 5; $i++) {
    echo "<br>Iteration $i";
}

echo "<b><br>";
$counter = 1;
do {
    echo "<br>Iteration $counter";
    $counter++;
} while ($counter <= 5);

echo "<b><br><br>";
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $color) {
    echo $color . "<br>";
}



?>