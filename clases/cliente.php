<?php
 class Cliente{
    private $nombre;
    private $telefono;
    private $calle;
    private $numero;

    function __construct($nombre,$telefono,$calle,$numero){
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->calle = $calle;
        $this->numero = $numero;
    } 

    function __set($prop,$valor){
        $this->$prop = $valor;
    }

    function __get($prop){
        return $this->$prop;
    }

    function mostrarDatos(){
        $data = "
            <h3>Datos del cliente</h3><br>
            Cliente: {$this->nombre}<br>
            Domiciliado en: {$this->calle} {$this->numero}<br>
            Teléfono: {$this->telefono}<br>
        ";
        return $data;
    }
}
?>