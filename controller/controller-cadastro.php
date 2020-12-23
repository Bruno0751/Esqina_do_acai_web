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
    $usuario->zipCode = $_POST['nunberZipCode'];
    $usuario->endereco = $_POST['textEndereco'];
    $usuario->number = $_POST['numberHouse'];
    $usuario->complement = $_POST['numberComplement'];
    $usuario->cpf = $_POST['numberCPF'];
    $usuario->password = $_POST['passwordPassword'];
    
    $daoUsuario = new DAOUsuario();


    $daoUsuario->cadastrarUsuario($usuario);
    $_SESSION['msg'] = "Usuario Cadastrado";
    header('location:../login.php');
    ob_end_flush();             