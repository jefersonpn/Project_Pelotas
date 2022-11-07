<?php

$servername = "localhost:8889";
$username = "root";
$password = "root";
$dbname = "protetor";

// Para usar no bottao voltar.
$fallback = 'index.php';
$anterior = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $fallback;

 
// Create connection
$conn = new mysqli($servername,
    $username, $password, $dbname);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: "
        . $conn->connect_error);
}

     ?>