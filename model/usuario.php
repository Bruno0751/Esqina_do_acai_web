<?php
    class Usuario{

        private $idUsuario;
        private $name;
        private $email;
        private $endereco;
        private $zipCode;
        private $cpf;
        private $password;

        public function __construct(){}

        public function __destruct(){}

        public function __get($atributo){
            return $this->$atributo;
        }

        public function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

        public function __toString(){
            return nl2br("Nome : $this->idUsuario
                Email: $this->name
                Login: $this->email
                Senha: $this->endereco
                Imagem: $this->zipCode
                Data: $this->cpf
                IMG: $this->password");
        }
    }