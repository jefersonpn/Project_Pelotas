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
    <?php
                
      $sql= "Select * from `parceiro`";
                $result= mysqli_query($conn, $sql);
                while($row=mysqli_fetch_assoc($result))
                {
                  $id=$row['id_parceiro'];
                  $nome=$row['nome'];
                  $email=$row['email'];
                  $telefone=$row['telefone'];
                  $imagem=$row['imagem'];
                  $cnpj=$row['cnpj'];

                  echo "<img class=\"logo\" alt=\"AMIGO PET\" width=\"150px\" src=\"images/parceiros/$imagem\" />
";
                }
    ?>
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
                  <?php print_r($_SESSION['usuario_logado']);  ?>
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
                <?php
                
                $sql= "Select * from `doacao_voluntaria`";
                          $result= mysqli_query($conn, $sql);
                          while($row=mysql_fetch_assoc($result))
                          {
                            $id=$row['id_doacao'];
                            $descricao=$row['descricao'];
                            $status=$row['status'];
                            $quantidade=$row['quantidade'];
                            $imagem=$row['imagem'];
                            $data_cadastro=$row['data_cadastro'];
                            
                            
                                  echo "
                                      <tr class=\"alert\" role=\"alert\">
                                      <td>
                                        <label class=\"checkbox-wrap checkbox-primary\">
                                        <input type=\"checkbox\" checked>
                                          <span class=\"checkmark\"></span>
                                        </label>
                                      </td>
                                      <td>
                                        <div class=\"img\" style=\"background-image: url(images/$imagem);\"></div>
                                      </td>
                                      <td>
                                       <div class=\"email\">
                                          <span>$descricao</span>
                                        </div>
                                      ";
                                      echo  "</td>
                                             </tr>";
                               
                          }
                ?>

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