<?php
    $servername = 'localhost';
    $db_port = '3306';
    
    //Connecting to database.
    try {
        $conn = new PDO("mysql:host=$servername;port=$db_port;dbname=myinventory", 'root', '');
        $conn->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e ) {
        $error_message = $e->getMessage();
    }
?>