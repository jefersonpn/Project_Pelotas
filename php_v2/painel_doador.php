<?php 
include_once("conectar.php");
?>

<!--INICIO CABEÇALHO-->
<?php include('cabecalho.php'); ?>
<!--FIM CABEÇALHO-->

<?php
  session_start();
  //print_r($_SESSION['usuario_logado']); 
  
?>

<!-- INICIO TELA PRINCIPAL PARCEIRO E PROTETORES -->

<div class="posicao_padrao1">

  <section class="container_amigoPet">

    <div>
      </br>
      <h2>Seja bem vindo <?php echo $_SESSION['usuario_logado']['0']; ?></h2>
    </div>

    <div>
      <section class="ftco-section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-4">
              <h2 class="heading-section">Painel do Doador</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <h3 class="h5 mb-4 text-center">Lista de doações</h3>
              <div class="table-wrap">
                <table class="table">
                  <thead class="thead-primary">
                    <tr>
                      <th><button type="button" class="Deletar">Deletar</button></th>
                      <th>&nbsp;</th>
                      <th>Descrição</th>
                      <th>Status</th>
                      <th>Parceiro</th>
                      <th>&nbsp;</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="alert" role="alert">
                      <td>
                        <label class="checkbox-wrap checkbox-primary">
                          <input type="checkbox" checked>
                          <span class="checkmark"></span>
                        </label>
                      </td>
                      <td>
                        <div class="img" style="background-image: url(images/product-1.png);"></div>
                      </td>
                      <td>
                        <div class="email">
                          <span>Sneakers Shoes 2020 For Men </span>
                          <span>Fugiat voluptates quasi nemo, ipsa perferendis</span>
                        </div>
                      </td>
                      <td>Disponivel</td>
                      <td class="quantity">
                        <div class="input-group">
                          <span>Agropet</span>
                        </div>
                      </td>
                      <td><button type="button" class="plus">
                          <span aria-hidden="true"><i class="fa fa-pencil"></i></span>
                        </button></td>
                    </tr>

                    <tr class="alert" role="alert">
                      <td>
                        <label class="checkbox-wrap checkbox-primary">
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                      </td>
                      <td>
                        <div class="img" style="background-image: url(images/product-2.png);"></div>
                      </td>
                      <td>
                        <div class="email">
                          <span>Sneakers Shoes 2020 For Men </span>
                          <span>Fugiat voluptates quasi nemo, ipsa perferendis</span>
                        </div>
                      </td>
                      <td>Disponivel</td>
                      <td class="quantity">
                        <div class="input-group">
                          <span>Agropet</span>
                        </div>
                      </td>
                      <td><button type="button" class="plus">
                          <span aria-hidden="true"><i class="fa fa-pencil"></i></span>
                        </button></td>
                    </tr>


                    <tr class="alert" role="alert">
                      <td>
                        <label class="checkbox-wrap checkbox-primary">
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                      </td>
                      <td>
                        <div class="img" style="background-image: url(images/product-3.png);"></div>
                      </td>
                      <td>
                        <div class="email">
                          <span>Sneakers Shoes 2020 For Men </span>
                          <span>Fugiat voluptates quasi nemo, ipsa perferendis</span>
                        </div>
                      </td>
                      <td>Disponivel</td>
                      <td class="quantity">
                        <div class="input-group">
                          <span>Agropet</span>
                        </div>
                      </td>
                      <td><button type="button" class="plus">
                          <span aria-hidden="true"><i class="fa fa-pencil"></i></span>
                        </button></td>
                    </tr>


                    <tr class="alert" role="alert">
                      <td>
                        <label class="checkbox-wrap checkbox-primary">
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                      </td>
                      <td>
                        <div class="img" style="background-image: url(images/product-4.png);"></div>
                      </td>
                      <td>
                        <div class="email">
                          <span>Sneakers Shoes 2020 For Men </span>
                          <span>Fugiat voluptates quasi nemo, ipsa perferendis</span>
                        </div>
                      </td>
                      <td>Disponivel</td>
                      <td class="quantity">
                        <div class="input-group">
                          <span>Agropet</span>
                        </div>
                      </td>
                      <td><button type="button" class="plus">
                          <span aria-hidden="true"><i class="fa fa-pencil"></i></span>
                        </button></td>
                    </tr>


                    <tr class="alert" role="alert">
                      <td class="border-bottom-0">
                        <label class="checkbox-wrap checkbox-primary">
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                      </td>
                      <td class="border-bottom-0">
                        <div class="img" style="background-image: url(images/product-1.png);"></div>
                      </td>
                      <td class="border-bottom-0">
                        <div class="email">
                          <span>Sneakers Shoes 2020 For Men </span>
                          <span>Fugiat voluptates quasi nemo, ipsa perferendis</span>
                        </div>
                      </td>
                      <td>Disponivel</td>
                      <td class="quantity">
                        <div class="input-group">
                          <span>Agropet</span>
                        </div>
                      </td>
                      <td><button type="button" class="plus">
                          <span aria-hidden="true"><i class="fa fa-pencil"></i></span>
                        </button></td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>

      <script src="js/jquery.min.js"></script>
      <script src="js/popper.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/main.js"></script>
    </div>

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

    <h3>SOLICITAÇÕES ATIVAS</h3><br>

    <p>
      Você pode solicitar qualquer uma das doações, a única regra
      é você ir até o parceiro<br> e retirar no local em até 3 dias.
      Caso não busque, o produto é descartado.
    </p><br><br>

    <p>Clique no botão doar se deseja doar um objeto pet que não use mais:</p><a href="cadastrar_doacao.php"
      id="button">Nova Doação</a> <!-- leva para página de cadastro de doação -->

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
        <a href="doacao_solicitar.html" id="button">Doar</a>
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
        <a href="doacao_solicitar.html" id="button">Doar</a>
      </div>

    </section><br><br>

    <p>Verifique mais solicitações, clique no botão:</p><a href="listasolicitacao.php.php" id="button">+
      Solicitações</a> <!-- leva para página de cadastro de doação -->


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

<!--INICIO RODAPE -->
<?php include('rodape.php'); ?>
<!--FIM RODAPE -->

</body>

</html>