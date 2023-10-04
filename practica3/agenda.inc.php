<?php
    require_once("contactos.inc.php");

    class Agenda{
        private static $contactos = array();

        public static function addContact($contacto){
            array_push(self::$contactos, $contacto);
        }

        public static function removeContact($idContacto){
            foreach(self::$contactos as $value => $object){
                if($object->idContacto == $idContacto){
                    unset(self::$contactos[$value]);
                }
            }
        }

        public static function showAll(){
            foreach(self::$contactos as $value){
                echo $value;
            }
        }
    }
?>