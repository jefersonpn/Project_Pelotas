<?php
 
// DESTA FORMA ABAIXO ENTROU OS DADOS NO BANCO DE DADOS, faltou a imagem e a data_cadastro não entrou
 
//including code for database conection
include 'conectar.php';

//Using the bindParam you can pass values by Variables
$nome = $_POST['nomefantasia'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cidade = $_POST['cidade'];
$login_parceiro= $_POST['login'];
$senha_parceiro= $_POST['senha'];
$cnpj = $_POST['cnpj'];
 
$sqlquery = "INSERT INTO parceiro (nome, email, telefone, cidade, login_parceiro, senha_parceiro, cnpj) VALUES ('$nome', '$email', '$telefone', '$cidade', '$login_parceiro', '$senha_parceiro', '$cnpj')";
 
if ($conn->query($sqlquery) === TRUE) {
    
    $msg = "Seja bem vindo!";
    session_start();
    $_SESSION['usuario_logado'] =array();
    array_push($_SESSION['usuario_logado'], $nome, $email, $telefone, $cidade, $cnpj);     
    //print_r($_SESSION['usuario_logado']);
    header("location: painel_parceiro.php");
    
} else {
echo "Error: " . $sqlquery . "<br>" . $conn->error;
}

?>