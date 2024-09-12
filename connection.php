<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '1234';
    $error_message = 'NULL';
    //Connecting to database.
    try {
        $conn = new PDO("mysql:host=$servername;dbname=myinventory", $username, $password);
        $conn->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch ( \Exception $e ) {
        $error_message = $e->getMessage();
    }
    var_dump($error_message);
?>