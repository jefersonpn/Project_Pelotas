<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome1']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email1']));
$telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone1']));
$cidade = mysqli_real_escape_string($conexao, trim($_POST['cidade1']));
$login_doador = mysqli_real_escape_string($conexao, trim($_POST['logind1']));
$senha_doador = mysqli_real_escape_string($conexao, trim($_POST['senha1']));

$sql = "select count(*) as total from doador where login_doador = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: cadastrar_login.php');
	exit;
}

$sql = "INSERT INTO doador (nome, email, telefone, cidade, login_doador, senha_doador, data_cadastro) VALUES ('$nome1', '$email', '$telefone1', '$cidade1', '$logind1', '$senha1', NOW())";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: cadastrar_login.php');
exit;
?>