<?php 
include_once("conectar.php");
?>

<!DOCTYPE HTML>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doações - Amigo Pet</title>
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


    <!-- INICIO DOAÇÃO DE OBJETOS -->

    <div id='busca'>
        <form action="busca.php" method="GET">
            <input id="txtbusca" name="doacoes" type="text" placeholder="Digite o que você procura" />
            <input id="btnBusca" type="submit" value="Ok" />
        </form>

        <form action="busca.php" method="GET">
            <label>Nome do livro</label>
            <input type="text" name="nome_livro" size="50" placeholder="Insira o nome do livro">
            <button style="width:100px;">Buscar</button>
        </form>


    </div>

    <div class="posicao_padrao">

        <div id="centraliza_titulo">
            <h3>DOAÇÕES</h3><br>

            <p>
                Você pode solicitar qualquer uma das doações, a única regra
                é você ir até o parceiro<br> e retirar no local em até 3 dias.
                Caso não busque, o produto é descartado.
            </p>
        </div><br><br>

        <section class="container_doacao">

            <div class="item_escolhe">
                <img alt="AMIGO PET" id="teste" width="150px" src="img/parceiro_interno/amigopet_parceiro05.png" />
            </div>

            <div class="item_escolhe">
                <h3>Roupa de Cachorro</h3><br>

                <p>
                    Roupa do Stitch super nova, não serve mais<br>
                    no meu doguinho.
                </p><br><br>
            </div>

            <div class="item_escolhe1">
                <a href="doacao_solicitar.html" id="button">Eu Quero</a>
            </div>

        </section>
    </div>

    <!-- FIM DOAÇÃO DE OBJETOS -->


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