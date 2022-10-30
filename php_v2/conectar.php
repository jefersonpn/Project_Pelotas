<?php

$dns = 'mysql:host=localhost:8889;dbname=protetor';
$username = 'root';
$password = 'root';

try 
{
    $pdo = new PDO($dns, $username, $password);

} catch (PDOException $ex)
     {
        echo 'Error message: <strong>'.$ex->getMessage().'</strong>';
     }
     ?>