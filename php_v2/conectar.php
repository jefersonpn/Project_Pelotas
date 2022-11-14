<?php

// $servername = "localhost:8889"; 
$servername= "sql111.epizy.com"; //on-line
// $username = "root";
 $username= "epiz_32981082"; //on-line
// $password = "root";
 $password="aanj2iONLguhzO"; //on-line
// $dbname = "protetor";
 $dbname= "epiz_32981082_amigopet_db"; //on-line

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