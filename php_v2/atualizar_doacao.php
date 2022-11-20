<?php
 
// DESTA FORMA ABAIXO ENTROU OS DADOS NO BANCO DE DADOS, faltou a imagem e a data_cadastro não entrou
 
//including code for database conection
include 'conectar.php';


session_start();
print_r($_SESSION['usuario_logado']); 


//Using the bindParam you can pass values by Variables

$id_doacao=$_POST['id_doacao'];
$descricao = $_POST['descricao'];
$quantidade = $_POST['quantidade'];
$id_parceiro = $_POST['parceiro'];
$id_doador = $_SESSION['usuario_logado']['0'];
// Tratanto a imagem
$imagem = $_FILES['imagem'];
$nome_imagem= $imagem['name'];
$imagem_file_temp= $imagem['tmp_name'];




// Tratando extensão da imagem
$ext_imagem= explode('.',$nome_imagem);
$ext_imagem= end($ext_imagem);// aqui pegamos apenas a extensao da imagem

echo $ext_imagem; // TESTE -> verificando o conteudo da variavel

$extensions= array('','jpeg','jpg','png');
if(in_array($ext_imagem, $extensions))
{
$upload_imagem= 'images/'.$nome_imagem;
move_uploaded_file($imagem_file_temp, $upload_imagem);

// Se nao selecionar uma imagem deve ficar a mesma que ja tinha.
if($nome_imagem == '')
{ 
  $restante= " WHERE `id_doacao`= $id_doacao";
}else{
  $restante=" ,`imagem`= '$nome_imagem' WHERE `id_doacao`= $id_doacao";
}

$sqlquery = "UPDATE `doacao_voluntaria` SET `descricao`= '$descricao', `quantidade`= $quantidade, `fk_parceiro_id`= $id_parceiro ".$restante; 

if ($conn->query($sqlquery) === TRUE) 
{

  session_start();
  $_SESSION['msg'] =array();
  array_push($_SESSION['msg'],"Item atualizado com sucesso!");


  header("location: painel_doador.php");

  }else {
  echo "Error: " . $sqlquery . "<br>" . $conn->error;
  }

}else{
echo "A imagem precisa ser ( jpeg jpg png ).. verifique!";
echo "</br> <a href='".$anterior."'>VOLTAR</a>";
}


?>