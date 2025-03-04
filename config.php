<?php
// Database connection settings
$servername = "localhost"; // usually localhost
$username = "root"; // default username for XAMPP is "root"
$password = ""; // default password for XAMPP is empty
$dbname = "coffee_shop"; // the name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
