<?php

// DESTA FORMA ABAIXO ENTROU OS DADOS NO BANCO DE DADOS, faltou a imagem e a data_cadastro não entrou

//including code for database conection
include 'conectar.php'; ?>
<?php include_once 'conectar.php'; ?>

<!--INICIO CABEÇALHO-->
<?php
include 'cabecalho.php';

session_start(); // print_r($_SESSION['usuario_logado']);
$id_doacao = $_GET['id_doacao'];
$sql_parceiro = "SELECT * FROM doacao_voluntaria WHERE id_doacao=$id_doacao";
$result_parceiro = mysqli_query($conn, $sql_parceiro);
while ($row = mysqli_fetch_assoc($result_parceiro)) {

    $id_doacao = $row['id_doacao'];
    $status=$row['fk_status_id'];
    $descricao = $row['descricao'];
    $quantidade = $row['quantidade'];
    $id_parceiro = $row['fk_parceiro_id'];
    $imagem_parceiro = $row['imagem'];

    //echo "<p>".$id_doacao ." ".$descricao." ".$id_parceiro." ".$imagem_parceiro."</p>" ;
    //Formulario para a edicao
?>


<div class="container">
  <div class=" text-center mt-5 ">
    <h1>Editar Doação - AMIGOPET</h1>
  </div>
  <form method="post" action="atualizar_status_doacao.php" enctype="multipart/form-data"
    onsubmit="validaForm(); return false;" class="form">
    <div class="row ">
      <div class="col-lg-7 mx-auto">
        <div class="card mt-2 mx-auto p-4 bg-light">
          <div class="card-body bg-light">

            <div class="container">
              <form id="contact-form" role="form">



                <div class="controls">

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="hidden" name="id_doacao" value=<?php echo $id_doacao; ?>>
                        <label for="descricao">Descrição *</label>
                        <input id="descricao" type="text" name="descricao" class="form-control" required=" required"
                          disabled data-error="Descrição é obrigatório." value=<?php echo $descricao; ?>>

                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="quantidade">Quantidade *</label>
                        <input id="quantidade" type="number" name="quantidade" class="form-control" required="required"
                          disabled data-error="Quantidade é  obrigatório." value=<?php echo $quantidade; ?>>

                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="parceiro">Local a ser deixado *</label>
                        <select id="parceiro" name="parceiro" disabled>
                          <option value="" selected>Click aqui</option>
                          <?php
                          //Mandando id _doador

                          $sql = 'Select * from `parceiro`';
                          $result = mysqli_query($conn, $sql);
                          while ($row = mysqli_fetch_assoc($result)) {
                              $id = $row['id_parceiro'];
                              $nome = $row['nome'];
                              $email = $row['email'];
                              $telefone = $row['telefone'];
                              $imagem = $row['imagem'];
                              $cnpj = $row['cnpj'];
                              if ($id == $id_parceiro) {
                                  echo "<option value=\"$id\" selected>$nome</option>";
                              }
                              echo "<option value=\"$id\">$nome</option>";
                          }
                          ?>
                        </select>

                      </div>
                    </div>
                  </div>
                  </br>
                  <div class=" row">
                    <!-- UPLOAD Image -->
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="status">Status *</label>
                        <select id="status" name="status">
                          <?php
                            $sql = 'Select * from `status`';
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result)) 
                            {
                              $id_status = $row['id'];
                              $descricao = $row['descricao'];

                              if ($id_status == $status) {
                              echo "<option value=\"$id_status\" selected>$descricao</option>";
                              }else{
                              echo "
                              
                              <option value=\"$id_status\">$descricao</option>";
                              }
                            }
                          ?>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class=" col-md-12">
                    <input type="submit" class="btn btn-success btn-send  pt-2 btn-block
                                                    " name="submit" value="Atualizar">
                  </div>
                </div>
            </div>
  </form>
</div>
</div>


</div>
<!-- /.8 -->

</div>
<!-- /.row-->

</div>
</div>

<?php } ?>

<!--INICIO RODAPE -->
<?php include 'rodape.php'; ?>
<!--FIM RODAPE -->

</body>

</html>