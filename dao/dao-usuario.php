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

                $stat = $this->conexao->prepare("INSERT INTO person (id_person, b_name, b_email, b_zipCode, b_endereco, b_number, b_complement, b_cpf, b_password) VALUES(null, ?, ?, ?, ?, ?, ?, ?, ?)");

                $stat->bindValue(1, $usuario->name);
                $stat->bindValue(2, $usuario->email);
                $stat->bindValue(3, $usuario->zipCode);
                $stat->bindValue(4, $usuario->endereco);
                $stat->bindValue(5, $usuario->number);
                $stat->bindValue(6, $usuario->complement);
                $stat->bindValue(7, $usuario->cpf);
                $stat->bindValue(8, $usuario->password);

                $stat->execute();

            }catch(PDOException $erro){
                echo "Erra ao Cadastrar " . $erro;

            }
        }
    }
