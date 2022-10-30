<?php

$servername = "localhost:8889";
$username = "root";
$password = "root";
$dbname = "protetor";
 
// Create connection
$conn = new mysqli($servername,
    $username, $password, $dbname);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: "
        . $conn->connect_error);
}

     ?>