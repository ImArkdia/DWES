<?php
    include("cabecera.inc.php");

?>

<form action="#" method="post">

    <h3>Formulario de Registro</h3>

    <?php 
        $nombre = " ";
        $valorNombre = "";
        $apellidos = " ";
        $valorApellidos = "";
        $usuario = " ";
        $valorUsuario = "";
        $contra1 =" ";
        $valorContra1 = "";
        $contra2 = " ";
        $mail = " ";
        $valorMail = "";
        $condiciones = " ";
        
        $flag = true;

        if(isset($_POST['nombre']) && $_POST['nombre'] == ""){
            $nombre = 'Error: el campo nombre está vacío';
            $valorNombre = $_POST['nombre'];
            $flag = false;
        }

        if(isset($_POST['apellidos'])&& $_POST['apellidos'] == ""){
            $apellidos = 'Error: el campo apellido está vacío';
            $flag = false;
        }

        if(isset($_POST['usuario']) && $_POST['usuario'] == ""){
            $usuario = 'Error: el campo nombre de usuario está vacío';
            $flag = false;
        }

        if(isset($_POST['contra1']) && $_POST['contra1'] == ""){
            $contra1 = 'Error: el campo contraseña está vacío';
            $flag = false;
        }

        if(isset($_POST['contra2']) && $_POST['contra2'] == ""){
            $contra2 = 'Error: el campo contraseña está vacío';
            $flag = false;
        }

        if(isset($_POST['contra1']) && isset($_POST['contra2'])){
            if($_POST['contra1'] != $_POST['contra2']){
                $contra2 = "La contraseña no coincide";
                $flag = false;
            }
        }
        
        if(isset($_POST['mail']) && $_POST['mail'] != ""){
            if(!preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $_POST['mail'])){
                $mail = "Introduce un email válido";
                $flag = false;
            }
        }

        if(!isset($_POST['condiciones'])){
            $flag = false;
        }

        if(isset($_POST['nombre'])){
            $valorNombre = $_POST['nombre'];
        }

        if(isset($_POST['apellidos'])){
            $valorApellidos = $_POST['apellidos'];
        }

        if(isset($_POST['usuario'])){
            $valorUsuario = $_POST['usuario'];
        }

        if(isset($_POST['contra1']) && $_POST['contra1'] == ""){
            $valorContra1 = $_POST['contra1'];
        }
        
        if(isset($_POST['mail'])){
            $valorMail = $_POST['mail'];
        }

        if((isset($_POST['boton']) && $_POST['boton'] == "Enviar") && $flag == true){
            echo 'Formulario enviado correctamente';
        }else{
            echo ' 
                <label for="nombre">Nombre: </label> 
                <input type="text" name="nombre" id="nombre" value="' . $valorNombre . '"> '.$nombre.'<br><br>

                <label for="apellidos">Apellidos: </label>
                <input type="text" name="apellidos" id="apellidos" value="' . $valorApellidos . '">'.$apellidos.'<br><br>

                <label for="usuario">Nombre de Usuario: </label>
                <input type="text" name="usuario" id="usuario" value="' . $valorUsuario . '">'.$usuario.'<br><br>

                <label for="contra1">Contraseña:</label>
                <input type="text" name="contra1" id="contra1" value="' . $valorContra1 . '">'.$contra1.'<br><br>

                <label for="contra2">Repetir contraseña: </label>
                <input type="text" name="contra2" id="contra2"> '.$contra2.'<br><br>

                <label for="mail">Correo electrónico: </label>
                <input type="text" name="mail" id="mail" value="' . $valorMail . '">' . $mail . '<br><br>

                <label for="fecha">Fecha de nacimiento: </label>
                <input type="date" name="fecha"><br><br>

                <input type="radio" name="sexo" checked>Hombre</input>
                <input type="radio" name="sexo">Mujer</input><br><br>

                <input type="checkbox" name="condiciones" checked>Acepto las condiciones</input>' . $condiciones . ' <br><br>

                <input type="checkbox" name="publi">Acepto el envío de publicidad</input><br><br>

                <input type="submit" value="Enviar" name="boton"></input><br><br><br>

        </form>
        ';
            
        }
?>



<?php
    include("footer.inc.php");

?>

 