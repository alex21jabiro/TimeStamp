<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "timestamp";
$password = "timestamp";
$dbname = "timestampmulti"

// Create connection
$connection = mysqli_connect($servername, $username, $password, $dbname);

?>