<?php 
include_once("conectar.php");

?>

<!DOCTYPE HTML>
<html lang="pt-br">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Categoria - Amigo Pet</title>
    <!-- Aqui chamamos o nosso arquivo css externo -->
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/doacao_cabecalho.css" />
    <link rel="stylesheet" type="text/css" href="css/doacao_rodape.css" />
    <link rel="stylesheet" type="text/css" href="css/doacao_formulario.css" />
    <link rel="stylesheet" type="text/css" href="css/doacao.css" />
  </head>

  <body>

    <!--INICIO CABEÇALHO-->

    <?php include('cabecalho.php'); ?>

    <!--FIM CABEÇALHO-->



    <!-- INICIO CADASTRAR CATEGORIAS -->

    <div class="posicao_padrao">

      <h3>ADICIONE NOVAS CATEGORIAS</h3><br>

      <p>
        Adicione novas categorias de doações quando você quiser.
      </p>

      <section class="container_categoria">

        <div class="itemCat1">
          <h4>Categoria</h4>
        </div>

        <!-- digitar e adicionar *não é sistema de busca*  -->
        <div class="itemCat1">
          <form method="post" action="doacao_categoria.php">

            <input type="search" id="buscaCat" name="nome" required>
            <button id="button" type="submit" name="Post" value="1">Adicionar Categoria</button><br>&nbsp<br>

          </form>
        </div>

      </section><br><br>

    </div>
    </div><br><br>

    <!-- FIM CADASTRAR CATEGORIAS -->


    <!--INICIO RODAPE-->
    <footer>
      <footer id="rodape">
        <img class="logo2" alt="AMIGO PET" width="150x" src="img/logo.png" />

        <div class="sitemap">
          <li><a href="amigopet.php">Principal</a></li>
          <li><a href="editarCadastro.php">Perfil</a></li>
          <li><a href="doacao_escolhe.php">Doação</a></li>
          <li><a href="doacao_solicitar.php">Solicitação</a></li>
          <li><a href="index.php">Sair</a></li>
        </div>

        <div class="direitos_autorais">
          Instituto Amigo Pet © 2022 Todos os direitos reservados.
          Consulte nossa Política de Privacidade.
        </div>
      </footer>
      <!--FIM RODAPE-->

  </body>

</html>

<!-- Conexão PHP -->
<?php
        if(isset($_POST['Post'])){
            $id=$_POST['id'];
            $nome=$_POST['nome'];            
            $sql = "INSERT INTO categoria (id, categoria) VALUES ('$id','$nome')";
            mysqli_query($mysqli,$sql);
            mysqli_close($mysqli);
            header('Location: doacao_categoria.php');
        }

        if(isset($_POST['Excluir'])){
            $idDEL=$_POST['Deleted'];           
            $sql = "DELETE FROM categoria WHERE id = '$idDel'";
            mysqli_query($mysqli,$sql);
           // header('Location: doacao_categoria.php');
        }
        

        
    ?>