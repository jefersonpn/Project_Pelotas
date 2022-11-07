<?php 
    include ("conectar.php");
?>

<!--INICIO CABEÇALHO-->
<?php include('cabecalho.php'); ?>
<!--FIM CABEÇALHO-->



<!-- INICIO HOME -->
<section class="container_home">

  <img src="img/home/amigopet_home1.png" width="450px" alt="">
  <div>

    <h3>Doar: uma ação simples, mas que contribui muito!</h3><br>
    <p>Há várias pessoas que gostariam de ajudar animais ou não têm<br>
      condições de adotar um bichinho. Se você faz parte desse
      grupo,<br>saiba que é possível ajudar com ações simples,
      como doar
      ração,<br>casinha e outras coisas necessárias para o
      bem-estar dos pets.</p><br><br>

    <a href="form_cad_doador.php?title=cadastrar" class="button">Quero me Cadastrar</a>

  </div>

</section><br><br>

<section class="container_home1">
  <h3>PARCEIROS</h3><br>

  <div>
    <img class="logo" alt="AMIGO PET" width="150px" src="img/home/amigopet_home2.png" />
    <img class="logo" alt="AMIGO PET" width="150px" src="img/home/amigopet_home3.jpg" />
    <img class="logo" alt="AMIGO PET" width="150px" src="img/home/amigopet_home4.jpg" />
    <img class="logo" alt="AMIGO PET" width="150px" src="img/home/amigopet_home5.jpg" />
    <img class="logo" alt="AMIGO PET" width="150px" src="img/home/amigopet_home6.jpg" />
  </div>

</section>

<section class="container_home2">

  <h3>SEJA DOADOR & PARCEIRO</h3>

  <div><br>
    <p><br>Infelizmente, não são todas as pessoas que podem receber
      um<br> novo integrante na família, seja por conta da rotina, do
      espaço<br>disponível na casa e de várias outras razões.<br><br>

    <p>Por outro lado, há muitas instituições não governamentais
      que<br>realizam resgates de animais em situação de rua, com o
      objetivo<br>de dar uma vidinha mais confortável a esses
      peludos. Com isso,<br>muitos materiais básicos são necessários para
      manter os pets<br>em boas condições, como casinhas, camas e,
      principalmente,<br>rações.</p><br>

    <p>Sendo assim, se você busca uma forma de contribuir com o<br>
      bem-estar de animais, uma opção é ajudar.</p>
  </div>

  <img class="logo" alt="AMIGO PET" src="img/home/amigopet_home5.png" />

</section>

<div>
  <section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="h5 mb-4 text-center">Lista de doações</h3>
          <div class="table-wrap">
            <table class="table">
              <thead class="thead-primary">
                <tr>
                  <th> <?php 
                          if($_SESSION['usuario_logado']['0']){
                            echo "<button type='button' class='Coletar'>Coletar</button></th>";
                          }else{
                            echo "<button type='button' disabled='disabled' class='Coletar'>Coletar</button></th>";
                          } 
                      ?>
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
                      <?php if($_SESSION['usuario_logado']['0']){
                        echo "<span>Agropet</span>";
                      }else{
                        echo "Faça <a style='color:blue;' href='login.php'>Login</a>";
                      } ?>

                    </div>
                  </td>
                  <td><?php 
                          if($_SESSION['usuario_logado']['0']){
                            echo "<button type='button' class='Coletar'>Coletar</button></th>";
                          }else{
                            echo "<button type='button' disabled='disabled' class='Coletar'>Coletar</button></th>";
                          } 
                      ?></td>
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
                      <?php if($_SESSION['usuario_logado']['0']){
                        echo "<span>Agropet</span>";
                      }else{
                        echo "Faça <a style='color:blue;' href='login.php'>Login</a>";
                      } ?>
                    </div>
                  </td>
                  <td><?php 
                          if($_SESSION['usuario_logado']['0']){
                            echo "<button type='button' class='Coletar'>Coletar</button></th>";
                          }else{
                            echo "<button type='button' disabled='disabled' class='Coletar'>Coletar</button></th>";
                          } 
                      ?></td>
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
                      <?php if($_SESSION['usuario_logado']['0']){
                        echo "<span>Agropet</span>";
                      }else{
                        echo "Faça <a style='color:blue;' href='login.php'>Login</a>";
                      } ?>
                    </div>
                  </td>
                  <td><?php 
                          if($_SESSION['usuario_logado']['0']){
                            echo "<button type='button' class='Coletar'>Coletar</button></th>";
                          }else{
                            echo "<button type='button' disabled='disabled' class='Coletar'>Coletar</button></th>";
                          } 
                      ?></td>
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
                      <?php if($_SESSION['usuario_logado']['0']){
                        echo "<span>Agropet</span>";
                      }else{
                        echo "Faça <a style='color:blue;' href='login.php'>Login</a>";
                      } ?>
                    </div>
                  </td>
                  <td><?php 
                          if($_SESSION['usuario_logado']['0']){
                            echo "<button type='button' class='Coletar'>Coletar</button></th>";
                          }else{
                            echo "<button type='button' disabled='disabled' class='Coletar'>Coletar</button></th>";
                          } 
                      ?></td>
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
                      <?php if($_SESSION['usuario_logado']['0']){
                        echo "<span>Agropet</span>";
                      }else{
                        echo "Faça <a style='color:blue;' href='login.php'>Login</a>";
                      } ?>
                    </div>
                  </td>
                  <td><?php 
                          if($_SESSION['usuario_logado']['0']){
                            echo "<button type='button' class='Coletar'>Coletar</button></th>";
                          }else{
                            echo "<button type='button' disabled='disabled' class='Coletar'>Coletar</button></th>";
                          } 
                      ?></td>
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


<!-- FIM HOME -->


<!--INICIO RODAPE -->

<?php include('rodape.php'); ?>

<!--FIM RODAPE -->