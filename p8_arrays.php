<!-- Here we discuss everything about array in php -->
<?php
$colors = array("Red", "Green", "Blue");//1D array
// or
$colors = ["Red", "Green", "Blue"];//1D array
echo $colors[0];
echo $colors[1]; 

$person = array(//Assosiative array
    "first_name" => "ram",
    "last_name" => "anuj",
    "age" => 30
);
// or
$person = [//Assosiative array
    "first_name" => "rohan",
    "last_name" => "mohan",
    "age" => 30
];

echo $person["first_name"]; 
echo $person["last_name"]; 

$employees = array(//2D array
    array("John", "rohan", 30),
    array("Jane", "Smith", 25),
    array("Bob", "mohan", 40)
);
// or
$employees = [//2D array
    ["John", "Doe", 30],
    ["Jane", "Smith", 25],
    ["Bob", "Johnson", 40]
];

echo $employees[0][0];
echo $employees[1][2];

$fruits = [];
$fruits[] = "Apple"; // Adds "Apple" to the end of the array
array_push($fruits, "Banana"); // Adds "Banana" to the end of the array
sort($colors);//sort in ascending order according
asort($person);//sort in ascending order according to the value
echo "<br><br>";
foreach ($colors as $color)
{
   echo "$color<br>";
}
echo "<br>";
foreach ($person as $key => $value) {
    echo "<br>$key -- $value";
}
echo "<br><br>";
foreach($employees as $employee)
{
    foreach($employee as $person)
    {
        echo "$person";
    }
    echo "<br>";
}

unset($fruits[0]); // Removes the element at index 0



// Create an indexed array
$fruits = ["Apple", "Banana", "Cherry", "Date", "Fig"];

// Use current() to get the current element
echo "<br>Current Element: " . current($fruits) . "<br>";

// Use next() to move the internal pointer to the next element
next($fruits);
echo "Next Element: " . current($fruits) . "<br>";

// Use end() to move the internal pointer to the last element
end($fruits);
echo "Last Element: " . current($fruits) . "<br>";

// Use prev() to move the internal pointer to the previous element
prev($fruits);
echo "Previous Element: " . current($fruits) . "<br>";

// Use reset() to move the internal pointer to the first element
reset($fruits);
echo "First Element: " . current($fruits) . "<br>";

// Reset the pointer again
reset($fruits);
echo "After Reset: " . current($fruits) . "<br>";







?>