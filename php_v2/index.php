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
                  <th>
                  <th>Descrição</th>
                  <th>Status</th>
                  <th>Parceiro</th>
                  <th>&nbsp;</th>
                </tr>
              </thead>
              <tbody>
                <?php

                  $sql_doador= "Select * from `doacao_voluntaria`" ;
                  $result=mysqli_query($conn, $sql_doador);
                  while($row=mysqli_fetch_assoc($result)) 
                  {
                    $id=$row['id_doacao']; 
                    $descricao=$row['descricao']; 
                    $status=$row['fk_status_id'];
                    $quantidade=$row['quantidade']; 
                    $imagem=$row['imagem']; 
                    $data_cadastro=$row['data_cadastro'];
                    $id_parceiro=$row['fk_parceiro_id']; 
                    $id_doador=$row['fk_doador_id']; 
                    
                    // echo "<p>" .$id." ".$descricao." ".$status." ".$quantidade." ".$imagem." ".$data_cadastro." ".$id_parceiro." ".$id_doador." </p>" ;

                  
                    $sql_parceiro= "Select * from `parceiro` where `id_parceiro` = '$id_parceiro'";
                    $result_parceiro= mysqli_query($conn, $sql_parceiro);
                    while($row=mysqli_fetch_assoc($result_parceiro))
                    {
                      $id_parceiro=$row['id_parceiro'];
                      // $nome_parceiro=$row['nome'];
                      // $email_parceiro=$row['email'];
                      // $telefone_parceiro=$row['telefone'];
                      // $data_cadastro_parceiro=$row['data_cadastro'];
                      $imagem_parceiro=$row['imagem'];
                      // $cnpj_parceiro=$row['cnpj'];
                      // echo "<p>".$id_parceiro ." ".$nome_parceiro." ".$email_parceiro." ".$telefone_parceiro." ".$imagem_parceiro." ".$data_cadastro_parceiro." ".$cnpj_parceiro."</p>" ;
                    }
                    
                     switch ($status)
                    {
                      case '1':
                        $status= "Disponivel";
                      break; 
                      case '2':
                        $status= "Retirado";
                      break;
                      case '5':
                        $status= "Reservado";
                      break;
                    }
                          
                    echo "
                    <tr class=\"alert\" role=\"alert\">
                      
                      <td>
                        <div class=\"img\" style=\"background-image: url(images/$imagem);\"></div>
                      </td>
                      <td>
                        <div class=\"email\">
                          $descricao
                        </div>
                      </td>
                      <td>
                        $status
                      </td>
                      <td>";
                      if($_SESSION['usuario_logado']){
                         echo "<div class=\"img\" style=\"background-image: url(images/parceiros/$imagem_parceiro);\"></div></td>";
                      }else{
                         echo "<div>Faça <a href=\"login.php\">login</a></div></td>";
                      }
                      
                      echo "</td>
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