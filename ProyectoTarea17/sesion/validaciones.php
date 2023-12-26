<?php
require_once '../BBDD/funciones.php';
function entrar()
{
    if (isset($_REQUEST['Entrar']))
        return true;
    else
        return false;
}

function textoVacio($name)
{
    if (empty($_REQUEST[$name]))
        return true;
    else
        return false;
}

function registrar()
{
    if (isset($_REQUEST['registro']))
        return true;
    return false;
}
function borrar()
{
    if (!isset($_REQUEST['Borrar']))
        return true;
    return false;
}

function recuerda($name)
{
    if (registrar() && !empty($_REQUEST[$name]))
        echo $_REQUEST[$name];
    if (isset($_REQUEST['Borrar']))
        echo '';
}

function validarPass($pass)
{
    $exp = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/'; //mínimo 8 caracteres, al menos una mayúscula, al menos una minúscula y al menos un número.
    if (preg_match($exp, $pass))
        return true;
    return false;

}

function repetirPass($pass, $repitepass)
{
    if ($_REQUEST['pass'] === $_REQUEST['repitepass'])
        return true;
    return false;

}



function validaFormulario(&$errores)
{

    if (textoVacio("user")) $errores['user'] = "El usuario no puede estar vacío.";
    if (!textoVacio("user")&& existeUser($_REQUEST['user'])) $errores['existeuser'] = "Este usuario ya existe. Elija otro nombre de usuario";
    if (textoVacio("pass")) $errores['pass'] = "La contraseña no puede estar vacía.";
    if (!textoVacio("pass")&& !repetirPass($_REQUEST['pass'], $_REQUEST['repitepass'])) $errores['coincidepass'] = "Las contraseñas deben coincidir.";
    if (!textoVacio("pass")&& !validarPass($_REQUEST['pass']))$errores['validapass'] = "La contraseñas debe tener mínimo 8 caracteres, al menos una mayúscula, al menos una minúscula y al menos un número.";
    if (textoVacio("repitepass")) $errores['repitepass'] = "Debe repetir la contraseña.";
    if (textoVacio("email"))$errores['email'] = "El email no puede estar vacío.";
    if (textoVacio("fecha"))$errores['fecha'] = "La fecha no puede estar vacía.";

    if (count($errores) == 0)
        return true;
    return false;
}

function errores($errores, $name)
{
    if (isset($errores[$name]))
        echo $errores[$name];


}
?>