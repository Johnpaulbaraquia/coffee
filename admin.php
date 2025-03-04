<?php
session_start(); // Start the session

// Check if the user is logged in and has the 'admin' role
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    echo "Access Denied!";
    exit; // Stop the script execution if not admin
}

include 'config.php';

// Your admin panel code goes here
echo "Welcome, Admin!";
?>
