<?php
  
//including code for database conection
include 'conectar.php';

session_start();
//print_r($_SESSION['usuario_logado']); 

// Capturando as informações do enviadas pelo botao delete.
$id_doacao = $_GET['deletar_id'];
$id_doador = $_SESSION['usuario_logado']['1'];

echo $id_doacao;

$sqlquery = "DELETE FROM doacao_voluntaria WHERE id_doacao='$id_doacao'";

if ($conn->query($sqlquery) === TRUE) {

session_start();
$_SESSION['msg'] =array();
array_push($_SESSION['msg'], "Item DELETADO !");  

header("location: $anterior");

} else {
echo "Error: " . $sqlquery . "<br>" . $conn->error;
}

?>