<?php
    @$agenda = new mysqli('localhost', 'agenda', 'agenda', 'agenda');
    if ($agenda->connect_errno != null) {
        echo 'Error conectando a la base de datos: ';
        echo $agenda->connect_error;
        exit();
    }

    $query = 'SELECT id FROM contacto WHERE id='.$_GET['id'];
    $resultado = $agenda->query($query, MYSQLI_USE_RESULT);
    if($resultado->num_rows > 0){
        
    }else{
        echo 'ERROR: No existe el contacto seleccionado';
    }
?>