<!DOCTYPE html>

<?php
    session_start();
    if($_SESSION['log'] != "ativo")
    {
        session_destroy();
        header("Location: pag_login.php");
    }
?>

<?php
    include("conexao.php");
    include("banco-cliente.php")
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
</head>
<body>
    <center>
        <h1>Clientes Cadastrados</h1>
        <table border="1">
            <tr>
                <td>id</td>
                <td>Nome</td>
                <td>Telefone</td>
                <td>Endereço</td>
                <td>Email</td>
                <td>Idade</td>
                <td>Salario</td>
                <td>Excluir</td>
                <td>Alterar</td>
            </tr>
            <?php
                $clientes=listarClientes($conexao);
                foreach($clientes as $cliente):
            ?>
            <tr>
                <td><?php echo $cliente['cod_cliente']?></td>
                <td><?php echo $cliente['nome']?></td>
                <td><?php echo $cliente['telefone']?></td>
                <td><?php echo $cliente['endereco']?></td>
                <td><?php echo $cliente['email']?></td>
                <td><?php echo $cliente['idade']?></td>
                <td><?php echo $cliente['salario']?></td>

                <td>
                    <a href="pag_excluir_cliente.php?cod_cliente=
                    <?php echo $cliente['cod_cliente']?>">Excluir</a>
                </td>

                <td>
                    <a href="pag_alterar_cliente.php?cod_cliente=
                    <?php echo $cliente['cod_cliente'] ?>">Alterar</a>
                </td>
                
            </tr>
            <?php
                endforeach;
            ?>
        </table>
    </center>
</body>
</html>