<?php

    define ('DB_SERVERNAME', 'localhost');
    define ('DB_USERNAME', 'root');
    define ('DB_PASSWORD', 'password');
    define ('DB_NAME', 'Users');

    $conn = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if ($conn && $conn->connect_error) {
        echo 'Connection Failed: ' . $conn->connect_error;
    }

    $conn->close();

?>