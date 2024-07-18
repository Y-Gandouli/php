<?php

echo "Hello World!";

$serverName = getenv('Smydatabase.mysql.database.azure.com'); // Get server name from environment variables
$connectionOptions = array(
    "Database" => getenv('mytable'),  // Get database name from environment variables
    "Uid" => getenv('admin01'),       // Get username from environment variables
    "PWD" => getenv('wqL!Qmaj57k8Sb#')// Get password from environment variables
);

try {
    $conn = new PDO("sqlsrv:server=$serverName;Database=".$connectionOptions['Database'], $connectionOptions['Uid'], $connectionOptions['PWD']);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}