<?php
    class Usuario{

        private $idUsuario;
        private $c_name;
        private $c_email;
        private $c_zipCode;
        private $c_endereco;
        private $c_number;
        private $c_complement;
        private $c_cpf;
        private $c_password;
        private $c_type;

        public function __construct(){}

        public function __destruct(){}

        public function __get($atributo){
            return $this->$atributo;
        }

        public function __set($atributo, $valor){
            $this->$atributo = $valor;
        }
    }