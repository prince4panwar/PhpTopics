<!-- here we discuss everthing about how do we insert data in the table -->
<?php
$username = "root";
$servername = "localhost";
$password = "";
$database = "princedb1";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn)
    die("Sorry we failed to connect ".mysqli_connect_error());  
else
    echo "Connection was successful <br>";

$first="one";
$second="two";
$sql = "INSERT INTO `employees` (`Name`, `Age`) VALUES ('Sourav', '20');";

$result = mysqli_query($conn, $sql);

if($result)
 {
     echo "The data is inserted succesfully <br>";
 }
 else
 {
     echo "The data is not inserted succesfully because of this eroor ------->". mysqli_error($conn);
 }

?>
