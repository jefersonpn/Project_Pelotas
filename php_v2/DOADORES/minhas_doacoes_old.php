<?php 
    include ("conectar.php");
?>

<!--INICIO CABEÇALHO-->
    <?php include('cabecalho_doador.php'); ?>
<!--FIM CABEÇALHO-->



    <!-- INICIO DOAÇÃO DE OBJETOS -->

    <!-- busca por objetos pendentes -->
    <div id='busca'>
        <form action="busca.php" method="GET">
            <input type="text" name="doacoes" id="txtbusca" placeholder="Faça sua Busca">
            <input id="btnBusca" type="submit" value="Ok" />
        </form>

        <!-- teste após o back (.js de busca) 
        <script>
        var filtro = document.getElementById('filtro-nome');
        var tabela = document.getElementById('lista');
        filtro.onkeyup = function() {
            var nomeFiltro = filtro.value;
            for (var i = 1; i < tabela.rows.length; i++) {
                var conteudoCelula = tabela.rows[i].cells[1].innerText;
                var corresponde = conteudoCelula.toLowerCase().indexOf(nomeFiltro) >= 0;
                tabela.rows[i].style.display = corresponde ? '' : 'none';
            }
        };
    </script> -->

    </div>

    <div class="posicao_padrao">

        <div id="centraliza_titulo">
            <h3>MINHAS DOAÇÕES</h3><br>

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


    <!--INICIO RODAPE -->

        <?php include('rodape.php'); ?>

    <!--FIM RODAPE -->