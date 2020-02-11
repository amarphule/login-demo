<?php
session_start();
// Create mysql variables
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "user_login";
// Create Database connection.
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check Database connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>