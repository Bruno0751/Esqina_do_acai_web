<?php
    session_start();
    ob_start();

    include '../dao/dao-usuario.php';
    include '../model/usuario.php';
    //include '../utl/padronizacao.php';
    //include '../utl/validacao.php';

    $usuario = new Usuario();

    $usuario->c_name = $_POST['textName'];
    $usuario->c_email = $_POST['emailEmail'];
    $usuario->c_zipCode = $_POST['nunberZipCode'];
    $usuario->c_endereco = $_POST['textEndereco'];
    $usuario->c_number = $_POST['numberHouse'];
    $usuario->c_complement = $_POST['numberComplement'];
    $usuario->c_cpf = $_POST['numberCPF'];
    $usuario->c_password = $_POST['passwordPassword'];
    $usuario->c_type = $_POST['selectTipo'];
    
    $daoUsuario = new DAOUsuario();

    $daoUsuario->cadastrarUsuario($usuario);
    $_SESSION['msg'] = "Usuario Cadastrado";
    header('location:../login.php');
    ob_end_flush();             