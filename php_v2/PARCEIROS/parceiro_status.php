<?php 
include_once("conectar.php");
?>

<!--INICIO CABEÇALHO-->
<?php include('cabecalho.php'); ?>
<!--FIM CABEÇALHO-->


    <!-- INICIO PARCEIROS ABAS -->
    <!-- NESTA TELA O PARCEIRO VAI SOMENTE MUDAR O STATUS E O USUÁRIO VAI VERIFICAR TAMBÉM (MINHAS DOAÇÕES | MINHAS SOLICITAÇÕES) -->

    <div id='busca'>
        <form action="busca.php" method="GET">
            <input id="txtbusca" name="doador_protetor" type="text" placeholder="Digite o que você procura" />
            <input id="btnBusca" type="submit" value="Ok" />
        </form>
    </div>

    <div class="posicao_padraopc">
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
                    <label for="tab1" class="tab_label">Andamento</label>

                    <div class="tab-content">

                        <div class="text">
                            <div class="item">
                                <img class="logo" alt="AMIGO PET" width="100px"
                                    src="img/parceiro_interno/natanaele.png" />
                            </div>

                            <div class="item">
                                <p><br>
                                    Casa para Cachorro
                                </p><br>

                                <p>Doador(a): Natanaele Machado<br>
                                    Solicitante(a): Luis
                                </p>
                            </div>

                            <div class="item">
                                <button id="button" type="submit">Aceitar Doação</button>
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
                                <img class="logo" alt="AMIGO PET" width="100px" src="img/parceiro_interno/luis.png" />
                            </div>

                            <div class="item">
                                <p>
                                    Casa para Cachorro
                                </p>

                                <p class="texto_doador">Solicitante(a): Luis</p>
                            </div>

                            <br><label>
                    <p>Status</p><br>
                    <select name="categoria" required>
                        <option value="aguardando">Aguardando Protetor</option>
                        <option value="aguardando">Aguardando Doador</option>
                        <option value="nao_buscou">Não buscou Doação</option>
                        <option value="buscou">Buscou Doação</option>
                        <option value="descartar">Descarte</option>
   
                        <!-- talvez tenha que criar status 1 = buscou, 2 = aguardando doador, 3 = aguardando protetor, -->
                        <!-- 4 = não buscou doação, 5 = descarte, 6 = finalizar...  -->
                        <!-- select * from doacao_voluntaria where ativo = "..." -->
                        <?php 
                            $## = "SELECT * FROM ";
                            $resultado = mysqli_query($mysqli, $##);
                            
                            while($id_categoria=mysqli_fetch_array($resultado)){
                                $id=$##['id'];
                                $nome=$id_categoria['categoria'];
                                echo "<option value='$id'>$nome</option>";
                            }
                        ?>
                    </select>
                </label><br><br>

                            <div class="item">
                                <button id="button" type="submit">Confirmar</button>
                            </div>

                        </div>

                        <hr>
                        <!--Linha para separar outras doações-->

                    </div>
                </li>

                <li>
                    <!-- ABA DE FINALIZADOS -->
                    <input type="radio" name="tabs" class="rd_tab" id="tab3">
                    <label for="tab3" class="tab_label">Finalizados</label>

                    <div class="tab-content">
                        <div class="text">

                            <div class="item">
                                <img class="logo" alt="AMIGO PET" width="100px" src="img/parceiro_interno/luis.png" />
                            </div>

                            <div class="item">
                                <p>
                                    Casa para Cachorro
                                </p>
                                <p class="texto_doador">Solicitante(a): Luis</p>
                            </div>

                            <div class="item">
                                <button id="button" type="submit">Finalizado</button>
                            </div>

                        </div>

                        <hr>
                        <!--Linha para separar outras doações-->

                    </div>
                </li>
            </ul>
        </nav>


    </div>
    <!-- FIM PARCEIROS ABAS -->

       <!--INICIO RODAPE -->

        <?php include('rodape.php'); ?>

    <!--FIM RODAPE -->
