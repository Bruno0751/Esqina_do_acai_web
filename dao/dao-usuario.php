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

                $stat = $this->conexao->prepare("INSERT INTO usuario (id_usuario, nome, email, endereco, cep, cpf, senha) VALUES(null, ?, ?, ?, ?, ?, ?)");

                $stat->bindValue(1, $usuario->name);
                $stat->bindValue(2, $usuario->email);
                $stat->bindValue(3, $usuario->endereco);
                $stat->bindValue(4, $usuario->zipCode);
                $stat->bindValue(5, $usuario->cpf);
                $stat->bindValue(6, $usuario->password);

                $stat->execute();

            }catch(PDOException $erro){
                echo "Erra ao Cadastrar " . $erro;

            }
        }
    }
