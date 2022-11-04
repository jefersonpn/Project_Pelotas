<?php 
    include ("conectar.php");
?>

<!--INICIO CABEÇALHO-->
    <?php include('cabecalho_doador.php'); ?>
<!--FIM CABEÇALHO-->



<!-- INICIO SOLICITAÇÃO DE DOAÇÃO -->

    <div class="posicao_padrao">

      <h3>AJUDE UM PET! :)</h3><br><br>

      <p>
        Selecione o parceiro e verifique se o protetor é o que você selecionou para doação.<br><br><br>
      </p>

      <section class="container_solicitar">

        <form method="post" action="">

        <div class="itemSolicitar1">
          <h3>Protetor</h3><br>

          <div class="text">
            <div class="item">
                <img class="logo" alt="AMIGO PET" width="150px"
                src="img/parceiro_interno/natanaele.png" />
            </div><br>
            <p>Casinha de Cachorro</p>


        <div class="text">

                <br><label>
                    <h3>Parceiros</h3><br>
                    <select name="parceiro" required>
                        <br>

                </label><br>

                    <a href="amigopet.html" id="button_doar">Doar</a> 

            </form>


      </section>
      <br><br>


    </div>

    <!-- INICIO SOLICITAÇÃO DE DOAÇÃO -->

    <!-- Conexão PHP -->

    <?php 
         $parceiro = "SELECT * FROM parceiro" ;
                                     
         while($id_parceiro=mysqli_fetch_array($result)){
             $id=$id_parceiro['id_parceiro'];
             $nome=$nomefantasia['nomefantasia'];
                echo "<option value='$id'>$nome</option>";
         }
                            
            ?>
