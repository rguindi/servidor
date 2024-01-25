<?php
//REQUIRIMOS EL CONFIG
require_once './config/config.php';
session_start();

//COMPROBAMOS SI EXISTE LA BASE DE DATOS Y SI NO EXISTE LA CREAMOS
if(!existeBD()){
    echo 'No existe la base de datos, el usuario, o la IP. <br>
    Comprueba los parámetros en conexión.php, carga el script con un usuario existente, y luego podrás dejar el usuario y pass actual.<br>Otorga permisos a la carpeta BBD/img/productos para poder subir imagenes. <br>
    Pulsa para cargar el script. <br>';
    echo '<form action="" method="get"><input name = "crear" type="submit" value="Crear la Base de Datos">  </form>';
    if(isset($_REQUEST['crear'])){
    
    cargarScript();
    }
    exit;
}
    

if (isset($_REQUEST['login'])){
    $_SESSION['controller'] = CON. 'loginController.php';
    $_SESSION['view'] = VIEW.'login.php';
}
if (isset($_REQUEST['miPerfil'])){
    $_SESSION['controller'] = CON. 'perfilController.php';
    $_SESSION['view'] = VIEW.'miPerfil.php';
}
if (isset($_REQUEST['home'])){
    unset($_SESSION['controller']);
    $_SESSION['view'] = VIEW.'home.php';
}
if (isset($_REQUEST['logout'])){
    session_destroy();
    header("Location: ./");
}







if(isset($_SESSION['controller'])) require_once $_SESSION['controller'];  //si existe el controlador lo cargamos
require_once './views/layout.php';
?>