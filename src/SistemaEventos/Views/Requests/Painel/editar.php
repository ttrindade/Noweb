<?php

    /*
        Faz a request de edição para o controller do painel
    */

    require_once '../../../../../vendor/autoload.php';

    if (!isset($_SESSION)) session_start(); // Se a sessão não existir, inicia uma
    if ($_SESSION['UsuarioID'] == '') header("Location: ../../login.php"); //Se não estiver logado, redireciona para a página de login

    $controller = new  SistemaEventos\Controllers\PainelController();
    $controller->requestEdicao( $_POST['id'],
                                $_POST['titulo'],
                                $_POST['status'],
                                $_POST['descricao'],
                                $_POST['data']);

?>