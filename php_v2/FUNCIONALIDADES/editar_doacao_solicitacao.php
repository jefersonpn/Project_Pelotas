<?php
    include_once("conectar.php");
    
    if (isset($_POST['Edita_r'])) {
        
        $title='Editar';
    }elseif(isset($_POST['Delete'])){
        
        $title='Deletar';
    }elseif(isset($_POST['Editar'])){
        
        $id_solicitacao=$_POST['id_solicitacao'];
        $descricao=$_POST['descricao'];
        $motivo=$_POST['motivo'];
        $quantidade=$_POST['quantidade'];
        //$ativo=$_POST['ativo'];
        $sql="UPDATE doacao_solicitacao SET descricao = '$descricao', motivo = '$motivo', quantidade = '$quantidade' WHERE id_solicitacao = '$id_solicitacao' ";
        mysqli_query($conexao,$sql);
    }elseif(isset($_POST['Deleted'])){
        
        $deletar=$_POST['Deleted'];
        $sql="DELETE FROM doacao_solicitacao WHERE id = '$deletar'";
        mysqli_query($conexao,$sql);
    }else{
        
        $title='Erro';
    }
?>
<html> <!-- EDITAR SOLICITAÇÃO DO PROTETOR -->

    <head>
         <link rel="stylesheet" href="estilo.css">
        <title>Editar Solicitação Protetor</title>
    </head>

    <body>
        <?php
            echo "<header><h3>Editar Solicitação</h3></header>";
            
            if (isset($_POST['Edita_r'])) {
                
                $editid=$_POST['Edita_r'];
                $sql = "SELECT doacao_solicitacao.descricao AS Descrição, doacao_solicitacao.motivo AS Motivo, doacao_solicitacao.quantidade AS Quantidade FROM doacao_solicitacao WHERE id_solicitacao = $editid";

                $doacao_solicitacao=mysqli_fetch_array(mysqli_query($conexao,$sql));

                $descricao=$doacao_solicitacao['descricao'];
                $motivo=$doacao_solicitacao['motivo'];
                $quantidade=$doacao_solicitacao['quantidade'];

                echo "<form action='editar_doacao_solicitacao.php' method='post'>";
                echo "<br><label>Descrição: <input type='text' name='descricao' placeholder='$descricao' required></label><br>";
                echo "<br><label>Motivo: <input type='text' name='motivo' placeholder='$motivo' required></label><br>";
                echo "<br><label>Quantidade: <select name='quantidade' required>";
                echo "</div>";
					
                echo "</select></label>";
                echo "&nbsp&nbsp&nbsp<button type='submit' name='Editar' value='$editid'>Alterar</button>";
                echo "</form></div>";

            }elseif(isset($_POST['Delete'])){
                
                $deleteid=$_POST['Delete'];
                $sql = "SELECT doacao_solicitacao.descricao AS Descrição, doacao_solicitacao.motivo AS Motivo, doacao_solicitacao.quantidade AS Quantidade FROM doacao_solicitacao WHERE id_solicitacao = $deleteid";
                $doacao_solicitacao=mysqli_fetch_array(mysqli_query($conexao,$sql));

                $descricao=$doacao_solicitacao['descricao'];
                $motivo=$doacao_solicitacao['motivo'];
                $quantidade=$doacao_solicitacao['quantidade'];
                echo "<div id='delete'>";
                echo "Você irá excluir a solicitação: $descricao, motivo: $motivo e a quantidade: $quantidade.<br><br>";
                echo "<form action='editar_doacao_solicitacao.php' method='post'>";
                echo "<button type='submit' name='Deleted' value='$deleteid'>Sim</button>";

                echo "&nbsp&nbsp<button onClick='history.go(-1)'>Não</button><br><br>";
                echo "&nbsp&nbsp&nbsp&nbsp<a href='index.html'><input type='button' value='Voltar'></a>";
                echo "</form></div><br>";
            }else{
                
                header('Location: lista_solicitacao.php');
            }
        ?>
    </body>
</html>
<?php
    mysqli_close($conexao);
?>