<?php 
    include ("conectar.php");
?>

<!DOCTYPE php>
<php lang="pt-br">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Aqui chamamos o nosso arquivo css externo -->
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/estilo.css" />
    <link rel="stylesheet" type="text/css" href="css/cabecalho.css" />
    <link rel="stylesheet" type="text/css" href="css/rodape.css" />
    <link rel="stylesheet" type="text/css" href="css/estilo_texto.css" />
    <link rel="stylesheet" type="text/css" href="css/formulario.css" />
  </head>

  <body>
    <?php 
    switch ($_GET['title'])
{
    case '':
        echo "<title>Home - Amigo Pet</title>";
        break; 
    case 'home':
        echo "<title>Home - Amigo Pet</title>";
        break;
    case 'contato':
        echo "<title>Contato - Amigo Pet</title>";
        break;
    case 'sobre':
        echo "<title>Sobre - Amigo Pet</title>";
        break;
    case 'parceiros':
        echo "<title>Parceiros - Amigo Pet</title>";
        break;
    case 'login':
        echo "<title>Login - Amigo Pet</title>";
        break;
    case 'cadastrar':
        echo "<title>Cadastro - Amigo Pet</title>";
        break;
}
    ?>
    <!--INICIO CABEÇALHO-->
    <div class="retangulo">

      <img class="logo" alt="AMIGO PET" width="150px" src="img/logo.png" />

      <nav>
        <ul class="menu">
          <li><a href="index.php?title=home">Home</a></li>
          <li><a href="contato.php?title=contato">Contato</a></li>
          <li><a href="sobre.php?title=sobre">Sobre</a></li>
          <li><a href="parceiros.php?title=parceiros">Parceiros</a></li>
          <li><a href="login.php?title=login">Cadastrar | Login</a></li>
        </ul>
      </nav>
    </div>
    <!--FIM CABEÇALHO-->