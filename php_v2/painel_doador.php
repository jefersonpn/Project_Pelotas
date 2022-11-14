<?php 
include_once("conectar.php");
?>

<!--INICIO CABEÇALHO-->
<?php include('cabecalho.php'); ?>
<!--FIM CABEÇALHO-->

<?php
  session_start();
 // print_r($_SESSION['usuario_logado']); 
  
?>

<!-- INICIO TELA PRINCIPAL PARCEIRO E PROTETORES -->

<div class="posicao_padrao1">

  <section class="container_amigoPet">

    <div>
      </br>
      <h2>Seja bem vindo <?php echo $_SESSION['usuario_logado']['2']; $id_doador= $_SESSION['usuario_logado']['1'];?>
      </h2>
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
                      <form action="cadastro_doacao_voluntaria.php" method="POST">
                        <th>
                          <button type="submit" class="Doar">+ Doar</button>
                        </th>
                      </form>
                      <th>Descrição</th>
                      <th>Status</th>
                      <th>Parceiro</th>
                      <th>&nbsp;</th>
                      <th>&nbsp;</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

                  $sql_doador= "Select * from `doacao_voluntaria` where `fk_doador_id`='$id_doador'" ;
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
                      
                      if($_SESSION['usuario_logado']){
                         if ($status  == "Disponivel")
                          {
                              echo "
                                    </td>
                                      <td>
                                      <a href=\"deletar_doacao.php?deletar_id=$id\"  name=\"deletar_id\" class=\"btn btn-danger\">Deletar</a>
                                      </td>
                                      <td>
                                      <a href=\"editar_doacao.php?editar_id=$id\"  name=\"editar_id\" class=\"btn btn-warning\">Editar</a>
                                      </td>
                                    </tr>";
                          }else{
                              echo "
                                    </td>
                                      <td>
                                      <button disabled  name=\"deletar_id\" class=\"btn btn-danger\">Deletar</button>
                                      </td>
                                      <td>
                                      <button disabled  name=\"editar_id\" class=\"btn btn-warning\">Editar</button>
                                      </td>
                                    </tr>";
                          }
                      }
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

    <!-- FIM TELA PRINCIPAL PARCEIRO E PROTETORES -->

    <!--INICIO RODAPE -->
    <?php include('rodape.php'); ?>
    <!--FIM RODAPE -->

    </body>

    </html>