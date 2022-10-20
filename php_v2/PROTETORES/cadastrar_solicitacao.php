<?php 
    include ("conectar.php");
?>

<!--INICIO CABEÇALHO-->
    <?php include('cabecalho_protetor.php'); ?>
<!--FIM CABEÇALHO-->

<div class="posicao_padrao">

            <h3>CADASTRE UMA SOLICITAÇÃO</h3><br><br>

            <form method="Post" action="doacao_doar.php">

                <label>
                    <p>Nome</p> <br><input type="text" name="descricao" id="id_nome" placeholder="Nome do Objeto"
                        size="60" required><br><br>
                </label>

                <label>
                    <p>Descrição</p><br>
                    <textarea name="motivo" rows="5" cols="52" ></textarea>
                </label><br><br>

                <label>
                    <p>Quantidade</p> <br><input type="number" name="quantidade" required>
                </label><br><br>

                <br><label>
                    <p>Categoria</p><br>
                    <select name="categoria" required>
                        <?php 
                            $categoria = "SELECT * FROM categoria";
                            $resultado = mysqli_query($mysqli, $categoria);
                            
                            while($id_categoria=mysqli_fetch_array($resultado)){
                                $id=$id_categoria['id'];
                                $nome=$id_categoria['categoria'];
                                echo "<option value='$id'>$nome</option>";
                            }
                        ?>
                    </select>
                </label><br><br>

                <br><label>
                    <p>Parceiros</p>
                    <select name="parceiro" required>
                        <?php 
                            $categoria = "SELECT * FROM protetor WHERE nomefantasia LIKE '%%' ";
                            $result = mysqli_query($mysqli, $nomefantasia);
                            
                            while($id_parceiro=mysqli_fetch_array($result)){
                                $id=$id_parceiro['id_parceiro'];
                                $nome=$nomefantasia['nomefantasia'];
                                echo "<option value='$id'>$nome</option>";
                            }
                            
                        ?>
                </label>

            </form>
        </div>
        

        <!-- ME PERGUNTANDO POR QUE ESTE BOTÃO COLA NO PARCEIRO -->

        <p><br><br>
            <input id="button" name="solicitar" type="button" value="Solicitar"></a>
        </p> 

        </div>

    <!--INICIO RODAPE -->

        <?php include('rodape.php'); ?>

    <!--FIM RODAPE -->

<?php
    include_once("conectar.php");
    if(isset($_POST['Post'])){
        $descricao=$_POST['descricao'];
        $motivo=$_POST['motivo'];
        $quantidade=$POST['quantidade'];
        $categoria=$_POST['categoria'];
      //$imagem

        $sql = "INSERT INTO doacao_solicitacao (descricao, motivo, quantidade, categoria, ativo, fk_categoria_id, fk_parceiro_id, fk_protetor_id, fk_doador_id) VALUES ('$descricao','$motivo','$quantidade','$categoria', NOW(), '$imagem')";

        mysqli_query($conexao,$sql);
        mysqli_close($conexao);
        header('Location: lista_doador.php');
    }
?>

