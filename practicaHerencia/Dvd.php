<?php
    include("Soporte.php");
    class Dvd extends Soporte{
        public $idiomas;
        private $formatPantalla;

        public function __construct($titulo, $numero, $precio, $idiomas, $formatPantalla){
            parent::__construct($titulo, $numero, $precio);
            $this->idiomas = $idiomas;
            $this->formatPantalla = $formatPantalla;
        }

        public function muestraResumen(){
            echo '<br>Película en DVD:<br>' . $this->titulo . '<br>' . $this->getPrecio() . ' € (IVA no incluido)<br>Idiomas: ' . $this->idiomas . '<br>Formato Pantalla: ' . $this->formatPantalla ;
        }
    }
?>