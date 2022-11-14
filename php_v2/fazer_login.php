<?php
 
//incluindo conexao com o banco de dados
include 'conectar.php';

$fallback = 'index.php';
$anterior = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $fallback;
   
//Coletando informacoes do formulario enviado
$email = $_POST['email_login'];
$senha= $_POST['senha_login'];

//$data_cadastro=$_POST['data'];
$login= $_GET['login']; 
echo "email:".$email." Invalido ou Senha: ".$senha." Login = ".$login."    !!INVALIDO!!  .</br> <a href='".$anterior."'>VOLTAR</a> </br>";

switch ($login){
  case $login == 1:
    $sqlquery = "SELECT * FROM protetor WHERE email LIKE '$email' AND senha_protetor LIKE '$senha'  ";
    break;
  case $login == 2:
    $sqlquery = "SELECT * FROM doador WHERE email LIKE '$email' AND senha_doador LIKE '$senha'  ";
    break;
  case $login == 3:
    $sqlquery = "SELECT * FROM parceiro WHERE email LIKE '$email' AND senha_parceiro LIKE '$senha'  ";
    break;
  
}
echo $sqlquery;
 
if (($result = $conn->query($sqlquery)) !== FALSE)
{
    //echo "Executado com sucesso!";

    while($row = $result->fetch_assoc())
    
      switch ($login){
        case $login == 1:
          session_start();
          $_SESSION['usuario_logado'] =array();
          array_push($_SESSION['usuario_logado'],$row['tipo_acesso'],$row['id_protetor'], $row['nome'], $row['email'], $row['telefone'], $row['cidade'], $row['login']);
        
          //print_r($_SESSION['usuario_logado']);

          header("location: painel_protetor.php");
          break;
        case $login == 2:
          session_start();
          $_SESSION['usuario_logado'] =array();
          array_push($_SESSION['usuario_logado'],$row['tipo_acesso'],$row['id_doador'], $row['nome'], $row['email'], $row['telefone'], $row['cidade'], $row['login']);
          
          //print_r($_SESSION['usuario_logado']);

          header("location: painel_doador.php");
          break;
        case $login == 3:
          session_start();
          $_SESSION['usuario_logado'] =array();
          array_push($_SESSION['usuario_logado'],$row['tipo_acesso'],$row['id_parceiro'], $row['nome'], $row['email'], $row['telefone'], $row['cidade'], $row['login']);
          
          //print_r($_SESSION['usuario_logado']);

          header("location: painel_parceiro.php");
          break;
       
    }
}
else
{
  $fallback = 'index.php';
  $anterior = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $fallback;
  header("location: {$anterior}");
  
  // echo " Senha ou email nao cadastrado ou errado! " ;
  // echo "Erro no tentar executar o Query!";
  // echo "Error: " . $sql . "<br>" . $conn->error;
  // exit;
}




?>