<?php 
include_once("conectar.php");
?>

<!DOCTYPE HTML>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protetor - Amigo Pet</title>

    <!-- Aqui chamamos o nosso arquivo css externo -->
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/doacao_cabecalho.css" />
    <link rel="stylesheet" type="text/css" href="css/doacao_rodape.css" />
    <link rel="stylesheet" type="text/css" href="css/doacao_formulario.css" />
    <link rel="stylesheet" type="text/css" href="css/doacao.css" />

</head>

<body>

    <!--INICIO CABEÇALHO-->

    <?php include('cabecalho.php'); ?>

    <!--FIM CABEÇALHO-->


    <!-- INICIO TELA PRINCIPAL PARCEIRO E PROTETORES -->

    <div class="posicao_padrao1">

        <section class="container_amigoPet">

            <div class="item_amigopet">
                <img class="logo" alt="AMIGO PET" width="350px" src="img/principal/amigopet_adocaoanimais.jpg" />
            </div>

            <div class="item_amigopet1">
                <h3>
                    AMIGO NÃO SE COMPRA
                </h3><br>

                <p>
                    Quem realiza resgates animais provavelmente já foi mordido por<br>
                    um animal de rua. Mas também pode acontecer de um cachorro que<br>
                    fugiu de casa e está assustado ou mesmo se você, assim como eu,<br>
                    não pode ver um bichinho na rua que já para fazer um carinho.
                </p><br><br>

                <a href="#">Ler mais[+]</a>

            </div>

        </section>

        <div class="posicao_padraopet">

            <h3>DOAÇÕES ATIVAS</h3><br>

            <p>
                Você pode solicitar qualquer uma das doações, a única regra
                é você ir até o parceiro<br> e retirar no local em até 3 dias.
                Caso não busque, o produto é descartado.
            </p><br><br>

            <section class="container_amigoPet1">

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

            <section class="container_amigoPet1">

                <div class="item_escolhe">
                    <img alt="AMIGO PET" id="teste" width="150px" src="img/principal/amigopet_adocaocamapet.jpg" />
                </div>

                <div class="item_escolhe">
                    <h3>Cama para Gato</h3><br>

                    <p>
                        Tenho cama de gato para doar, meu gatinho<br>
                        não se adaptou!
                    </p><br><br>
                </div>

                <div class="item_escolhe1">
                    <a href="doacao_solicitar.html" id="button">Eu Quero</a>
                </div>

            </section><br><br>

        </div>

        <section class="container_parceiropet">
            <h3>PARCEIROS</h3>

            <div>
                <img class="logo" alt="AMIGO PET" width="150px" src="img/home/amigopet_home2.png" />
                <img class="logo" alt="AMIGO PET" width="150px" src="img/home/amigopet_home3.jpg" />
                <img class="logo" alt="AMIGO PET" width="150px" src="img/home/amigopet_home4.jpg" />
                <img class="logo" alt="AMIGO PET" width="150px" src="img/home/amigopet_home5.jpg" />
                <img class="logo" alt="AMIGO PET" width="150px" src="img/home/amigopet_home6.jpg" />
            </div>

        </section>

        <section class="posicao_padraopet1">
            <h3>Disque Denúncia: denuncie casos de maus-tratos a cães</h3><br>

            <p>
                O Disque Denúncia é o principal meio para quem deseja denunciar casos de maus-tratos a cães<br>
                e abandono no Brasil. Através do telefone, a população pode apresentar uma queixa contra o<br>
                agressor, desde que, tenha provas concretas da acusação.
            </p><br><br>

            <h3>O que é considerado maus-tratos?</h3><br>

            <p>
                Praticar maus-tratos contra um cachorro não consiste “apenas” em agredir fisicamente o animal.<br>
                Além disso, outros atos cruéis são considerados pelas leis, como:<br><br>

                - Abandonar o animal;<br>
                - Manter preso permanentemente em correntes;<br>
                - Manter em locais muito pequenos e sem higiene;<br>
                - Não abrigar o pet do sol, da chuva e do frio;<br>
                - Deixar sem ventilação ou luz solar;<br>
                - Não dar comida e água diariamente;<br>
                - Negar assistência veterinária ao animal doente ou ferido.<br><br>

                De acordo com a Lei 4.064/2020, a pena de maus-tratos a cães e gatos aumentou de 2 a 5 anos de<br>
                reclusão, além da multa e proibição da guarda do animal.<br><br>

                Por fim, é importante reforçar sobre o quão é imprescindível denunciar um agressor ou um tutor que<br>
                abandona o próprio cão. Dessa forma, além de punir, a denúncia poderá impedir que a pessoa cometa<br>
                novamente um ato tão cruel contra o animal. Afinal, os totós sofrem muito nas ruas e passam por<br>
                situações críticas, que nenhum bichinho deveria passar.
            </p><br>

        </section>


    </div>


    <!-- FIM TELA PRINCIPAL PARCEIRO E PROTETORES -->

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