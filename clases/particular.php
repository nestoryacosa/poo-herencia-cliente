<?php
    require_once "clases/cliente.php";
    
    class Particular extends Cliente{
        protected $cedula;

        function __construct($nombre,$telefono,$calle,$numero,$cedula){
            parent::__construct($nombre,$telefono,$calle,$numero);
            $this->cedula = $cedula;
        }

        function setCedula($cedula){
            $this->cedula = $cedula;
        }
    
        function getCedula(){
            return $this->cedula;
        }
    }
?>