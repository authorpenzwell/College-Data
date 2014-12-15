<?php
$servername = "sql2.njit.edu";
$username = "ko45";
$password = "obscene78";

try {
    $conn = new PDO("mysql:host=$servername;dbname=ko45", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
