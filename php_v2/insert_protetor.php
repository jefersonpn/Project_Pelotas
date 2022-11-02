<?php
 
// DESTA FORMA ABAIXO ENTROU OS DADOS NO BANCO DE DADOS, faltou a imagem e a data_cadastro não entrou
 
//including code for database conection
include 'conectar.php';

//Using the bindParam you can pass values by Variables
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cidade = $_POST['cidade'];
$login_protetor= $_POST['login'];
$senha_protetor= $_POST['senha'];
 
$sqlquery = "INSERT INTO protetor (nome, email, telefone, cidade, login_protetor, senha_protetor) VALUES ('$nome', '$email', '$telefone', '$cidade', '$login_protetor', '$senha_protetor')";
 
if ($conn->query($sqlquery) === TRUE) {
    
    $msg = "Seja bem vindo!";
    session_start();
    $_SESSION['usuario_logado'] =array();
    array_push($_SESSION['usuario_logado'], $nome, $email, $telefone, $cidade);     
    //print_r($_SESSION['usuario_logado']);
    header("location: painel_protetor.php");
    
} else {
echo "Error: " . $sqlquery . "<br>" . $conn->error;
}

?>