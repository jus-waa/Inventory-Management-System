<?php
    $servername = 'localhost';
    $db_port = '3307';
    
    //Connecting to database.
    try {
        $conn = new PDO("mysql:host=$servername;port=$db_port;dbname=myinventory", 'root', '');
        $conn->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (\Exception $e ) {
        $error_message = $e->getMessage();
    }

?>