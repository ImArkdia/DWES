<?php
    include("Soporte.php");
    class CintaVideo extends Soporte{
        private $duracion;

        public function __construct($titulo, $numero, $precio, $duracion){
            parent::__construct($titulo, $numero, $precio);
            $this->duracion = $duracion;
        }

        public function muestraResumen(){
            echo '<br>Película en VHS:<br>' . $this->titulo . '<br>' . $this->getPrecio() . ' € (IVA no incluido)<br>Duración: ' . $this->duracion . ' minutos' ;
        }
    }
?>