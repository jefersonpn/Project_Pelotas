<?php 
    include ("conectar.php");
?>

<!--INICIO CABEÇALHO-->
    <?php include('cabecalho_protetor.php'); ?>
<!--FIM CABEÇALHO-->


    <!-- TESTE ABAS -->

    <!-- talvez tenha que criar status 1 = ativo, 2 = aguardando, 3 = finalizado, 4 = não buscou doação...  -->

    <div class="posicao_padraopc">
        <!-- Alinhamento do título -->
        <h3>Área do Protetor</h3>
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
                    <label for="tab1" class="tab_label">Solicitações Finalizadas</label>

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

                            <div class="item"><!-- no css visualizar o tamanho da aba aqui -->
                                <button id="button" type="submit">Solicitação Finalizada</button>
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


     <!-- FIM MINHAS DOAÇÕES -->


    <!--INICIO RODAPE -->

        <?php include('rodape.php'); ?>

    <!--FIM RODAPE -->
