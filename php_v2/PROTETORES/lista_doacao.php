<?php 
    include ("conectar.php");
?>

<!--INICIO CABEÇALHO-->
    <?php include('cabecalho_protetor.php'); ?>
<!--FIM CABEÇALHO-->


    <!-- INICIO TELA PRINCIPAL PARCEIRO E PROTETORES -->

    <div class="posicao_padrao1">

        <div class="posicao_padraopet">
        
        <h3>Doações</h3><br>

        <p>
            Você pode solicitar qualquer uma das doações, a única regra
            é você ir até o parceiro<br> e retirar no local em até 3 dias.
            Caso não busque, o produto volta ao doador ou será descartado.
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
                <a href="finalizar_doacao.php" id="button">Eu Quero</a> <!-- botão -->
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
                <a href="finalizar_doacao.php" id="button">Eu Quero</a> <!-- botão -->
            </div>

        </section><br><br>

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
                <a href="finalizar_doacao.php" id="button">Eu Quero</a> <!-- botão -->
            </div>

        </section><br><br>       


    </div>


    <!-- FIM TELA PRINCIPAL PARCEIRO E PROTETORES -->

 <!--INICIO RODAPE-->
    <?php include('rodape.php'); ?>
<!--FIM RODAPE-->

<!-- conexão PHP -->

<?php
$sql = "select * from doacao_solicitacao where ativo = 'S ou 1'";

?>

