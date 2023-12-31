<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raul Ferrero Vicente</title>
    <link rel="stylesheet" href="css/styles.css">
</head>


<body>

    <header>
    <?php
        include("html/header.html");
    ?>
    </header>
    <main>
    <h2>Tema1</h2>
    <ul>
    <li><a href="./Temario/UD1.pdf">Tema1 (PDF)</a></li>
    <li><a href="/Tema1/phpinfo.php">PHP Info</a></li>
    <li><a href="/Tema1/Tutorial.pdf">Tutorial para crear servidor Linux</a></li>
    </ul>
    <h2>Tema2</h2>
    
    <ul>
    <li><a href="./Temario/UD2.pdf">Tema2 (PDF)</a></li>
    <li><a href="/Tema2/eligeidioma.php">Elige Idioma</a></li>
    <li><a href="/Tema2/Tarea3.php">Tarea 3-1</a></li>
    <li><a href="/Tema2/Tarea3-2.php?variable=456">Tarea 3-2</a></li>
    <li><a href="/Tema2/Tarea3-3.php?variable=2023/10/03">Tarea 3-3</a></li>
    <li><a href="/Tema2/Tarea3-4.php?raul=1982/09/24&manuel=1998/11/25">Tarea 3-4</a></li>
    </ul>
    <h2>Tema3</h2>
    <ul>
    <li><a href="./Temario/UD3.pdf">Tema3 (PDF)</a></li>
    </ul>
    <h4>Operadores y bucles</h4>
    <ul>
    <li><a href="/Tema3/piramide.php?altura=16">Piramide</a></li>
    <li><a href="/Tema3/rombo.php?altura=16">Rombo</a></li>
    <li><a href="/Tema3/rombohueco.php?altura=16">Rombo Hueco</a></li>
    <li><a href="/Tema3/monedas.php?precio=6.33&pago=10">Cambio de monedas</a></li>
    <li><a href="/Tema3/bisiestos.php?ano=1998">Año Bisiesto</a></li>
    </ul>
    <h4>Arrays básicos</h4>
    <ul>
    <li><a href="/Tema3/Tarea5Arrays.php?lado=4">Tarea Arrays</a></li>
    <li><a href="/Tema3/Tarea06.php">Tarea Equipos de Futbol</a></li>
    </ul>
    <h4>Funciones</h4>
    <ul>
    <li><a href="/Tema3/tarea07utilizarfunciones.php">Tarea Funciones</a></li>
    <li><a href="/Tema3/Euromillones/euromillones.php?var1=1&var2=18&var3=21&var4=24&var5=45&var6=48&especial1=3&especial2=4">Tarea Euromillolnes</a></li>
    </ul>
    <h4>Formularios</h4>
    <ul>
    <li><a href="/Tema3/Formularios/formulario.php">Formulario</a></li>
    <li><a href="/Tema3/Formularios/formularioarchivo.php">Formulario subir 2 archivos</a></li>
    <li><a href="/Tema3/Formularios/Tarea/tareaformulario.php">Tarea 08. Formulario</a></li>
    <li><a href="/Tema3/Formularios/Tarea09/Formulario09.php">Tarea 09. Formulario</a></li>
    </ul>
    <h4>Ficheros</h4>
    <ul>
    <li><a href="/Tema3/LeeryEscribir/seleccionar.php">Leer y escribir fichero de texto</a><br><a style="font-size: 13px; color: yellow; border-top: 1px dashed;" href="./vercontenido.php?contenido=/var/www/servidor/Tema3/Ficheros/ficheroPlano.php">Ver Codigo para ficheros de TXT Plano</a></li>
    <li><a href="/Tema3/Tarea10/notas.php">Notas en fichero CSV</a></li>
    <li><a style="font-size: 13px; color: yellow; border-top: 1px dashed;" href="./vercontenido.php?contenido=/var/www/servidor/Tema3/AprendiendoXML/index.php">Ver Codigo para ficheros XML</a></li>
    </ul>

    <h4>DOM</h4>
    <ul>
    <li><a href="/Tema3/DOM/dom.php">Crear un Fichero xml con el DOM</a></li>
    <li><a href="/Tema3/DOM/Tarea11/TransformaFichero.php">Conversión CSV Notas a XML</a></li>
    </ul>

    <h4>PDF</h4>
    <ul>
    <li><a href="/Tema3/PDF/Tarea12/HacerPdf.php">Crear PDF, Reports</a></li>
    </ul>

    <h2>Tema4</h2>
    <h4>Accediendo a Bases de Datos</h4>
    <ul>
    <li><a href="/BBDD/29N.php">Crear Conexion, hacer consulta preparada.</a></li>
    <li><a href="/BBDD/consultar.php">Tipos de Consultas</a></li>
    <li><a href="/BBDD/conexion.php">Conexion diferente con Update</a></li>
    <li><a href="/BBDD/conexionbanco.php">Ejecucion de Script</a></li>
    <li><a href="/BBDD/Tarea13/index.php">Tarea 13 BDD. MYSQL</a></li>
    <li><a href="/BBDD/Tarea13_PDO_Postgres/index.php">Tarea 13 con PDO Postgres</a></li>
    </ul>
    <h2>Tema5</h2>
    <ul>
    <li><a href="./Tema5/unix/paginadeTodos.php">Autenticación por Apache (htacces)</a></li>
    <li><a href="./Tema5/authserver/index.php">Autenticación por Servidor</a></li>
    <li><a href="./Tema5/Tarea14/index.php">Tarea 14. CRUD MYSQL con autenticación por servidor</a></li>
    <li><a href="./Tema5/sesiones/home.php">Sesiones</a></li>
    </ul>

    <h2>PROYECTO TIENDA</h2>
    <ul>
    <li><a href="./ProyectoTarea17/index.php">Tarea17. Navidades.</a></li>
    </ul>

    
    </main>
    <footer>
    <?php
        include("html/footer.html");
    ?>
    </footer>
</body>
</html>
