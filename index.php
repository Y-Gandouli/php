<?php

echo "Hello World!<br>";

// Enable us to use Headers
ob_start();

// Set sessions
if (!isset($_SESSION)) {
    session_start();
}

$hostname = "mydatabase.mysql.database.azure.com";
$username = "admin01";
$password = "wqL!Qmaj57k8Sb#";
$dbname = "mytable";

$connection = mysqli_connect($hostname, $username, $password, $dbname);

if ($connection) {
    echo "Database connection established successfully.";
} else {
    echo "Database connection not established. Error: " . mysqli_connect_error();
}

// Flush the output buffer
ob_end_flush();