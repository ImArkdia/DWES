<?php
    require_once("agenda.inc.php");
    require_once("contactos.inc.php");

    Agenda::addContact(new Contacto("jordi", "benavent", "marti", "6122"));
    Agenda::addContact(new Contacto("pepe", "garcia", "torralba", "4442"));
    Agenda::addContact(new Contacto("pablo", "frape", "serrano", "2322"));

    Agenda::showAll();
    Agenda::removeContact(1);
    Agenda::showAll();
?>