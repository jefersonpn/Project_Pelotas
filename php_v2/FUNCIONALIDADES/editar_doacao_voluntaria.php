<?php
    include_once("conectar.php");
    
    if (isset($_POST['Edita_r'])) {
        
        $title='Editar';
    }elseif(isset($_POST['Delete'])){
        
        $title='Deletar';
    }elseif(isset($_POST['Editar'])){
        
        $id_doacao=$_POST['id_doacao'];
        $descricao=$_POST['descricao'];
        $motivo=$_POST['motivo'];
        $quantidade=$_POST['quantidade'];
        //$ativo=$_POST['ativo'];
        $sql="UPDATE doacao_voluntaria SET descricao = '$descricao', motivo = '$motivo', quantidade = '$quantidade' WHERE id_doacao = '$id_doacao' ";
        mysqli_query($conexao,$sql);
    }elseif(isset($_POST['Deleted'])){
        
        $deletar=$_POST['Deleted'];
        $sql="DELETE FROM doacao_voluntaria WHERE id = '$deletar'";
        mysqli_query($conexao,$sql);
    }else{
        
        $title='Erro';
    }
?>
<html> <!-- EDITAR DOAÇÃO DO DOADOR -->

    <head>
         <link rel="stylesheet" href="estilo.css">
        <title>EDITAR DOAÇÃO</title>
    </head>

    <body>
        <?php
            echo "<header><h3>Editar Solicitação</h3></header>";
            
            if (isset($_POST['Edita_r'])) {
                
                $editid=$_POST['Edita_r'];
                $sql = "SELECT doacao_voluntaria.descricao AS Descrição, doacao_voluntaria.motivo AS Motivo, doacao_voluntaria.quantidade AS Quantidade FROM doacao_voluntaria WHERE id_doacao = $editid";

                $doacao_voluntaria=mysqli_fetch_array(mysqli_query($conexao,$sql));

                $descricao=$doacao_voluntaria['descricao'];
                $motivo=$doacao_voluntaria['motivo'];
                $quantidade=$doacao_voluntaria['quantidade'];

                echo "<form action='editar_doacao_voluntaria.php' method='post'>";
                echo "<br><label>Descrição: <input type='text' name='descricao' placeholder='$descricao' required></label><br>";
                echo "<br><label>Motivo: <input type='text' name='motivo' placeholder='$motivo' required></label><br>";
                echo "<br><label>Quantidade: <select name='quantidade' required>";
                echo "</div>";
                    
                echo "</select></label>";
                echo "&nbsp&nbsp&nbsp<button type='submit' name='Editar' value='$editid'>Alterar</button>";
                echo "</form></div>";

            }elseif(isset($_POST['Delete'])){
                
                $deleteid=$_POST['Delete'];
                $sql = "SELECT doacao_voluntaria.descricao AS Descrição, doacao_voluntaria.motivo AS Motivo, doacao_voluntaria.quantidade AS Quantidade FROM doacao_voluntaria WHERE id_doacao = $deleteid";
                $doacao_voluntaria=mysqli_fetch_array(mysqli_query($conexao,$sql));

                $descricao=$doacao_voluntaria['descricao'];
                $motivo=$doacao_voluntaria['motivo'];
                $quantidade=$doacao_voluntaria['quantidade'];
                echo "<div id='delete'>";
                echo "Você irá excluir a solicitação: $descricao, motivo: $motivo e a quantidade: $quantidade.<br><br>";
                echo "<form action='editar_doacao_voluntaria.php' method='post'>";
                echo "<button type='submit' name='Deleted' value='$deleteid'>Sim</button>";
                
                echo "&nbsp&nbsp<button onClick='history.go(-1)'>Não</button><br><br>";
                echo "&nbsp&nbsp&nbsp&nbsp<a href='index.html'><input type='button' value='Voltar'></a>";
                echo "</form></div><br>";
            }else{
                
                header('Location: lista_doacao.php');
            }
        ?>
    </body>
</html>
<?php
    mysqli_close($conexao);
?>