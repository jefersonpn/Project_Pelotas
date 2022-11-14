<?php 
include_once("conectar.php");
?>

<!--INICIO CABEÇALHO-->
<?php include('cabecalho.php'); ?>
<!--FIM CABEÇALHO-->

<?php 
session_start();
// print_r($_SESSION['usuario_logado']['1']);
$id_parceiro_logado= $_SESSION['usuario_logado']['1'];
?>

<!-- INICIO TELA PRINCIPAL PROTETORES -->

<div class="posicao_padrao1">

  <section class="container_amigoPet">

    <div>
      </br>
      <h2>Seja bem vindo <u><?php echo $_SESSION['usuario_logado']['2']; ?></u></h2>
    </div>

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
                      <th>&nbsp;</th>
                      <th>Descrição</th>
                      <th>Status</th>
                      <th>Parceiro</th>
                      <th>&nbsp;</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

                  $sql_doador= "Select * from `doacao_voluntaria` where `fk_parceiro_id`= $id_parceiro_logado" ;
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
                    
                    // echo "<p>" .$id." ".$descricao." ".$fk_status_id." ".$quantidade." ".$imagem." ".$data_cadastro." ".$id_parceiro." ".$id_doador." </p>" ;

                  
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
                      
                      echo "
                      <td>
                        <a href=\"editar_status_doacao.php?id_doacao=$id\"  name=\"id_doacao\" class=\"btn btn-warning\">Alterar</a>
                      </td>
                      </td>
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


    <!-- FIM TELA PRINCIPAL PROTETORES -->

    <!--INICIO RODAPE -->
    <?php include('rodape.php'); ?>
    <!--FIM RODAPE -->

    </body>

    </html>