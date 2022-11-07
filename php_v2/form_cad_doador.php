<?php 
    include("conectar.php");
?>

<!--INICIO CABEÇALHO-->
<?php include('cabecalho.php'); ?>
<!--FIM CABEÇALHO-->


<!--FORMULÁRIO DE CADASTRO-->

<div class="container_cadastro">

  <div class="form_cadastro">
  <h3>Realize seu Cadastro Doador</h3>

  <form method="post" action="insert_doador.php"><br><br>

    <!-- doador -->
    <div>
      <label>Nome </label>
      <input type="text" name="nome" placeholder="Nome Completo"><br><br>

      <label>E-mail </label>
      <input type="text" name="email" placeholder="Digite seu email"><br><br>

      <label>Telefone </label>
      <input type="text" name="telefone" placeholder="Digite seu telefone"><br><br>

      <label>Cidade </label>
      <input type="text" name="cidade" placeholder="Digite a sua cidade"><br><br>

      <label>Login </label>
      <input type="text" name="login" placeholder="Digite seu login"><br><br>

      <label>Senha </label>
      <input type="text" name="senha" placeholder="Digite a senha">

    </div>
    </br>

    <!--<form name="foto_usuario" type="text" method="post" enctype="multipart/form-data" action="upload.php">
      <label>
        <p>Sua Foto</p> <br><input type="file" name="image" />
    </form>-->

    <br><button type="submit" name="enviar" id="button">Cadastrar Doador</button>

  </div>
  </form>


  <!--INICIO RODAPE -->

  <?php include('rodape.php'); ?>

  <!--FIM RODAPE -->
