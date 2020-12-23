<?php
    class Usuario{

        private $idUsuario;
        private $name;
        private $email;
        private $zipCode;
        private $endereco;
        private $number;
        private $complement;
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
    }