<!-- here we discuss eveything about how we make a form in html and connect it with database to store the entered data of the form by using php -->
    
<!DOCTYPE html>
<html>
<head>
    <title>Sample Form</title>
</head>
<body>
    <h1>Contact Information</h1>
    
    <form action="p18_form_submission_to_database.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required><br><br>

        <label for="address">Address:</label>
        <textarea id="address" name="address" required></textarea><br><br>

        <input type="reset" value="Reset">
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Handle POST request
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];

        // Database connection details
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "contactform";

        // Create a database connection
        $conn = mysqli_connect($servername, $username, $password, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Insert data into the database
        $sql = "INSERT INTO contact_info (names, email, phone, address) VALUES ('$name', '$email', '$phone', '$address')";

        
        $result = mysqli_query($conn, $sql);

        if($result)
        {
            echo "<br><br>The data is inserted succesfully <br>";
        }
        else
        {
            echo "The data is not inserted succesfully because of this eroor ------->". mysqli_error($conn);
        }

        // Close the database connection
        $conn->close();
    }
    ?>
</body>
</html>
