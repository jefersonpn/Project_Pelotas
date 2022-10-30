<?php 
    include ("conectar.php");
?>

<!--INICIO CABEÇALHO-->
<?php include('cabecalho.php'); ?>
<!--FIM CABEÇALHO-->


<!--FORMULÁRIO DE CADASTRO-->

<div class="container_cadastro">

  <h3>Realize seu Cadastro Parceiro ;)</h3><br>

  <form method="post" action="insert_parceiro.php" enctype="multipart/form-data">

    <label>Nome Fantasia
      <input type="text" name="nomefantasia" placeholder="Nome Fantasia" required><br><br>
    </label>

    <label>E-mail
      <input type="text" name="email" placeholder="Digite seu email" required><br><br>
    </label>

    <label>Telefone
      <input type="text" name="telefone" placeholder="Digite seu telefone" required><br><br>
    </label>

    <label>Cidade
      <input type="text" name="cidade" placeholder="Digite a sua cidade" required><br><br>
    </label>

    <label>CNPJ
      <input type="text" name="cnpj" placeholder="Digite seu cnpj" required><br><br>
    </label>

    <label>Login
      <input type="text" name="login" placeholder="Digite seu login" required><br><br>
    </label>

    <label>Senha
      <input type="text" name="senha" placeholder="Digite a senha" required><br><br>
    </label>


    <label>
      <p>Sua Foto</p> <br><input type="file" name="image" />
      </br>

      <br><button type="submit" name="enviar" value="1" id="form_botao_cadastrar">Cadastrar Protetor</button>

  </form>

  <!--INICIO RODAPE -->
  <?php include('rodape.php'); ?>
  <!--FIM RODAPE -->

  <!-- Conexão php -->
  <?php
    include_once("conectar.php");
    if(isset($_POST['Post'])){
        $nomefantasia=$_POST['nome'];
        $email=$_POST['email'];
        $telefone=$POST['telefone'];
        $cidade=$_POST['cidade'];
        $login=$_POST['login'];
        $senha=$_POST['senha'];
        //$imagem$_POST['imagem'];
        $cnpj=$_POST['cnpj'];

        $sql = "INSERT INTO parceiro (nomefantasia, email, telefone, cidade, login_parceiro, senha_parceiro, cnpj) VALUES ('$nomefantasia','$email','$telefone','$cidade', '$login', '$senha', NOW(), '$cnpj')";

        mysqli_query($conexao,$sql);
        mysqli_close($conexao);

    }
?>
