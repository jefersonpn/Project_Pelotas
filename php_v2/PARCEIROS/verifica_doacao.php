<?php
    include_once("conectar.php");
?>
<html>
	<head>
		<link rel="stylesheet" href="#">
        <title>AmigoPet</title>
	</head>

	<body> <!-- HTML -->

        <div class="posicao_padrao">


            <header>
            <h3>Solicitações</h3><br><br>
            </header>

                        
            <form method="post" action="doacao_status.php">

                <p>Doações Recebidas</p>

                <br><label>
                    Doador:
                    <select name="id_doador" required>

                        <!-- Conexão PHP -->
                        <?php
                            $sql = "SELECT * FROM doador";
                            $resultado=mysqli_query($conexao,$sql);
                            while($doador=mysqli_fetch_array($resultado)){
                                $id_doador=$doador['id_doador'];
                                $nome=$doador['nome'];
                                echo "<option value='$id_doador'>$nome</option>";
                            }
                        ?>

                    </select>
                </label>
                <br> 

                <!-- Conexão PHP -->
                <br><?php
                    $sql = "SELECT * FROM doacao_voluntaria WHERE status=1";
                    $resultado=mysqli_query($conexao,$sql);
                    $notempty=false;
                    echo "Doação:";
                    while($doador=mysqli_fetch_array($resultado)){
                        $id=$doador['id_doador'];
                        $ativo=$doador['ativo'];
                        $notempty=true;
                    }
                    if(!$notempty){
                        echo "<h1>Confirmar</h1>";
                    }
                ?>

                <button type="submit" name="Post" value="1">Aceitar</button><br>
                <br><br><a href="painel_protetor.html"><input type="button" value="Voltar"></a>
                
            </form>
        </div>
	</body>
</html>


<!-- Conexão PHP -->
<?php
    if (isset($_POST['Post'])) {
        $id_doacao=$_POST['id_doacao'];
        $descricao=$_POST['descricao'];
        $motivo=$_POST['motivo'];
        $ativo=$_POST['ativo'];
        $quantidade=$_POST['quantidade'];
        $data=$_POST['data_cadastro'];
        $parceiro=$_POST['fk_parceiro_id'];
        $protetor=$_POST['fk_protetor_id'];
        $doador=$_POST['fk_doador_id'];
        $categoria=$_POST['fk_categoria_id'];
        //$imagem=$_POST[''];
        
            $sql="INSERT INTO doacao_voluntaria (id_doacao, descricao, motivo, ativo, quantidade, data_cadastro, fk_parceiro_id, fk_protetor_id, fk_doador_id, fk_categoria_id, imagem) VALUES('$id_doacao', '$descricao', '$motivo', '$ativo', '$quantidade', NOW(), '$parceiro', '$protetor', '$doador', '$categoria', '#imagem')";
            mysqli_query($conexao,$sql);
            $sql="UPDATE livro SET status=0 WHERE id=$livro";
            mysqli_query($conexao,$sql);
            header('Location: reserva.php');
    }

    mysqli_close($conexao)
?>
