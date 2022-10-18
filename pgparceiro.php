<?php 
include("conectar.php");
include("protect.php");
?>

<!DOCTYPE HTML>
<html lang="pt-br">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parceiro - Amigo Pet</title>

    <!-- Aqui chamamos o nosso arquivo css externo -->
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/parceiro_cabecalho.css" />
    <link rel="stylesheet" type="text/css" href="css/parceiro_rodape.css" />
    <link rel="stylesheet" type="text/css" href="css/parceiroEstilo.css" />
    <link rel="stylesheet" type="text/css" href="css/parceiro.css" />

  </head>

  <body>

    <!--INICIO CABEÇALHO-->

    <?php include('cabecalho.php'); ?>

    <!--FIM CABEÇALHO-->


    <!-- INICIO PARCEIROS ABAS -->

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
                  <img class="logo" alt="AMIGO PET" width="100px" src="img/parceiro_interno/natanaele.png" />
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

                <div class="item">
                  <button id="button" type="submit">Aguardando</button>
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
    <!-- INICIO PARCEIROS ABAS -->

    <!--INICIO RODAPE-->
    <footer>
      <footer id="rodape">
        <img class="logo2" alt="AMIGO PET" width="150x" src="img/logo.png" />

        <div class="sitemap">
          <li><a href="amigopet.html">Principal</a></li>
          <li><a href="editarCadastro.html">Perfil</a></li>
          <li><a href="parceiro.html">Doação</a></li>
          <li><a href="parceiro.html">Solicitação</a></li>
          <li><a href="parceiro.html">Sair</a></li>
        </div>

        <div class="direitos_autorais">
          Instituto Amigo Pet © 2022 Todos os direitos reservados.
          Consulte nossa Política de Privacidade.
        </div>
      </footer>
      <!--FIM RODAPE-->

  </body>

</html>