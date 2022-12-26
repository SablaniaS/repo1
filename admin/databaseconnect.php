<?php
$servername = "localhost";
$username = "root";
$password = "";
date_default_timezone_set("Asia/Calcutta");   

try {
    $conn = new PDO("mysql:host=$servername;dbname=dbcovid", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>