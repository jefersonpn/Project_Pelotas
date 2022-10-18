<!DOCTYPE HTML>
<html lang="pt-br">

<?php 

include_once("conectar.php");

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro - Amigo Pet</title>
    <!-- Aqui chamamos o nosso arquivo css externo -->
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/estilo.css" />
    <link rel="stylesheet" type="text/css" href="css/cabecalho.css" />
    <link rel="stylesheet" type="text/css" href="css/rodape.css" />
    <link rel="stylesheet" type="text/css" href="css/estilo_texto.css" />
    <link rel="stylesheet" type="text/css" href="css/formulario.css" />
</head>

<body>

    <!--INICIO CABEÇALHO-->
    <div class="retangulo">

        <img class="logo" alt="AMIGO PET" width="150px" src="img/logo.png" />

        <nav>
            <ul class="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="contato.php">Contato</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="parceiro.php">Parceiro</a></li>
                <li><a href="login.php">Cadastrar | Login</a></li>
            </ul>
        </nav>
    </div>
    <!--FIM CABEÇALHO-->

    <!--FORMULÁRIO DE CADASTRO-->

    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Sistema de Cadastro</h3>
                    <h3 class="title has-text-grey"><a href="https://youtube.com/canaltioficial" target="_blank">Canal
                            TI</a></h3>
                    <div class="notification is-success">
                        <p>Cadastro efetuado!</p>
                        <p>Faça login informando o seu usuário e senha <a href="login.php">aqui</a></p>
                    </div>
                    <div class="notification is-info">
                        <p>O usuário escolhido já existe. Informe outro e tente novamente.</p>
                    </div>
                    <div class="box">
                        <form action="cadastrar.php" method="POST">

                            <div class="field">
                                <div class="control">
                                    <input name="nome" type="text" class="input is-large" placeholder="Nome" autofocus>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="email" type="text" class="input is-large" placeholder="Email"
                                        autofocus>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="telefone" type="text" class="input is-large" placeholder="Telefone"
                                        autofocus>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="cidade" type="text" class="input is-large" placeholder="Cidade"
                                        autofocus>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="login_protetor" type="text" class="input is-large"
                                        placeholder="Usuário">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="senha_protetor" class="input is-large" type="password"
                                        placeholder="Senha">
                                </div>
                            </div>

                            <button type="submit"
                                class="button is-block is-link is-large is-fullwidth">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

<button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>
</form>
</div>

<!-- <div class="container_cadastro">

        <h3 style="display: flex" ;>Cadastrar&nbsp;
            <span id="titulo_fisica" style="display: none;">Doador</span>
            <span id="titulo_protetor" style="display: none;">Protetor</span>
            <span id="titulo_juridica" style="display: none;">Parceiro</span>
        </h3>

        <!-- <form method="post" action=""><br><br>

            <label><input type="" name="tipo_usuario" value="1" onchange="formfisica();" />Doador</label>
            <!-- <label><input type="radio" name="tipo_usuario" value="2" onchange="formprotetor();" />Protetor</label>
            <label><input type="radio" name="tipo_usuario" value="3"
                    onchange="formjuridica();" />Parceiro</label><br><br>-->

<!-- doador 
        <form method="post" action="" id="form_fisica" style="display: none" ;>
            <label>Nome</label>
            <input type="text" name="nome1" placeholder="Nome Completo"><br><br>

            <label>E-mail</label>
            <input type="text" name="email1" placeholder="Digite seu email"><br><br>

            <label>Telefone</label>
            <input type="text" name="telefone1" placeholder="Digite seu telefone"><br><br>

            <label>Cidade</label>
            <input type="text" name="cidade1" placeholder="Digite a sua cidade"><br><br>

            <label>Login</label>
            <input type="text" name="logind1" placeholder="Digite seu login"><br><br>

            <label>Senha</label>
            <input type="text" name="senha1" placeholder="Digite a senha"><br><br>

            <div id="form_botao_cadastrar" style="display: none;">
                <input type="submit" name="enviar" value="Cadastrar"><br><br>
            </div>

        </form>

        <!-- protetor 
        <div id="form_protetor" style="display: none" ;>
            <label>Nome</label>
            <input type="text" name="nome2" placeholder="Nome Completo"><br><br>

            <label>E-mail</label>
            <input type="text" name="email2" placeholder="Digite seu email"><br><br>

            <label>Telefone</label>
            <input type="text" name="telefone2" placeholder="Digite seu telefone"><br><br>

            <label>Cidade</label>
            <input type="text" name="cidade2" placeholder="Digite a sua cidade"><br><br>

            <label>Login</label>
            <input type="text" name="loginp2" placeholder="Digite seu login"><br><br>

            <label>Senha</label>
            <input type="text" name="senha2" placeholder="Digite a senha"><br><br>
        </div>

        <!-- parceiro 
        <div id="form_juridica" style="display: none" ;>
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

        <div id="form_botao_cadastrar" style="display: none;">
            <input type="submit" name="enviar" value="Cadastrar"><br><br>
        </div>
        </form> -->


<script>
function formfisica() {
    //console.log("pessoa fisica");
    document.getElementById("titulo_fisica").style.display = 'block';
    document.getElementById("titulo_juridica").style.display = 'none';
    document.getElementById("titulo_protetor").style.display = 'none';

    // desaparece o formulário do protetor e parceiro
    document.getElementById("form_fisica").style.display = 'block';
    document.getElementById("form_protetor").style.display = 'none';
    document.getElementById("form_juridica").style.display = 'none';

    // Apresentar o botão de cadastrar
    document.getElementById("form_botao_cadastrar").style.display = 'block';
}

function formprotetor() {
    //console.log("pessoa fisica");
    document.getElementById("titulo_protetor").style.display = 'block';
    document.getElementById("titulo_juridica").style.display = 'none';
    document.getElementById("titulo_fisica").style.display = 'none';

    // desaparece o formulário do doador e parceiro
    document.getElementById("form_protetor").style.display = 'block';
    document.getElementById("form_fisica").style.display = 'none';
    document.getElementById("form_juridica").style.display = 'none';

    // Apresentar o botão de cadastrar
    document.getElementById("form_botao_cadastrar").style.display = 'block';
}

function formjuridica() {
    //console.log("pessoa juridica");
    document.getElementById("titulo_juridica").style.display = 'block';
    document.getElementById("titulo_fisica").style.display = 'none';
    document.getElementById("titulo_protetor").style.display = 'none';

    // desaparece o formulário do protetor e doador
    document.getElementById("form_juridica").style.display = 'block';
    document.getElementById("form_fisica").style.display = 'none';
    document.getElementById("form_protetor").style.display = 'none';

    // Apresentar o botão de cadastrar
    document.getElementById("form_botao_cadastrar").style.display = 'block';
}
</script>

</body>

</html>