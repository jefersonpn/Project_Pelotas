<?php 
    include ("conectar.php");
?>

<!--INICIO CABEÇALHO-->
<?php include('cabecalho.php'); ?>
<!--FIM CABEÇALHO-->


 <!--FORMULÁRIO DE CADASTRO-->

 <div class="container_cadastro">

        <h3>Realize seu Cadastro Protetor ;)</h3>

        <form method="post" action="cadastro_aluno_teste.php">

            <label>Nome
            <input type="text" name="nome" placeholder="Nome Completo" required><br><br>
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

            <label>Login
            <input type="text" name="login" placeholder="Digite seu login" required><br><br>
            </label>

            <label>Senha
            <input type="text" name="senha" placeholder="Digite a senha" required><br><br>
            </label>

            <br><button type="submit" name="enviar" value="1" id="form_botao_cadastrar">Cadastrar Protetor</button>
			&nbsp&nbsp&nbsp<a href="index.html"><input type="button" value="Voltar"></a>

        </form> 

    <!--INICIO RODAPE -->

        <?php include('rodape.php'); ?>

    <!--FIM RODAPE -->
     
     
     <!-- Conexão php -->
<?php
    include_once("conectar.php");
    if(isset($_POST['Post'])){
        $nome=$_POST['nome'];
        $email=$_POST['email'];
        $telefone=$POST['telefone'];
        $cidade=$_POST['cidade'];
        $login=$_POST['login'];
        $senha=$_POST['senha'];

        $sql = "INSERT INTO protetor (nome, email, telefone, cidade, login_protetor, senha_protetor) VALUES ('$nome','$email','$telefone','$cidade', '$login', '$senha', NOW())";

        mysqli_query($conexao,$sql);
        mysqli_close($conexao);
        header('Location: lista_protetor.php');
    }
?>
