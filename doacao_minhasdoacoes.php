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

    <!-- TESTE ABAS -->

    <!-- INICIO PARCEIROS ABAS -->

    <div id='busca'>
        <form action="buscadoacoes.php" method="GET">
            <input id="txtbusca" name="minhasdoacoes" type="text" placeholder="Digite o que você procura" />
            <input id="btnBusca" type="submit" value="Ok" />
        </form>
    </div>

    <div class="posicao_padraopc">
        <!-- Alinhamento do título -->
        <h3>Área do Parceiro</h3>
    </div>

    <div class="container_parceiro">

        <!-- Elemento pai -->
        <nav class="nav_tabs">

            <ul>
                <!-- ABA DE ANDAMENTO-->
                <li>
                    <!-- selecionar as opções -->
                    <input type="radio" id="tab1" class="rd_tab" name="tabs" checked>

                    <!-- Título das abas -->
                    <label for="tab1" class="tab_label">Doações Finalizadas</label>

                    <div class="tab-content">

                        <div class="text">
                            <div class="item">
                                <img class="logo" alt="AMIGO PET" width="150px"
                                    src="img/parceiro_interno/amigopet_parceiro05.png" />
                            </div>

                            <div class="item">
                                <p><br>
                                    Roupa para Cachorro
                                </p><br>

                                <p>
                                    Solicitante(a): Luis
                                </p>
                            </div>

                            <div class="item">
                                <button id="button" type="submit">Doação Finalizada</button>
                            </div>

                        </div>

                        <hr>
                        <!--Linha para separar outras doações-->
                </li>

                <li>
                    <!-- ABA DE PENDENTES -->
                    <input type="radio" name="tabs" class="rd_tab" id="tab2">
                    <label for="tab2" class="tab_label">Pendentes</label>

                    <div class="tab-content">

                        <div class="text">

                            <div class="item">
                                <img class="logo" alt="AMIGO PET" width="100px"
                                    src="img/parceiro_interno/amigopet_parceiro01.png" />
                            </div>

                            <div class="item">
                                <p>
                                    Roupa Cirúrgica
                                </p><br>

                                <p class="texto_doador">Solicitante(a): Luis</p>
                            </div>

                            <div class="item">
                                <button id="button" type="submit">Aguardando Busca</button>
                            </div>

                        </div>

                        <hr>
                        <!--Linha para separar outras doações-->

                        <div class="text">

                            <div class="item">
                                <img class="logo" alt="AMIGO PET" width="100px"
                                    src="img/parceiro_interno/amigopet_parceiro01.png" />
                            </div>

                            <div class="item">
                                <p>
                                    Ração 1,5kg
                                </p><br>

                                <p class="texto_doador">Solicitante(a): Tais</p>
                            </div>

                            <div class="item">
                                <button id="button" type="submit">Não Buscou</button>
                            </div>

                        </div>

                        <hr>
                        <!--Linha para separar outras doações-->

                    </div>
                </li>
            </ul>
        </nav>


    </div>


    <!-- INICIO MINHAS DOAÇÕES 

  

    <div class="posicao_padrao">

        <h3>MINHAS DOAÇÕES</h3><br>

        <p>
            Nesta seção você pode verificar todas doações que foram realizadas.<br><br><br>
        </p>

        <section class="minhas_doacoes">

            <div class="item_doacoes">
                <img class="logo" alt="AMIGO PET" width="150px" src="img/parceiro_interno/amigopet_parceiro05.png" />
            </div>

            <div class="item_doacoes1">
                <h3>
                    Roupa de Cachorro
                </h3>
            </div>

            <div>
                <a href="#excluir"><img id="editar" width="25px" src="img/editar_excluir/excluir.png">
            </div>

        </section>

    </div>

     FIM MINHAS DOAÇÕES -->


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