<?php
    require 'conexao.php';

    class DAOUsuario{

        private $conexao = null;

        public function __construct(){
            $this->conexao = Conexao::getInstance();
        }

        public function __destruct(){}

        public function cadastrarUsuario($usuario){
            try{

                $stat = $this->conexao->prepare("INSERT INTO person (id_person, b_name, b_email, b_zipCode, b_endereco, b_number, b_complement, b_cpf, b_password, b_type) VALUES(NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

                $stat->bindValue(1, $usuario->c_name);
                $stat->bindValue(2, $usuario->c_email);
                $stat->bindValue(3, $usuario->c_zipCode);
                $stat->bindValue(4, $usuario->c_endereco);
                $stat->bindValue(5, $usuario->c_number);
                $stat->bindValue(6, $usuario->c_complement);
                $stat->bindValue(7, $usuario->c_cpf);
                $stat->bindValue(8, $usuario->c_password);
                $stat->bindValue(9, $usuario->c_type);

                $stat->execute();

            }catch(PDOException $erro){
                echo "Erra ao Cadastrar " . $erro;

            }
        }
    }