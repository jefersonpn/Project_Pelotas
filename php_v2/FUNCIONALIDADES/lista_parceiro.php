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
            <h3>Lista de Parceiros</h3>
        </header>

        <div class="lista_parceiros">
            <form action="editar_parceiros.php" method="post">
                
            <table border="1px" cellpadding="5px" cellspacing="0">
                    <tr>
                        <th>Nome Fantasia</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Cidade</th>
                        <th>Login</th>
                        <th>Senha</th>
                        <th>Imagem</th>
                        <th>CNPJ</th>
                    </tr>

                <?php 
                    $sql = "SELECT * FROM parceiro";
                    $parceiro=mysqli_query($conexao,$sql);
                    while($data=mysqli_fetch_array($parceiro)){

                $nomefantasia=$parceiro['nome'];
                $email=$parceiro['email'];
                $telefone=$parceiro['telefone'];
                $cidade=$parceiro['cidade'];
                $login=$parceiro['login'];
                $senha=$parceiro['senha'];
                $imagem=$parceiro['imagem'];
                $cnpj=$parceiro['cnpj'];
                
                        echo "<tr class='dif'><td>".$nomefantasia."</td>";
                        echo "<td>".$email."</td>";
                        echo "<td>".$telefone."</td>";
                        echo "<td>".$cidade."</td>";
                        echo "<td>".$login."</td>";
                        echo "<td>".$senha."</td>";
                        echo "<td>".$imagem."</td>";
                        echo "<td>".$cnpj."</td>";

                        echo "&nbsp&nbsp<td><button name='Edit' value='$nomefantasia'>EDITAR</button></td>";
                        echo "&nbsp&nbsp<td><button name='Delete' value='$nomefantasia'>EXCLUIR</button></td></tr>";
                    }
                    mysqli_close($conexao)
                ?>

                </table>
            </form>
        </div>
    </body>
</html>
