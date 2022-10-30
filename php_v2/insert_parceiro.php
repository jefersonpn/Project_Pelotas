<?php

// DESTA FORMA ABAIXO ENTROU OS DADOS NO BANCO DE DADOS, faltou a imagem e a data_cadastro não entrou
 
//including code for database conection
include 'conectar.php';

//Using the bindParam you can pass values by Variables
$nomefantasia = $_POST['nomefantasia'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cidade = $_POST['cidade'];
$cnpj = $_POST['cnpj'];
$login_parceiro= $_POST['login'];
$senha_parceiro= $_POST['senha'];
//$data_cadastro=$_POST['data'];
 
$sqlquery = "INSERT INTO parceiro (nomefantasia, email, telefone, cidade, login_parceiro, senha_parceiro) VALUES ('$nomefantasia', '$email', '$telefone', '$cidade', '$login_parceiro', '$senha_parceiro')";
 
if ($conn->query($sqlquery) === TRUE) {
    echo "record inserted successfully";
} else {
    echo "Error: " . $sqlquery . "<br>" . $conn->error;
}

?>
