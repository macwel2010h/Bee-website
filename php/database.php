<?php
    $connString = "mysql:dbname=database;host=localhost;port=3306";
    $user = "root";
    $pass = "Abcd@1234";
    $port = "3306";

    try {
        $db = new PDO($connString, $user, $pass);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>