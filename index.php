<?php

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "Hello World!<br>";

// Set sessions
if (!isset($_SESSION)) {
    session_start();
}

$hostname = "mydatabase.mysql.database.azure.com";
$username = "admin01";  
$password = "wqL!Qmaj57k8Sb#";
$dbname = "mytable";

// Check if mysqli extension is loaded
if (!function_exists('mysqli_connect')) {
    die("MySQLi extension is not loaded. Please ensure it is installed and enabled.");
}

echo "Attempting to connect to the database...<br>";

// Establish a connection to the database
$connection = mysqli_connect($hostname, $username, $password, $dbname);

// Check connection
if ($connection) {
    echo "Database connection established successfully.<br>";
} else {
    echo "Database connection not established. Error: " . mysqli_connect_error() . "<br>";
}

// Close the connection
mysqli_close($connection);