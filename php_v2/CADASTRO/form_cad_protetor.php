<?php 
    include("../conectar.php");
?>

<!--INICIO CABEÇALHO-->
<?php include('../cabecalho.php'); ?>
<!--FIM CABEÇALHO-->


 <!--FORMULÁRIO DE CADASTRO-->

 <div class="container_cadastro">

        <h3>Realize seu Cadastro Protetor ;)</h3>

        <form method="post" action=""><br><br>

        <!-- protetor -->
        <div>
            <label>Nome</label>
            <input type="text" name="nome" placeholder="Nome Completo"><br><br>

            <label>E-mail</label>
            <input type="text" name="email" placeholder="Digite seu email"><br><br>

            <label>Telefone</label>
            <input type="text" name="telefone" placeholder="Digite seu telefone"><br><br>

            <label>Cidade</label>
            <input type="text" name="cidade" placeholder="Digite a sua cidade"><br><br>

            <label>Login</label>
            <input type="text" name="login" placeholder="Digite seu login"><br><br>

            <label>Senha</label>
            <input type="text" name="senha" placeholder="Digite a senha"><br><br>
        </div>

        <br><button type="submit" name="enviar" id="button">Cadastrar Protetor</button>

        </form> 

    <!--INICIO RODAPE -->

        <?php include('../rodape.php'); ?>

    <!--FIM RODAPE -->

    <!-- conexão PHP -->
<?php
    include_once("conectar.php");
    if(isset($_POST['Post'])){
        $nome=$_POST['nome'];
        $email=$_POST['email'];
        $telefone=$_POST['telefone'];
        $cidade=$_POST['cidade'];
        $login=$_POST['login'];
        $senha=$_POST['senha'];
        //$imagem=$_POST['imagem'];

    $sql = "INSERT INTO protetor (nome, email, telefone, cidade, login_protetor, senha_protetor) VALUES ('$nome','$email','$telefone','$cidade', '$login', '$senha', NOW())";
        mysqli_query($conexao,$sql);
        mysqli_close($conexao);
        header('Location: dashboard/painel_protetor.php');
    }
?>
