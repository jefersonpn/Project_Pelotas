<!DOCTYPE HTML>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contato - Amigo Pet</title>
    <!-- Aqui chamamos o nosso arquivo css externo -->
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/estilo.css" />
    <link rel="stylesheet" type="text/css" href="css/cabecalho.css" />
    <link rel="stylesheet" type="text/css" href="css/rodape.css" />
    <link rel="stylesheet" type="text/css" href="css/estilo_texto.css" />
    <link rel="stylesheet" type="text/css" href="css/formulario.css" />
</head>

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

    <!-- INICIO CONTATO -->

        <div class="container_contato">

        <h3>Formulário de contato - AMIGOPET</a></h3><br><br>

        <form method="post" onsubmit="validaForm(); return false;" class="form">
            
                <p>
                    <label for="name">Nome</label>
                    <input type="text" placeholder="Nome" />
                </p><br>

                <p>
                    <label for="email">E-mail</label>
                    <input type="text" placeholder="mail@exemplo.com" />
                </p><br>

                <p>
                    <label for="mensagem">Mensagem<br><br></label>
                    <textarea placeholder="Escreva sua mensagem" /></textarea>
                </p><br><br>

                <p>
                    <input class="button" type="submit" value="Enviar Mensagem" />
                </p><br>

        </form>
    </div>

    <!-- FIM CONTATO -->

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