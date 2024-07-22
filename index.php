<?php

echo "Hello World!<br>";

// Set sessions
if (!isset($_SESSION)) {
    session_start();
}

$hostname = "mydatabase.mysql.database.azure.com";
$username = "admin01@mydatabase";  // Ensure the username includes the server name
$password = "wqL!Qmaj57k8Sb#";
$dbname = "mytable";

// Establish a connection to the database
$connection = mysqli_connect($hostname, $username, $password, $dbname);

// Check connection
if ($connection) {
    echo "Database connection established successfully.";
} else {
    echo "Database connection not established. Error: " . mysqli_connect_error();
}