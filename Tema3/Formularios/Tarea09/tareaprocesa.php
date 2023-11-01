<?php

function enviado (){
    if(!empty ($_REQUEST ['Enviar'])) return true;
    return false;
}
function textoVacio ($campodetexto){
    if (empty ($_REQUEST [$campodetexto])) return true;
    return false;
}

function printerror($errores, $valor){
  if (isset ($errores[$valor]))
    echo "<p class = error>".$errores[$valor]."</p>";

}

function recuerda($campo){
    if (!empty ($_REQUEST[$campo])) {
    echo "'$_REQUEST[$campo]'";
}else if (isset ($_REQUEST['Borrar']))
echo '';
}

function validarNombre ($nombre) {
$exp = '/[a-zA-Z]{3}/';
if (preg_match ($exp, $nombre)) return true;
return false;

}



function validaFormulario (&$errores){
if (textoVacio ('nombre')) $errores ['nombre'] = 'El nombre no puede estar vacío.';
if (!validarNombre ($_REQUEST['nombre'])) $errores ['validarNombre'] = 'Mínimo 3 caracteres.';
if (textoVacio ('apellidos')) $errores ['apellidos'] = 'El apellidos no puede estar vacío.';
if (textoVacio ('pass')) $errores ['pass'] = 'Contraseña requerida.';
if (textoVacio ('repitepass')) $errores ['repitepass'] = 'Repetir contraseña requerido.';
if (textoVacio ('fecha')) $errores ['fecha'] = 'Debe de seleccionar una fecha.';
if (textoVacio ('DNI')) $errores ['DNI'] = 'El Numérico no puede estar vacío.';
if (textoVacio ('email')) $errores ['email'] = 'Indique su email.';
if (empty($_FILES['archivo']['name'])) $errores ['archivo'] = 'Seleccione una imagen.';

if (count($errores)==0) return true;
return false;

}

?>