<?php
    // Conectar la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=politecnics", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->exec("set names utf8");
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>