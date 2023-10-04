<?php
    include("Soporte.php");
    class Juego extends Soporte{
        public $consola;
        private $minNumJugadores;
        private $maxNumJugadores;

        public function __construct($titulo, $numero, $precio, $consola, $minNumJugadores, $maxNumJugadores){
            parent::__construct($titulo, $numero, $precio);
            $this->consola = $consola;
            $this->minNumJugadores = $minNumJugadores;
            $this->maxNumJugadores = $maxNumJugadores;
        }

        public function muestraJugadoresPosibles(){
            if($this->maxNumJugadores == 1){
                return 'Para un jugador';
            }else if($this->minNumJugadores == 1){
                return 'Para ' . $this->maxNumJugadores . ' jugadores';
            }else{
                return 'De ' . $this->minNumJugadores . ' a ' . $this->maxNumJugadores . ' jugadores';
            }
        }

        public function muestraResumen(){
            echo '<br>Juego para: ' . $this->consola . '<br>' . $this->titulo . '<br>' . $this->getPrecio() . ' € (IVA no incluido)<br>' . $this->muestraJugadoresPosibles();
        }
    }
?>