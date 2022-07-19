<!DOCTYPE html>
<?php
    session_start();
    if($_SESSION['log'] != "ativo")
    {
        session_destroy();
        header("Location: pag_login.php");
    }
    echo "Ola, <b>" . $_SESSION['nome'].
        "</b>, Bem-vindo ao sistema";
    echo "<a href='logout.php'>Sair</a>";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Menu</title>
</head>
<body>
    <h1>Bem-Vindo ao Sistema</h1>

        <ul>
            <li>
                <a href="pag_cadastrar_cliente.php">Cadastrar Cliente</a>
            </li>
            <?php
                $_SESSION['verifica'] = 'ativo';
            ?>
        </ul>

    
        <ul>
            <li>
                <a href="pag_listar_cliente.php">Gerenciamento de Clientes</a>
            </li>
            <?php
                $_SESSION['verifica']='ativo';
                die();
            ?>
        </ul>

</body>
</html>