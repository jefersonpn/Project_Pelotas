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
    
    $msg = "Seja bem vindo!";
    session_start();
    $_SESSION['usuario_logado'] =array();
    array_push($_SESSION['usuario_logado'], $nome, $email, $telefone, $cidade);     
    //print_r($_SESSION['usuario_logado']);
    header("location: painel_doador.php");
    
} else {
echo "Error: " . $sqlquery . "<br>" . $conn->error;
}

?>