<?php
    class Contacto{
        private static $contadorId = 0;
        private $idContacto;
        private $nombre;
        private $apellido1;
        private $apellido2;
        private $telefono;

        public function __construct($nombre, $apellido1, $apellido2, $telefono){
            $this->idContacto = ++self::$contadorId;
            $this->nombre = $nombre;
            $this->apellido1 = $apellido1;
            $this->apellido2 = $apellido2;
            $this->telefono = $telefono;
        }

        public function __get($propiedad){
            return $this->$propiedad;
        }

        public function __set($propiedad, $valor){
            $this->$propiedad = $valor;
        }

        public function __toString(){
            return 'Nombre: ' . $this->nombre . '<br>Apellidos: ' . $this->apellido1 . ' ' . $this->apellido2 . '<br>Teléfono: ' . $this->telefono . '<br><br>';
        }
    }

?>
