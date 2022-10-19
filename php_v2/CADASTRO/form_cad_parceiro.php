<?php 
    include ("conectar.php");
?>

<!--INICIO CABEÇALHO-->
<?php include('cabecalho.php'); ?>
<!--FIM CABEÇALHO-->


    <!--FORMULÁRIO DE CADASTRO-->

 <div class="container_cadastro">

        <h3>Realize seu Cadastro Parceiro ;)</h3>

        <form method="post" action=""><br><br>
           
        <!-- parceiro -->
        <div>
            <label>Nome Fantasia</label>
            <input type="text" name="nomefantasia3" placeholder="Nome Fantasia"><br><br>

            <label>CNPJ</label>
            <input type="text" name="cnpj3" placeholder="Digite seu CNPJ"><br><br>

            <label>E-mail</label>
            <input type="text" name="email3" placeholder="Digite seu email"><br><br>

            <label>Telefone</label>
            <input type="text" name="telefone3" placeholder="Digite seu telefone"><br><br>

            <label>Cidade</label>
            <input type="text" name="cidade3" placeholder="Digite a sua cidade"><br><br>

            <label>Login</label>
            <input type="text" name="loginpa3" placeholder="Digite seu login"><br><br>

            <label>Senha</label>
            <input type="text" name="senha3" placeholder="Digite a senha"><br><br>
        </div>

        <div id="form_botao_cadastrar"><input type="submit" name="enviar" value="Cadastrar"><br><br>
        </div>

        </form> 

    <!--INICIO RODAPE -->

        <?php include('rodape.php'); ?>

    <!--FIM RODAPE -->