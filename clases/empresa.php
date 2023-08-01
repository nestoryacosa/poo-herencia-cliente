<?php
    require_once "clases/cliente.php";

    class Empresa extends Cliente{
        private $rut;

        function __construct($nombre,$telefono,$calle,$numero,$rut){
            parent::__construct($nombre,$telefono,$calle,$numero);
            $this->rut = $rut;
        }
        
        function setRut($rut){
            $this->rut = $rut;
        }
    
        function getRut(){
            return $this->rut;
        }

        function __toString(){
            $empresa = "
            Empresa: {$this->nombre} 
            teléfono: {$this->telefono} 
            Dirección: {$this->calle} {$this->numero}
            ";
            return $empresa;
        }
    }

?>