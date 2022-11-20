<?php
 
// DESTA FORMA ABAIXO ENTROU OS DADOS NO BANCO DE DADOS, faltou a imagem e a data_cadastro não entrou
 
//including code for database conection
include 'conectar.php';

//Using the bindParam you can pass values by Variables
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cidade = $_POST['cidade'];
$login_doador= $_POST['login'];
$senha_doador= $_POST['senha'];
//$data_cadastro=$_POST['data'];
 
$sqlquery = "INSERT INTO doador (nome, email, telefone, cidade, login_doador, senha_doador) VALUES ('$nome', '$email', '$telefone', '$cidade', '$login_doador', '$senha_doador')";
 
if ($conn->query($sqlquery) === TRUE) {
    
    //echo $email, $senha;
        $sql = "SELECT * FROM doador WHERE email= '$email' AND senha_doador = '$senha_doador'  ";
        $result = $conn->query($sql);
        //print_r($result);
        while($row = $result->fetch_assoc())
        {
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
            
            header("location: painel_doador.php");
        }
} else {
echo "Error: " . $sqlquery . "<br>" . $conn->error;
}

?>