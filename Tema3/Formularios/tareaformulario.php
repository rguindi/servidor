<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="./estilosformulario.css">
    <title>Formulario</title>
</head>

<body>
    <header>
        <?php
        include("../../html/header.html");
        ?>
    </header>

<main>

<form action="tareasubir.php" method="post" enctype="multipart/form-data">
   <label for="alfabetico">Alfabético <input type="text" name="alfabetico"></label> <br>
   <label for="alfabeticoopcional">Alfabético Opcional <input type="text" name="alfabeticoopcional"></label> <br>
   <label for="alfanumerico">Alfanumérico <input type="text" name="alfanumerico"></label> <br>
   <label for="alfanumericoopcional">Alfanumérico Opcional <input type="text" name="alfanumericoopcional"></label> <br>
   <label for="numerico">Numérico <input type="number" name="numerico"></label> <br>
   <label for="numericoopcional">Numérico Opcional <input type="number" name="numerico"></label> <br>
   <label for="fecha">Fecha <input type="date" name="fecha"></label> <br>
   <label for="fechaopcional">Fecha Opcional <input type="date" name="fechaopcional"></label> <br>
   <p>Radio Obligatorio</p>
   <label for="opcion2">Opcion 1 <input type="radio" name="opcion1"></label> 
   <label for="opcion2">Opcion 2 <input type="radio" name="opcion2"></label>
   <label for="opcion3">Opcion 3 <input type="radio" name="opcion3"></label> <br>
   <label for="select"> Select
   <select name="select" id="select">
    <option value="">Selecciona una opcion</option>
    <option value="Opcion 1">Opcion 1</option>
    <option value="Opcion 2">Opcion 2</option>
    <option value="Opcion 3">Opcion 3</option>
   </select></label> <br>
  <p>Check</p>
    <?php   
        for ($i=1; $i < 6; $i++) { 
            echo '<label for="check'.$i.'"><input type="checkbox" name="check'.$i.'"> Check'.$i.'</label> <br>';
        }
    ?>
   <label for="telefono">Numero de Telefono <input type="number" name="telefono"></label> <br>

 


   

    <input type="submit" value="Enviar">

</form>


</main>

<footer>
    <?php
    include("../../html/footer.html");
    ?>



</footer>

</body>

</html>