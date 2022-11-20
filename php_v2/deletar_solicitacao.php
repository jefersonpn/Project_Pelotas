<?php
  
//including code for database conection
include 'conectar.php';

session_start();
//print_r($_SESSION['usuario_logado']); 

// Capturando as informações do enviadas pelo botao delete.
$id_doacao = $_GET['deletar_id'];
$id_protetor = $_SESSION['id_protetor']['0'];

echo $id_doacao, $id_protetor;

$sqlquery = "DELETE FROM `doacao_solicitacao` WHERE `fk_doacao_id`=$id_doacao AND `fk_protetor_id`= $id_protetor";

if ($conn->query($sqlquery) === TRUE) {

session_start();
$_SESSION['msg'] =array();
array_push($_SESSION['msg'], "Item DELETADO !");  

} else {
echo "Error: " . $sqlquery . "<br>" . $conn->error;
}

// Alterando o statos do item para disponivel.
$status = "1";

$sqlquery = "UPDATE `doacao_voluntaria` SET `fk_status_id`= $status WHERE `id_doacao`= $id_doacao"; 

if ($conn->query($sqlquery) === TRUE) 
{

    // Tirando 1 da coluna qtd_coleta caso. protetor desista da doacao 
    $sql_doacao= "Select `id_protetor`, `qtd_coleta`  from `protetor` where `id_protetor`= $id_protetor" ;
                  $result=mysqli_query($conn, $sql_doacao);
                  while($row=mysqli_fetch_assoc($result)) 
                  {
                    $id_protetor=$row['id_protetor']; 
                    $qtd_coleta= $row['qtd_coleta'];
                  }

    $qtd_coleta= $qtd_coleta - 1;

    $sqlquery = "UPDATE `protetor` SET `qtd_coleta`= $qtd_coleta WHERE `id_protetor`= $id_protetor"; 

    if ($conn->query($sqlquery) === FALSE) 
    {
    echo "Error: " . $sqlquery . "<br>" . $conn->error;
    }      

  header("location: $anterior");

}else {
  echo "Error: " . $sqlquery . "<br>" . $conn->error;
}

?>