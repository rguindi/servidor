<?php
require ('./zonaSegura/conexionBD.php');
require ('./funcionesBD.php');
if(isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])){
    if(!isAdmin() && !isUser()){
        header('Location: ./index.php');
        exit;    
    }
}else{
        header('Location: ./login.php');
        exit;    
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos.css">
    <title>Añadir Registro</title>
</head>

<body>
    <?php
    include("./funcionesFormulario.php");
    $errores = array();
    
    //Si ha ido todo bienb
    if (enviado() && validaFormulario($errores)) {
        modificaRegistro();
        header("Location: ./index.php");


    } else {




        ?>



        <main>
            <!-- FORMULARIO -->

            <form action="" method="get">

                <label for="nombre">Nombre <input type="text" name="nombre" id="nombre" value=<?php recuerda('nombre') ?>></label> <br>
                <?php printerror($errores, 'nombre'); 
                      printerror($errores, 'validarNombre');   ?>
                <label for="posicion">Posición <input type="text" name="posicion" id="posicion" value=<?php recuerda('posicion') ?>></label> <br>
                <?php printerror($errores, 'posicion'); 
                      printerror($errores, 'validarPosicion'); ?>
                <label for="DNI">DNI <input type="text" name="DNI" id="DNI" value=<?php recuerdaDNI('DNI') ?> disabled></label> <br>
                <?php printerror($errores, 'DNI');
                      printerror($errores, 'DNIMAL'); ?>
                      <input type="hidden" name="DNI" value=<?php recuerda('DNI') ?>>       <!--Este campo es porque el campo DNI esta deshabilitado y no se envia al formulario-->
                <label for="fecha">Fecha de Nacimiento<input type="date" name="fecha" id="fecha" placeholder="DD/MM/AAAA" value=<?php recuerda('fecha') ?>></label> <br>
                <?php printerror($errores, 'fecha'); 
                      printerror($errores, 'formatoFecha');
                      ?>
                <label for="sueldo">Sueldo <input type="text" name="sueldo" id="sueldo" value=<?php recuerda('sueldo') ?>></label> <br>
                <?php printerror($errores, 'sueldo'); 
                      printerror($errores, 'formatoSueldo');
                      ?>
                <label for="dorsal">Dorsal <input type="number" name="dorsal" id="dorsal" value=<?php recuerda('dorsal') ?>></label> <br>
                <?php printerror($errores, 'dorsal'); 
                      printerror($errores, 'formatoDorsal'); ?>

                <input type="submit" value="Enviar" name="Enviar">
                <input type="submit" value="Borrar" name="Borrar">


            </form>

            <?php
    } //Cerramos el else
    ?>
    </main>


</body>

</html>