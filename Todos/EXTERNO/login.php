<!DOCTYPE HTML>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Amigo Pet</title>
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
                <li><a href="index.html">Home</a></li>
                <li><a href="contato.html">Contato</a></li>
                <li><a href="sobre.html">Sobre</a></li>
                <li><a href="parceiro.html">Parceiro</a></li>
                <li><a href="login.html">Cadastrar | Login</a></li>
            </ul>
        </nav>
    </div>
    <!--FIM CABEÇALHO-->

    <!-- INICIO LOGIN -->

    <div class="container_login">

        <form method="post" action="">

            <h3>AMIGOPET</h3>

            <p class="link">Faça o seu login<br><br><br>

                Ainda não tem conta?
                <a href="cad_login.html">Cadastre-se</a>
            </p><br><br>

            <p>
                <label for="email_login">E-mail&nbsp;</label>
                <input id="email_login" name="email_login" required="required" type="text"
                    placeholder="contato@amigopet.com" /><br><br>
            </p>

            <p>
                <label for="senha_login">CPF&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input id="senha_login" name="senha_login" required="required" type="password" placeholder="senha" />
            </p><br><br>

            <p>
                <input class="button" type="submit" value="Logar" />
            </p><br>

        </form>
    </div>

    <!-- FIM LOGIN -->

    <!--INICIO RODAPE-->
    <footer>
        <footer id="rodape">
            <img class="logo2" alt="AMIGO PET" width="150x" src="img/logo.png" />

            <div class="sitemap">
                <li><a href="home.html">Home</a></li>
                <li><a href="contato.html">Contato</a></li>
                <li><a href="sobre.html">Sobre</a></li>
                <li><a href="parceiro.html">Parceiro</a></li>
                <li><a href="login.html">Cadastrar | Login</a></li>
            </div>

            <div class="direitos_autorais">
                Instituto Amigo Pet © 2022 Todos os direitos reservados.
                Consulte nossa Política de Privacidade.
            </div>
        </footer>
        <!--FIM RODAPE-->


</body>

</html>