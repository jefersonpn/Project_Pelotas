<?php
    include_once("conectar.php");
    
    if (isset($_POST['Edit'])) {
        
        $title='Editar';
    }elseif(isset($_POST['Delete'])){
        
        $title='Deletar';
    }elseif(isset($_POST['Edited'])){
        

        $nome=$_POST['nome'];
        $email=$_POST['email'];
        $telefone=$POST['telefone'];
        $cidade=$_POST['cidade'];
        $login=$_POST['login'];
        $senha=$_POST['senha'];
        $sql="UPDATE protetor SET nome = '$nome', email = '$email', telefone = '$telefone', cidade = '$cidade', login_protetor = '$login', senha_protetor = '$senha'";
         mysqli_query($conexao,$sql);
    }elseif(isset($_POST['Deleted'])){
        
        $nome=$_POST['Deleted'];
        $sql="DELETE FROM protetor WHERE nome = '$nome'";
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
                echo "<header><h3>Editar Informações do protetor</h3>";

                if (isset($_POST['Edit'])) {
                
                $editid=$_POST['Edit'];
                $sql = "SELECT * FROM protetor = $editid";
                $resultado=mysqli_fetch_array(mysqli_query($conexao,$sql));

                $nome=$resultado['nome'];
                $email=$resultado['email'];
                $telefone=$resultado['telefone'];
                $cidade=$resultado['cidade'];
                $login=$resultado['login'];
                $senha=$resultado['senha'];
                
                echo "<div id='editar_protetor'>";
                echo "<p>Edite as informações do protetor abaixo: </p>";
                echo "<form action'editar_protetor.php' method='post'>";
                echo "<br><label>Nome:<input type='text' name='nome' placeholder='$nome' required></label><br>";
                echo "<br><label>Email:<input type='text' name='email' placeholder='$email' required></label><br>";
                echo "<br><label>Telefone:<input type='text' name='telefone' placeholder='$telefone' required></label><br>";
                echo "<br><label>Cidade: <input type='text' name='cidade' required>$cidade</label><br>";
                echo "<br><label>Login: <input type='text' name='login' required>$login</label><br>";
                echo "<br><label>Senha: <input type='text' name='senha' required>$senha</label><br>";

                echo "<br><button type='submit' name='Edited' value='$editid'>Alterar</button>";
                echo "&nbsp&nbsp&nbsp<a href='index.html'><input type='button' value='Voltar'></a>";
                echo "</form></div>";

            }elseif(isset($_POST['Delete'])){
                $delprotetor=$_POST['Delete'];
                $sql = "SELECT * FROM protetor WHERE nome = $delprotetor";
                $resultado=mysqli_fetch_array(mysqli_query($conexao,$sql));

                $nome=$resultado['nome'];
                echo "<div id='delete'>";
                echo "Você irá excluir o protetor ($nome).<br><br>";
                echo "<form action='editar_protetor.php' method='post'>";
                echo "<button type='submit' name='Deleted' value='$delprotetor'>Sim</button>";
                echo "&nbsp&nbsp<button onClick='history.go(-1)'>Não</button><br><br>";
                echo "&nbsp&nbsp&nbsp&nbsp<a href='index.html'><input type='button' value='Voltar'></a>";
                echo "</form><br>";
                
            }else{
                
                header('Location: lista_protetor.php');
            }
        ?>
        </div>
    </body>
</html>

<?php
    mysqli_close($conexao);
?>
