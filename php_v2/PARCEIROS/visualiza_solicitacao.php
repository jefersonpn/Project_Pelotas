<?php 
    include ("conectar.php");
?>

<!--INICIO CABEÇALHO-->
<?php include('cabecalho_parceiro.php'); ?>
<!--FIM CABEÇALHO-->


    <!-- INICIO SOLICITAÇÃO DE DOAÇÃO -->

    <div class="posicao_padrao">

        <h3>Solicitação de Doação! Seja parceiro e aceite ;)</h3><br><br>

        <p>
            Caro parceiro, este solicitante pode ir até o seu estabelicimento? Verifique a doação,<br>
            solicitante e o doador.<br><br>
        </p>

        <section class="container_solicitar">

            <div class="itemSolicitar">
                <img class="logo" alt="AMIGO PET" width="150px" src="img/parceiro_interno/luis.png" />
            </div>

            <div class="itemSolicitar1">
                <h3>Protetor Luis</h3><br>
                <!-- mostrar nome -->
                <!-- select * from protetor where nome like "%%" -->

            </div>

        </section>

                <section class="container_solicitar">

            <div class="itemSolicitar">
                <img class="logo" alt="AMIGO PET" width="150px" src="img/parceiro_interno/natanaele.png" />
            </div>

            <div class="itemSolicitar1">
                <h3>Doador Natanaele</h3><br>
                <!-- mostrar nome -->
                <!-- inner join: doador + doacao_voluntaria -->
            </div>

        </section>

        <section class="container_solicitar">

            <div class="itemSolicitar">
                <img class="logo" alt="AMIGO PET" width="150px" src="img/parceiro_interno/amigopet_parceiro05.png" />
            </div>

            <div class="itemSolicitar1">
                <h3>Doação</h3><br>

                <p>
                    Roupa do Stitch super nova, não serve mais<br>
                    no meu doguinho.
                </p>
            </div>
        </section>
        <br><br>
        <a href="##" id="button_doar">Aceitar Solicitação</a>

    </div>

    <!-- INICIO SOLICITAÇÃO DE DOAÇÃO -->

    <!--INICIO RODAPE -->

        <?php include('rodape.php'); ?>

    <!--FIM RODAPE -->