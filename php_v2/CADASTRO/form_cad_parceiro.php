<?php
    include_once("conectar.php");
    
    if (isset($_POST['Edit'])) {
        
        $title='Editar';
    }elseif(isset($_POST['Delete'])){
        
        $title='Deletar';
    }elseif(isset($_POST['Edited'])){
        

        $nomefantasia=$_POST['nome'];
        $email=$_POST['email'];
        $telefone=$POST['telefone'];
        $cidade=$_POST['cidade'];
        $login=$_POST['login'];
        $senha=$_POST['senha'];
        //$imagem
        $cnpj=$_POST['cnpj'];

        nomefantasia, email, telefone, cidade, login_parceiro, senha_parceiro, cnpj

        $sql="UPDATE parceiro SET nomefantasia = '$nomefantasia', email = '$email', telefone = '$telefone', cidade = '$cidade', login_parceiro = '$login', senha_parceiro = '$senha', cnpj = '$cnpj'";
         mysqli_query($conexao,$sql);
    }elseif(isset($_POST['Deleted'])){
        
        $id_parceiro=$_POST['Deleted'];
        $sql="DELETE FROM parceiro WHERE id_parceiro = '$id_parceiro'";
        mysqli_query($conexao,$sql);
    }else{
        
        $title='Erro';
    }
?>

<html>
    <head>
        <link rel="stylesheet" href="estilo.css">
        <title>AmigoPet</title>
    </head>
    
    <body>
        
            
        <?php
                echo "<header><h3>Editar Informações do Parceiro</h3>";

                if (isset($_POST['Edit'])) {
                
                $editid=$_POST['Edit'];
                $sql = "SELECT * FROM parceiro = $editid";
                $resultado=mysqli_fetch_array(mysqli_query($conexao,$sql));

                $nomefantasia=$resultado['nome'];
                $email=$resultado['email'];
                $telefone=$resultado['telefone'];
                $cidade=$resultado['cidade'];
                $login=$resultado['login'];
                $senha=$resultado['senha'];
                //imagem
                $cnpj=$resultado['cnpj'];
                
                echo "<div id='editar_parceiro'>";
                echo "<p>Edite as informações do Parceiro abaixo: </p>";
                echo "<form action'editar_parceiro.php' method='post'>";
                echo "<br><label>Nome Fantasia:<input type='text' name='nome' placeholder='$nomefantasia' required></label><br>";
                echo "<br><label>Email:<input type='text' name='email' placeholder='$email' required></label><br>";
                echo "<br><label>Telefone:<input type='text' name='telefone' placeholder='$telefone' required></label><br>";
                echo "<br><label>Cidade: <input type='text' name='cidade' required>$cidade</label><br>";
                echo "<br><label>CNPJ: <input type='text' name='cnpj' required>$cnpj</label><br>";
                echo "<br><label>Login: <input type='text' name='login' required>$login</label><br>";
                echo "<br><label>Senha: <input type='text' name='senha' required>$senha</label><br>";

                echo "<br><button type='submit' name='Edited' value='$editid'>Alterar</button>";
                echo "&nbsp&nbsp&nbsp<a href='index.html'><input type='button' value='Voltar'></a>";
                echo "</form></div>";

            }elseif(isset($_POST['Delete'])){
                $delparceiro=$_POST['Delete'];
                $sql = "SELECT * FROM parceiro WHERE id_parceiro = $delparceiro";
                $resultado=mysqli_fetch_array(mysqli_query($conexao,$sql));

                $nome=$resultado['nome'];
                echo "<div id='delete'>";
                echo "Você irá excluir o Parceiro ($nome).<br><br>";
                echo "<form action='editar_parceiro.php' method='post'>";
                echo "<button type='submit' name='Deleted' value='$delparceiro'>Sim</button>";
                echo "&nbsp&nbsp<button onClick='history.go(-1)'>Não</button><br><br>";
                echo "&nbsp&nbsp&nbsp&nbsp<a href='index.html'><input type='button' value='Voltar'></a>";
                echo "</form><br>";
                
            }else{
                
                header('Location: lista_parceiro.php');
            }
        ?>
        </div>
    </body>
</html>

<?php
    mysqli_close($conexao);
?>
