<?php
    @$agenda = new mysqli('localhost', 'agenda', 'agenda', 'agenda');
    if ($agenda->connect_errno != null) {
        echo 'Error conectando a la base de datos: ';
        echo $agenda->connect_error;
        exit();
    }
    $id = $_GET['id'];
    $query = "SELECT * FROM contacto WHERE id='".$id."';";
    $resultado = $agenda->query($query);
    if($resultado->num_rows > 0){
        $query = "DELETE FROM contacto WHERE id='".$id."';";
        $resultado = $agenda->query($query);
        header("Location: ./contactonuevo.php?borrado='true'");
        $agenda->close();
        exit();
    }else{
        echo 'ERROR: No existe el contacto seleccionado';
        $agenda->close();
    }
    
    
?>