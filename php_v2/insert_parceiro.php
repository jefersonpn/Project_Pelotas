<?php
 
// DESTA FORMA ABAIXO ENTROU OS DADOS NO BANCO DE DADOS, faltou a imagem e a data_cadastro não entrou
 
//including code for database conection
include 'conectar.php';

//Using the bindParam you can pass values by Variables
$nome = $_POST['nomefantasia'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cidade = $_POST['cidade'];
$login_parceiro= $_POST['login'];
$senha_parceiro= $_POST['senha'];
$cnpj = $_POST['cnpj'];

// Tratanto a imagem
$imagem = $_FILES['imagem'];
$nome_imagem= $imagem['name'];
$imagem_file_temp= $imagem['tmp_name'];

// Tratando extensão da imagem
$ext_imagem=  explode('.',$nome_imagem);
$ext_imagem= end($ext_imagem);// aqui pegamos apenas a extensao da imagem
// echo  $ext_imagem; // TESTE -> verificando o conteudo da variavel
$extensions= array('jpeg','jpg','png');
if(in_array($ext_imagem, $extensions))
{
    $upload_imagem= 'images/parceiros/'.$nome_imagem;
    move_uploaded_file($imagem_file_temp, $upload_imagem);
    

    $sqlquery = "INSERT INTO parceiro (nome, email, telefone, cidade, login_parceiro, senha_parceiro, cnpj, imagem) VALUES ('$nome', '$email', '$telefone', '$cidade', '$login_parceiro', '$senha_parceiro', '$cnpj', '$nome_imagem')";
    
    if ($conn->query($sqlquery) === TRUE) {
        
        session_start();

        $_SESSION['usuario_logado'] =array();
        array_push($_SESSION['usuario_logado'],"sim");
        
        $_SESSION['tipo_acesso'] =array();
        array_push($_SESSION['tipo_acesso'],$row['tipo_acesso']);
        
        $_SESSION['id_doador'] =array();
        array_push($_SESSION['id_doador'],$row['id_doador']);

        $_SESSION['nome'] =array();
        array_push($_SESSION['nome'],$row['nome']);

        $_SESSION['email'] =array();
        array_push($_SESSION['email'],$row['email']);
        
        $_SESSION['telefone'] =array();
        array_push($_SESSION['telefone'],$row['telefone']);

        $_SESSION['cidade'] =array();
        array_push($_SESSION['cidade'],$row['cidade']);
    
        header("location: login.php?msg=Cadastro como Parceiro foi realizado com sucesso, faça o login.");
        
    } else {
    echo "Error: " . $sqlquery . "<br>" . $conn->error;
    }

}else{
    echo "A imagem precisa ser ( jpeg  jpg  png ).. verifique!";
    echo "</br> <a href='".$anterior."'>VOLTAR</a>";
}


?>