<!DOCTYPE html>
<?php
    session_start();
    if($_SESSION['log'] != "ativo")
    {
        session_destroy();
        header("Location: pag_login.php");
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
</head>
<body>
    <center>
        <h1>Cadastro Cliente</h1>
        <form action="verificaCadastro.php" method="post">
            Nome:       <input type="text" name="txtnome" placeholder="Digite nome"><br>
            Telefone:   <input type="text" name="txttel" placeholder="Digite Telefone"><br>
            Endereço:   <input type="text" name="txtend" placeholder="Digite Endereço"><br>
            Email:      <input type="text" name="txtemail" placeholder="Digite Email"><br>
            Idade:      <input type="text" name="txtidade" placeholder="Digite idade"><br>
            Salario:    <input type="text" name="txtsal" placeholder="Digite salario"><br>

            <input type="submit" value="Cadastrar" name="btn"><br>
        </form>
    </center>
</body>
</html>