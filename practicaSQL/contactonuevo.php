<form action="#" method="post">

    <h3>Añadir un nuevo contacto a la agenda</h3>

    <?php 
        $nombre = " ";
        $valorNombre = "";
        $apellido1 = " ";
        $valorApellido1 = "";
        $apellido2 = " ";
        $valorApellido2 = "";
        $telefono = " ";
        $valorTelefono = "";
        @$agenda = new mysqli('localhost', 'agenda', 'agenda', 'agenda');
        if ($agenda->connect_errno != null) {
            echo 'Error conectando a la base de datos: ';
            echo $agenda->connect_error;
            exit();
        }
        $flag = true;

        if(isset($_POST['nombre']) && $_POST['nombre'] == ""){
            $nombre = 'Error: el campo nombre está vacío';
            $valorNombre = $_POST['nombre'];
            $flag = false;
        }

        if(isset($_POST['apellido1'])&& $_POST['apellido1'] == ""){
            $apellido1 = 'Error: el campo apellido está vacío';
            $flag = false;
        }

        if(isset($_POST['apellido2'])&& $_POST['apellido2'] == ""){
            $apellido2 = 'Error: el campo apellido está vacío';
            $flag = false;
        }

        if(isset($_POST['telefono'])&& $_POST['telefono'] == ""){
            $telefono = 'Error: el campo teléfono está vacío';
            $flag = false;
        }
        
        if(isset($_POST['telefono']) && $_POST['telefono'] != ""){
            if(!preg_match('/[0-9]{9}/', $_POST['telefono'])){
                $telefono = "Introduce un teléfono válido";
                $flag = false;
            }
        }

        if(isset($_POST['nombre'])){
            $valorNombre = $_POST['nombre'];
        }

        if(isset($_POST['apellido1'])){
            $valorApellido1 = $_POST['apellido1'];
        }

        if(isset($_POST['apellido2'])){
            $valorApellido2 = $_POST['apellido2'];
        }

        if(isset($_POST['telefono'])){
            $valorTelefono = $_POST['telefono'];
        }


        if((isset($_POST['boton']) && $_POST['boton'] == "Enviar") && $flag == true){
            $query = "INSERT INTO contacto (nombre, apellido1, apellido2, telefono) VALUES (\"".$_POST['nombre']."\", \"".$_POST['apellido1']."\", \"".$_POST['apellido2']."\", \"".$_POST['telefono']."\");";
            $agenda->query($query);
            echo 'Formulario enviado correctamente';
        }else{
            echo ' 
                <label for="nombre">Nombre: </label> 
                <input type="text" name="nombre" id="nombre" value="' . $valorNombre . '"> '.$nombre.'<br><br>

                <label for="apellido1">Primer Apellido: </label>
                <input type="text" name="apellido1" id="apellido1" value="' . $valorApellido1 . '">'.$apellido1.'<br><br>

                <label for="apellido2">Segundo Apellido: </label>
                <input type="text" name="apellido2" id="apellido2" value="' . $valorApellido2 . '">'.$apellido2.'<br><br>

                <label for="telefono">Número de Teléfono: </label>
                <input type="text" name="telefono" id="telefono" value="' . $valorTelefono . '">'.$telefono.'<br><br>

                <input type="submit" value="Enviar" name="boton"></input><br><br><br>

        </form>
        ';
            
        }
?>
