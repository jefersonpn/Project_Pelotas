<?php
  
//including code for database conection
include 'conectar.php';

session_start();
//print_r($_SESSION['usuario_logado']); 

$id_doacao = $_GET['id_doacao'];
$id_protetor = $_GET['id_protetor'];
$id_parceiro = $_POST['id_parceiro'];

$sql_doacao= "Select * from `doacao_voluntaria` where `id_doacao`= $id_doacao" ;
                  $result=mysqli_query($conn, $sql_doacao);
                  while($row=mysqli_fetch_assoc($result)) 
                  {
                    $id=$row['id_doacao']; 
                    $descricao=$row['descricao']; 
                    $status=$row['fk_status_id'];
                    $quantidade=$row['quantidade']; 
                    $imagem=$row['imagem']; 
                    $data_cadastro=$row['data_cadastro'];
                    $id_parceiro=$row['fk_parceiro_id']; 
                    $id_doador=$row['fk_doador_id']; 
                  }

//echo "id_doacao= $id_doacao, id_parceiro= $id_parceiro, id_protetor= $id_protetor, id_doador= $id_doador <br>";

// Inserindo na  lista dos meus coletados.
$sqlquery = "INSERT INTO doacao_solicitacao (fk_doacao_id, fk_parceiro_id, fk_protetor_id, fk_doador_id) VALUES
('$id_doacao', '$id_parceiro', '$id_protetor', '$id_doador')";

if ($conn->query($sqlquery) === TRUE) {

$msg = "Item coletado com sucesso!";
session_start();

} else {
echo "Error: " . $sqlquery . "<br>" . $conn->error;
}

// Alterando o statos do item para reservado.
$status = "5";

$sqlquery = "UPDATE `doacao_voluntaria` SET `fk_status_id`= $status WHERE `id_doacao`= $id_doacao"; 

if ($conn->query($sqlquery) === TRUE) 
{

  session_start();
  $_SESSION['msg'] =array();
  array_push($_SESSION['msg'],"Item atualizado com sucesso!");


  header("location: meus_coletados.php");

}else {
  echo "Error: " . $sqlquery . "<br>" . $conn->error;
}





?>