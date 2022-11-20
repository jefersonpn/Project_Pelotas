<?php
 
//incluindo conexao com o banco de dados
include 'conectar.php';

$fallback = 'index.php';
$anterior = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $fallback;
   
//Coletando informacoes do formulario enviado
$email = $_POST['email_login'];
$senha= $_POST['senha_login'];

echo "email => ".$email." Senha => ".$senha;

$login= $_GET['login']; 
//echo $login."</br>";

//echo "email:".$email." Invalido ou Senha: ".$senha." Login = ".$login."    !!INVALIDO!!  .</br> <a href='".$anterior."'>VOLTAR</a> </br>";

switch ($login){
  case $login == 1:
    $sqlquery = "SELECT * FROM protetor WHERE email= '$email' AND senha_protetor = '$senha'  ";
    if (($result = $conn->query($sqlquery)) !== FALSE)
        {
          //echo "Executado com sucesso!";
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
    break;
  case $login == 2:
    $sqlquery = "SELECT * FROM doador WHERE email LIKE '$email' AND senha_doador LIKE '$senha'  ";
    if (($result = $conn->query($sqlquery)) !== FALSE)
        {
          //echo "Executado com sucesso!";
          //print_r($result);
          while($row = $result->fetch_assoc())
          {
            session_start();

            $_SESSION['usuario_logado'] =array();
            array_push($_SESSION['usuario_logado'],'sim');
            
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
              
            //print_r($_SESSION['usuario_logado']);

            header("location: painel_doador.php");
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
    break;
  case $login == 3:
    $sqlquery = "SELECT * FROM parceiro WHERE email LIKE '$email' AND senha_parceiro LIKE '$senha'  ";
    if (($result = $conn->query($sqlquery)) !== FALSE)
        {
          //echo "Executado com sucesso!";
          //print_r($result);
          while($row = $result->fetch_assoc())
          {
            
            session_start();

            $_SESSION['usuario_logado'] =array();
            array_push($_SESSION['usuario_logado'],'sim');
            
            $_SESSION['tipo_acesso'] =array();
            array_push($_SESSION['usuario_logado'],$row['tipo_acesso']);
            
            $_SESSION['id_parceiro'] =array();
            array_push($_SESSION['id_parceiro'],$row['id_parceiro']);

            $_SESSION['nome'] =array();
            array_push($_SESSION['nome'],$row['nome']);

            $_SESSION['email'] =array();
            array_push($_SESSION['email'],$row['email']);
            
            $_SESSION['telefone'] =array();
            array_push($_SESSION['telefone'],$row['telefone']);

            $_SESSION['cidade'] =array();
            array_push($_SESSION['cidade'],$row['cidade']);
              
            //print_r($_SESSION['usuario_logado']);

            header("location: painel_parceiro.php");
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
    break;
  
}
//echo $sqlquery;
 





?>