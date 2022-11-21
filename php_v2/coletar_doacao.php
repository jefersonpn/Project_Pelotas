<?php
  
//including code for database conection
include 'conectar.php';

session_start();
//print_r($_SESSION['nome']); 

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
                    $qtd_coleta= $row['qtd_coleta'];
                  }


// Pega a data atual em segundos
$hoje= time();
// pega apenas o mês atual
$mesAtual= (date("m",$hoje));
// Pega a data atual em segundos
    
//
$qtd_coletada= '';

$sql= "SELECT fk_protetor_id AS protetor, id_solicitacao AS solicitacao, EXTRACT(MONTH FROM data_cadastro) AS month FROM doacao_solicitacao WHERE fk_protetor_id = $id_protetor" ;
$result=mysqli_query($conn, $sql);

while($row=mysqli_fetch_assoc($result)) 
{
  $id_solicitacao=$row['solicitacao']; 
  $fk_protetor_id=$row['protetor']; 
  $mes=$row['month'];
  
 // echo "Solicitacao => ".$id_solicitacao."<br>Protetor =>  ".$fk_protetor_id." <br> Mes=> ".$mes."<br><br>";

  if($mes == $mesAtual){
    //echo "Coleta do mês => ".$mesAtual."<br>";
    $qtd_coletada++;
  }

  //echo "Solicitacao => ".$id_solicitacao."<br>Protetor =>  ".$fk_protetor_id." <br> Mes=> ".$mes."<br>Quantidade coletada atualmente: ".$qtd_coletada."<br>";
}
//echo "QTD => ".$qtd_coletada."<br>"; 

//echo "id_doacao= $id_doacao, id_parceiro= $id_parceiro, id_protetor= $id_protetor, id_doador= $id_doador <br>";

// Coletar item apenas se tiver 2 ou menos no mes ja coletado.
if ($qtd_coletada < 2)
{
    // Inserindo na  lista dos meus coletados.
  $sqlquery = "INSERT INTO doacao_solicitacao (fk_doacao_id, fk_parceiro_id, fk_protetor_id, fk_doador_id) VALUES
  ('$id_doacao', '$id_parceiro', '$id_protetor', '$id_doador')";

  if ($conn->query($sqlquery) === TRUE) {

  } else {
  echo "Error: " . $sqlquery . "<br>" . $conn->error;
  }

  // Alterando o statos do item para reservado.
  $status = "5";

  $sqlquery = "UPDATE `doacao_voluntaria` SET `fk_status_id`= $status WHERE `id_doacao`= $id_doacao"; 

  if ($conn->query($sqlquery) === TRUE) 
  {
      // Verificando se o PROTETOR ja coletou mais de 2 no mes
      // Tirando 1 da coluna qtd_coleta caso. protetor desista da doacao 
      $sql_doacao= "Select * from `protetor` where `id_protetor`= $id_protetor" ;
                    $result=mysqli_query($conn, $sql_doacao);
                    while($row=mysqli_fetch_assoc($result)) 
                    {
                      $id_protetor=$row['id_protetor']; 
                      $qtd_coleta= $row['qtd_coleta'];
                    }

      $qtd_coleta++;

      $sqlquery = "UPDATE `protetor` SET `qtd_coleta`= $qtd_coleta WHERE `id_protetor`= $id_protetor"; 

      if ($conn->query($sqlquery) === FALSE) 
      {
      echo "Error: " . $sqlquery . "<br>" . $conn->error;
      }  
    header("location: meus_coletados.php");

  }else {
    echo "Error: " . $sqlquery . "<br>" . $conn->error;
  }

}else{
    header("location: limite_de_coleta.php");
}


?>