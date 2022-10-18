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
    <div class="retangulo">

        <img class="logo" alt="AMIGO PET" width="150px" src="img/logo.png" />

        <nav>
            <ul class="menu">
                <li><a href="amigopet.html">Principal</a></li>
                <li><a href="editarCadastro.html">Perfil</a></li>
                <li><a href="doacao_escolhe.html">Doação</a></li>
                <li><a href="doacao_solicitar.html">Solicitação</a></li>
                <li><a href="index.html">Sair</a></li>
            </ul>
        </nav>
    </div>
    <!--FIM CABEÇALHO-->


    <!-- INICIO CADASTRAR CATEGORIAS -->

    <div id='busca'>
        <form action="/search" class="search" method="get">
            <input id="txtbusca" name="q" type="text" value="" placeholder="Digite o que você procura" />
            <input id="btnBusca" type="submit" value="Ok" />
        </form>
    </div>


    <div class="posicao_padrao">

        <h3>ADICIONE NOVAS CATEGORIAS</h3><br>

        <p>
            Adicione novas categorias de doações quando você quiser.
        </p>

        <section class="container_categoria">

            <div class="itemCat1">
                <h4>Categoria</h4>
            </div>

            <div class="itemCat1">
                <form action=" " method="post">
                    <input type="search" id="buscaCat" name="q">
                </form>
            </div>

            <div class="itemCat1">
                <p>
                    <a href="#"></a><input id="button" type="submit" value="Adicionar" />
                </p>
            </div>

        </section><br><br>

        <section class="container_categoria">

            <div class="itemCat">
                <p>Roupa</p>
            </div>

            <div class="">
                <a href="#excluir"><img id="editar" width="25px" src="img/editar_excluir/excluir.png">
            </div>

        </section>


    </div>
    </div><br><br>

    <!-- FIM CADASTRAR CATEGORIAS -->


    <!--INICIO RODAPE-->
    <footer>
        <footer id="rodape">
            <img class="logo2" alt="AMIGO PET" width="150x" src="img/logo.png" />

            <div class="sitemap">
                <li><a href="amigopet.html">Principal</a></li>
                <li><a href="editarCadastro.html">Perfil</a></li>
                <li><a href="doacao_escolhe.html">Doação</a></li>
                <li><a href="doacao_solicitar.html">Solicitação</a></li>
                <li><a href="index.html">Sair</a></li>
            </div>

            <div class="direitos_autorais">
                Instituto Amigo Pet © 2022 Todos os direitos reservados.
                Consulte nossa Política de Privacidade.
            </div>
        </footer>
        <!--FIM RODAPE-->

</body>

</html>