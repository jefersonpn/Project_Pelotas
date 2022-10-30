<?php
 
// DESTA FORMA ABAIXO ENTROU OS DADOS NO BANCO DE DADOS, faltou a imagem e a data_cadastro não entrou
 
//including code for database conection
include 'conectar.php';

//Using the bindParam you can pass values by Variables
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cidade = $_POST['cidade'];
$login_doador= $_POST['login'];
$senha_doador= $_POST['senha'];
//$data_cadastro=$_POST['data'];
 
$sqlquery = "INSERT INTO doador (nome, email, telefone, cidade, login_doador, senha_doador) VALUES ('$nome', '$email', '$telefone', '$cidade', '$login_doador', '$senha_doador')";
 
if ($conn->query($sqlquery) === TRUE) {
    echo "record inserted successfully";
} else {
    echo "Error: " . $sqlquery . "<br>" . $conn->error;
}

?>
