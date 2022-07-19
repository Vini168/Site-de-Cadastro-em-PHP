<?php
    include ("conexao.php");
    include ("banco-cliente.php");
    
    $id=$_GET['cod_cliente'];
    if(excluir($conexao, $id)){
        header("Location: pag_listar_cliente.php");
        die();
    }