<?php
 
//incluindo conexao com o banco de dados
include 'conectar.php';

//Coletando informacoes do formulario enviado
$email = $_POST['email_login'];
$senha_doador= $_POST['senha_login'];
//$data_cadastro=$_POST['data'];
 echo "email:".$email." Senha: ".$senha_doador."</br></br>";
 
 
$sqlquery = "SELECT * FROM doador WHERE email LIKE '$email' AND senha_doador LIKE '$senha_doador'  ";

 
if (($result = $conn->query($sqlquery)) !== FALSE)
{
    //echo "Executado com sucesso!";

    while($row = $result->fetch_assoc())
    {
      session_start();
      $_SESSION['usuario_logado'] =array();
      array_push($_SESSION['usuario_logado'], $row['nome'], $row['email'], $row['telefone'], $row['cidade'], $row['login']);
      
      //print_r($_SESSION['usuario_logado']);
      header("location: painel_doador.php");
       
    }
}
else
{
    echo "Erro no tentar executar o Query!";
    echo "Error: " . $sql . "<br>" . $conn->error;
}



?>