<?php
$host = "localhost";  // Change if your MySQL is on a different host
$user = "root";  // Change if you have a different database user
$pass = "";  // Set your MySQL password if applicable
$dbname = "coffee_shop";

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
