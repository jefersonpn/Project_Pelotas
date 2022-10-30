<?php
//including code for database conection
include 'conectar.php';

//Using the bindParam you can pass values by Variables
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cidade = $_POST['cidade'];
$login_protetor= $_POST['login'];
$senha_protetor= $_POST['senha'];
 
$sqlquery = "INSERT INTO protetor VALUES
    ($nome, $email, $telefone, $cidade, $login_protetor, $senha_protetor, current_timestamp";
 
if ($conn->query($sqlquery) === TRUE) {
    echo "record inserted successfully";
} else {
    echo "Error: " . $sqlquery . "<br>" . $conn->error;
}

?>