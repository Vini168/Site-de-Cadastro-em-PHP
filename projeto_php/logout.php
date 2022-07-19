<?php
    //iniciar a sessão
    session_start();
    //destruir sessão
    session_destroy();
    //voltar para tela de login
    header("Location: pag_login.php");
?>