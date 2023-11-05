<!--here we discuss about scope of variable in php-->

<!-- local variable -->
<?php
$var = 5;
function test()
{
    $var = 6;//local scope
    echo "Local variable =  $var <br>";
}
test();

function test2()
{
    global $var;//global scope
    echo "Global variable = $var <br>";
}
test2();


?>