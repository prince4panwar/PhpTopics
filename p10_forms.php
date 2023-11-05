<!-- here we discuss everything about super global variables by making a form -->
<!DOCTYPE html>
<html>
<head>
    <title>Sample Form</title>
</head>
<body>
    <h1>Contact Information</h1>
    
    <form action="p10_forms.php" method="post">
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

        // You can process the form data here or display it as needed.
        echo "<h2>Posted Data</h2>";
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Phone: " . $phone . "<br>";
        echo "Address: " . $address . "<br>";
    } elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Handle GET request
        if (isset($_GET["name"]) && isset($_GET["email"]) && isset($_GET["phone"]) && isset($_GET["address"])) {
            $name = $_GET["name"];
            $email = $_GET["email"];
            $phone = $_GET["phone"];
            $address = $_GET["address"];

            // You can process the form data here or display it as needed.
            echo "<h2>GET Data</h2>";
            echo "Name: " . $name . "<br>";
            echo "Email: " . $email . "<br>";
            echo "Phone: " . $phone . "<br>";
            echo "Address: " . $address . "<br>";
        }
    }
    ?>

</body>
</html>
