<?php

    echo "Hello World!";

    // Enable us to use Headers
    ob_start();

    // Set sessions
    if(!isset($_SESSION)) {
        session_start();
    }

    $hostname = "mydatabase.mysql.database.azure.com";
    $username = "admin01";
    $password = "wqL!Qmaj57k8Sb#";
    $dbname = "mytable";
    
    $connection = mysqli_connect($hostname, $username, $password, $dbname) or die("Database connection not established.") ;