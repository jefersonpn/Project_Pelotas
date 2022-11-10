<?php
  
//including code for database conection
include 'conectar.php';


session_start();
//print_r($_SESSION['usuario_logado']); 


$id_doacao=$_POST['id_doacao'];
$status = $_POST['status'];

$sqlquery = "UPDATE `doacao_voluntaria` SET `fk_status_id`= $status WHERE `id_doacao`= $id_doacao"; 

if ($conn->query($sqlquery) === TRUE) 
{

  session_start();
  $_SESSION['msg'] =array();
  array_push($_SESSION['msg'],"Item atualizado com sucesso!");


  header("location: painel_parceiro.php");

}else {
  echo "Error: " . $sqlquery . "<br>" . $conn->error;
}


?>