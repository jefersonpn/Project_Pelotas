<?php
include_once("conectar.php");
?>

<html>
    <head>
        
        <link rel="stylesheet" href="estilo.css">
        <title>AmigoPet</title>
    </head>
    <body>
        <header>
            <h3>Lista de Protetores</h3>
        </header>

        <div class="lista_protetor">
            <form action="editar_protetor.php" method="post">
                
            <table border="1px" cellpadding="5px" cellspacing="0">
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Cidade</th>
                        <th>Login</th>
                        <th>Senha</th>
                        <th></th>
                    </tr>

                <?php 
                    $sql = "SELECT * FROM protetor";
                    $protetor=mysqli_query($conexao,$sql);
                    while($data=mysqli_fetch_array($protetor)){

                        $nome=$protetor['nome'];
                        $email=$protetor['email'];
                        $telefone=$protetor['telefone'];
                        $cidade=$protetor['cidade'];
                        $login=$protetor['login'];
                        $senha=$protetor['senha'];
                        
                        echo "<tr class='dif'><td>".$nome."</td>";
                        echo "<td>".$email."</td>";
                        echo "<td>".$telefone."</td>";
                        echo "<td>".$cidade."</td>";
                        echo "<td>".$login."</td>";
                        echo "<td>".$senha."</td>";

                        echo "&nbsp&nbsp<td><button name='Edit' value='$nome'>EDITAR</button></td>";
                        echo "&nbsp&nbsp<td><button name='Delete' value='$nome'>EXCLUIR</button></td></tr>";
                    }
                    mysqli_close($conexao)
                ?>

                </table>
            </form>
        </div>
    </body>
</html>
