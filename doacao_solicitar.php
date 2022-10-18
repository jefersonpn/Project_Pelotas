<?php

    include("conectar.php");

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


    <!-- INICIO SOLICITAÇÃO DE DOAÇÃO -->

    <div class="posicao_padrao">

        <h3>É QUASE SEU...</h3><br><br>

        <p>
            Verifique se o objeto é correspondente ao selecionao e verifique o
            local e horário de entrega.<br><br><br>
        </p>

        <section class="container_solicitar">

            <div class="itemSolicitar">
                <img class="logo" alt="AMIGO PET" width="150px" src="img/parceiro_interno/amigopet_parceiro01.png" />
            </div>

            <div class="itemSolicitar1">
                <h3>Parceiro</h3><br>

                <p>
                    Olá AmigoPet, estamos lhe aguardando.
                    Nosso horário de funcionamento é de<br>
                    segunda à sábado Abre 08:30 e fecha 19h,
                    aos sábados trabalhamos todo dia.
                </p>
            </div>
        </section>

        <section class="container_solicitar">

            <div class="itemSolicitar">
                <img class="logo" alt="AMIGO PET" width="150px" src="img/parceiro_interno/amigopet_parceiro05.png" />
            </div>

            <div class="itemSolicitar1">
                <h3>Roupa de Cachorro</h3><br>

                <p>
                    Roupa do Stitch super nova, não serve mais<br>
                    no meu doguinho.
                </p>
            </div>
        </section>
        <br><br>
        <a href="amigopet.html" id="button_doar">Eu Quero</a>

    </div>

    <!-- INICIO SOLICITAÇÃO DE DOAÇÃO -->

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