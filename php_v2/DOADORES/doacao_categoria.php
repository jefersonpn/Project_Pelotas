<?php 
    include ("conectar.php");
?>

<!--INICIO CABEÇALHO-->
    <?php include('cabecalho_doador.php'); ?>
<!--FIM CABEÇALHO-->



    <!-- INICIO CADASTRAR CATEGORIAS -->

    <div class="posicao_padrao">

      <h3>ADICIONE NOVAS CATEGORIAS</h3><br>

      <p>
        Adicione novas categorias de doações quando você quiser.
      </p>

      <section class="container_categoria">

        <div class="itemCat1">
          <h4>Categoria</h4>
        </div>

        <!-- digitar e adicionar *não é sistema de busca*  -->
        <div class="itemCat1">
          <form method="post" action="doacao_categoria.php">

            <input type="search" id="buscaCat" name="nome" required>
            <button id="button" type="submit" name="Post" value="1">Adicionar Categoria</button><br>&nbsp<br>

          </form>
        </div>

      </section><br><br>

    </div>
    </div><br><br>

    <!-- FIM CADASTRAR CATEGORIAS -->


    <!--INICIO RODAPE -->

        <?php include('rodape.php'); ?>

    <!--FIM RODAPE -->

    

<!-- Conexão PHP -->
<?php
        if(isset($_POST['Post'])){
            $id=$_POST['id'];
            $nome=$_POST['nome'];            
            $sql = "INSERT INTO categoria (id, categoria) VALUES ('$id','$nome')";
            mysqli_query($mysqli,$sql);
            mysqli_close($mysqli);
            header('Location: doacao_categoria.php');
        }

        if(isset($_POST['Excluir'])){
            $idDEL=$_POST['Deleted'];           
            $sql = "DELETE FROM categoria WHERE id = '$idDel'";
            mysqli_query($mysqli,$sql);
           // header('Location: doacao_categoria.php');
        }
        

        
    ?>