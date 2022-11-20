<?php
 
// DESTA FORMA ABAIXO ENTROU OS DADOS NO BANCO DE DADOS, faltou a imagem e a data_cadastro não entrou
 
//including code for database conection
include 'conectar.php';

//Using the bindParam you can pass values by Variables
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cidade = $_POST['cidade'];
$senha_protetor= $_POST['senha'];

//echo $nome, $email,$telefone,$cidade,$senha_protetor;

$sqlquery = "INSERT INTO protetor (nome, email, telefone, cidade, senha_protetor) VALUES ('$nome', '$email', '$telefone', '$cidade', '$senha_protetor')";
 

if (($result = $conn->query($sqlquery)) === TRUE) 
{
    //echo $email, $senha;
    $sql = "SELECT * FROM protetor WHERE email= '$email' AND senha_protetor = '$senha_protetor'  ";
    $result = $conn->query($sql);
    //print_r($result);
     while($row = $result->fetch_assoc())
        {
            
            session_start();
            
            $_SESSION['usuario_logado'] =array();
            array_push($_SESSION['usuario_logado'],"sim");
            
            $_SESSION['tipo_acesso'] =array();
            array_push($_SESSION['tipo_acesso'],$row['tipo_acesso']);
            
            $_SESSION['id_protetor'] =array();
            array_push($_SESSION['id_protetor'],$row['id_protetor']);

            $_SESSION['nome'] =array();
            array_push($_SESSION['nome'],$row['nome']);

            $_SESSION['email'] =array();
            array_push($_SESSION['email'],$row['email']);
            
            $_SESSION['telefone'] =array();
            array_push($_SESSION['telefone'],$row['telefone']);

            $_SESSION['cidade'] =array();
            array_push($_SESSION['cidade'],$row['cidade']);

            $_SESSION['login'] =array();
            array_push($_SESSION['login'],$row['login']);
                
            //print_r($_SESSION['usuario_logado']);
            header("location: painel_protetor.php");
        }
        
} else 
{
    echo "Error: " . $sqlquery . "<br>" . $conn->error;
}

?>