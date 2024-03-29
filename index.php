<?php 
    
    $host = "localhost";
    $port = "3306"; // Separate port from host
    $database = "project";
    $username = "root";
    $password = "";
    
    try {
        $conn = new PDO("mysql:host=$host;port=$port;dbname=$database;charset=utf8", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
    
?>