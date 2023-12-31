<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/styles.css">
    <link rel="stylesheet" href="./estilos.css">
    <title>DOM</title>
</head>

<body>
    <header>
        <?php
        include("../../../html/header.html");
        ?>
    </header>

    <main>
        <h2>FICHERO XML TRANSFORMADO</h2>


        <table>
            <tr>
                <th>Alumno</th>
                <th>Nota 1</th>
                <th>Nota 2</th>
                <th>Nota3</th>
                <th>Editar</th>
            </tr>


            <?php


            //LEEMOS XML con el DOM
            $dom = new DOMDocument();     //Aunque el xml ya esté creado tenemos que declarar la variable (estamos en otro documento)
            $dom->load('./notas.xml');

            $contador = 1;
            foreach ($dom->childNodes as $notas) {
                foreach ($notas->childNodes as $alumno) {
                    echo '<tr>';
                    if ($alumno->nodeType == 1) {
                        $nodo = $alumno->firstChild;
                        do {
                            if ($nodo->nodeType == 1) {
                                echo '<td>';
                                echo $nodo->nodeValue;
                                echo '</td>';
                            }
                        } while ($nodo = $nodo->nextSibling);

                        echo '<td>';
                        echo '<form action="./modificaAlumno.php" method="get" enctype="multipart/form-data">';
                        echo '<label for="modificar"><input type="submit" value="Editar" name="modificar"></label>';
                        echo '<input type="hidden" name="alumno" value="' . $contador . '">';
                        echo '</form>';
                        echo '</td>';

                    }
                    echo '</tr>';
                    $contador++;
                }
            }

            ?>
        </table>
    </main>

    <footer>
        <?php
        include("../../../html/footer.html");
        ?>



    </footer>

</body>

</html>