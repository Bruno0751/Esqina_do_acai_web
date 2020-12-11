<?php
    session_start();
    ob_start();

    include '../dao/dao-usuario.php';
    include '../model/usuario.php';
    //include '../utl/padronizacao.php';
    //include '../utl/validacao.php';

    $usuario = new Usuario();

    $usuario->name = $_POST['textName'];
    $usuario->email = $_POST['emailEmail'];
    $usuario->endereco = $_POST['textEndereco'];
    $usuario->zipCode = $_POST['nunberZipCode'];
    $usuario->cpf = $_POST['numberCPF'];
    $usuario->password = $_POST['passwordPassword'];
    
    $daoUsuario = new DAOUsuario();


    $daoUsuario->cadastrarUsuario($usuario);
    $_SESSION['msg'] = "Usuario Cadastrado";
    header('location:../login.php');
    ob_end_flush();             