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
    case 'home':
        echo "<title>Home - Amigo Pet</title>";
        break; 
    case 'perfil':
        echo "<title>Perfil - Amigo Pet</title>";
        break;
    case 'doacoes':
        echo "<title>Minhas Doações - Amigo Pet</title>";
        break;
    case 'sair':
        echo "<title>Sair - Amigo Pet</title>";
        break;
}
    ?>
    <!--INICIO CABEÇALHO-->
    <div class="retangulo">

        <img class="logo" alt="AMIGO PET" width="150px" src="img/logo.png" />

        <nav> 
            <ul class="menu">
                <li><a href="painel_doador.php?title=home">Home</a></li>
                <li><a href="#.php?title=perfil">Perfil</a></li>
                <li><a href="#.php?title=doacoes">Minhas Doações</a></li>
                <li><a href="index.php?title=sair">Sair</a></li>
            </ul>
        </nav>
    </div>
    <!--FIM CABEÇALHO-->
