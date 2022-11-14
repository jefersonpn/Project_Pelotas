<?php
 
// DESTA FORMA ABAIXO ENTROU OS DADOS NO BANCO DE DADOS, faltou a imagem e a data_cadastro não entrou
 
//including code for database conection
include 'conectar.php';


session_start();
print_r($_SESSION['usuario_logado']['1']); 


//Using the bindParam you can pass values by Variables


$descricao = $_POST['descricao'];
$quantidade = $_POST['quantidade'];
$id_parceiro = $_POST['parceiro'];
$id_doador = $_SESSION['usuario_logado']['1'];
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


$sqlquery = "INSERT INTO doacao_voluntaria (descricao, status, quantidade, fk_parceiro_id, fk_doador_id, imagem, fk_status_id) VALUES
('$descricao', '1', '$quantidade', '$id_parceiro', '$id_doador', '$nome_imagem', '1')";

if ($conn->query($sqlquery) === TRUE) {

$msg = "Item incluso com sucesso!";
session_start();

header("location: painel_doador.php");

} else {
echo "Error: " . $sqlquery . "<br>" . $conn->error;
}

}else{
echo "A imagem precisa ser ( jpeg jpg png ).. verifique!";
echo "</br> <a href='".$anterior."'>VOLTAR</a>";
}


?>