<?php
include("./validaciones.php");

if (volver()) {
    header('Location: ./notas.php');

} elseif (guardar()) {


    $tmp = tempnam('./', 'tem.csv'); //Creamos fichero temporal.  (ruta, nombre)
    chmod($tmp, 0777); // damos permisos al fichero temporal

    if ((!$fp = fopen('notas.csv', 'r')) || (!$ft = fopen($tmp, 'w'))) //abrimos original en lectura y temporal en escritura
        echo 'Ha habido un problema al abrir el fichero.';
    else { //Ejecutamos codigo
    

        $texto = [$_REQUEST['alumno'], $_REQUEST['nota1'], $_REQUEST['nota2'], $_REQUEST['nota3']];


        while ($leido = fgetcsv($fp, filesize("notas.csv"), ";")) { //Mientras leemos por lineas "todo" el archivo


            if ($leido[0] != $_REQUEST['alumno']) {

                fputcsv($ft, $leido, ";"); //Escribimos en el temporal una linea del original
            } elseif ($leido[0] = $_REQUEST['alumno']) {
                fputcsv($ft, $texto, ";"); //Escribimos en el temporal los nuevos datos
            }



        }
        fclose($fp); //Cerramos ambos ficheros
        fclose($ft);
        unlink('notas.csv'); //Borra el fichero
        rename($tmp, "notas.csv"); //Renombra el fichero
    }


}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="./styles.css">
    <title>Modificar Notas</title>
</head>

<body>
    <header>
        <?php
        include("../../html/header.html");

        ?>
    </header>


    <main>

        <form action="" method="get" name="formulario1" enctype="multipart/form-data">

            <label for="alumno">Nombre:<input type="text" name="alumno" readonly value="<?php
            echo $_REQUEST["alumno"];
            ?>"></input></label> <br>
            <label for="nota1">Nota 1:<input type="number" name="nota1" value="<?php
            echo $_REQUEST["nota1"];
            ?>"></input></label> <br>
            <label for="nota2">Nota 2:<input type="number" name="nota2" value="<?php
            echo $_REQUEST["nota2"];
            ?>"></input></label> <br>
            <label for="nota3">Nota 3:<input type="number" name="nota3" value="<?php
            echo $_REQUEST["nota3"];
            ?>"></input></label> <br>
            <label for="leer"><input type="submit" value="Volver" name="volver"></label>
            <label for="escribir"><input type="submit" value="Guardar" name="guardar"></label>

        </form>

    </main>

    <footer>
        <?php
        include("../../html/footer.html");
        ?>



    </footer>

</body>

</html>