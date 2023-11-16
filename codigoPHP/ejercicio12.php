<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
    <head>
        <title>ejercicio12</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h3>12. Mostrar el contenido de las variables superglobales (utilizando print_r() y foreach())</h3>
        <?php
            /**
            * @author Borja Nuñez Refoyo
            * @version 1.0
            * @since 17/10/2023
            */
            //Visualizar los contenidos de las variables globales con print_r
            echo "<h4>Mostrar variables globales con print_r</h4>";
            echo "Contenido de la variable \$_SERVER: <br>";
            print_r($_SERVER);
            echo "<br><br>";
            echo "Contenido de la variable \$_REQUST: <br>";
            print_r($_REQUEST);
            echo "<br><br>";
            echo "Contenido de la variable \$_GET: <br>";
            print_r($_GET);
            echo "<br><br>";
            echo "Contenido de la variable \$_POST: <br>";
            print_r($_POST);
            echo "<br><br>";
            echo "Contenido de la variable \$_COOKIE: <br>";
            print_r($_COOKIE);
            echo "<br><br>";
            echo "Contenido de la variable \$_ENV: <br>";
            print_r($_ENV);
            echo "<br><br>";
            echo "Contenido de la variable \$_FILES: <br>";
            print_r($_FILES);
            echo "<br><br>";
            if (isset($_SESSION)) {
                echo('Contenido de la variable \$_SESSION: <br>');
            print_r($_SESSION);
            } else {
                echo('La variable $_SESSION no esta definida');
            }
            echo "<br><br>";
            echo "Contenido de la variable \$GLOBALS: <br>";
            print_r($GLOBALS);
            echo "<br><br>";
            
            //Mostrar el contenido de las variables utilizando foreach
            echo "<h2>Contenido de las variables superglobales utilizando foreach()</h2>";
            echo "<h4>Contenido de la variable \$_SERVER:</h4>";
            echo "<ul>";
            foreach ($_SERVER as $key => $value) {
                echo "<li><strong>{$key}:</strong> {$value}</li>";
            }
            echo "</ul>";

            echo "<h4>Contenido de la variable \$_GET:</h4>";
            echo "<ul>";
            foreach ($_GET as $key => $value) {
                echo "<li><strong>{$key}:</strong> {$value}</li>";
            }
            echo "</ul>";

            echo "<h4>Contenido de la variable \$_POST:</h4>";
            echo "<ul>";
            foreach ($_POST as $key => $value) {
                echo "<li><strong>{$key}:</strong> {$value}</li>";
            }
            echo "</ul>";

            echo "<h4>Contenido de la variable \$_REQUEST:</h4>";
            echo "<ul>";
            foreach ($_REQUEST as $key => $value) {
                echo "<li><strong>{$key}:</strong> {$value}</li>";
            }
            echo "</ul>";

            echo "<h4>Contenido de la variable \$_SESSION:</h4>";
            echo "<ul>";
            session_start();
            foreach ($_SESSION as $key => $value) {
                echo "<li><strong>{$key}:</strong> {$value}</li>";
            }
            echo "</ul>";

            echo "<h4>Contenido de la variable \$_COOKIE:</h4>";
            echo "<ul>";
            foreach ($_COOKIE as $key => $value) {
                echo "<li><strong>{$key}:</strong> {$value}</li>";
            }
            echo "</ul>";

            echo "<h4>Contenido de la variable \$_FILES:</h4>";
            echo "<ul>";
            foreach ($_FILES as $key => $value) {
                echo "<li><strong>{$key}:</strong> {$value}</li>";
            }
            echo "</ul>";

            echo "<h4>Contenido de la variable \$_ENV:</h4>";
            echo "<ul>";
            foreach ($_ENV as $key => $value) {
                echo "<li><strong>{$key}:</strong> {$value}</li>";
            }
            echo "</ul>";
        ?>
        <footer>
            <a href="../../index.html">Inicio</a>
            <a href="https://github.com/BorjaNR" target="blank">GitHub</a>
            <div>
                <a>2023-24 IES los Sauces. @Todos los derechos reservados. Borja Nuñez Refoyo</a>
            </div>
        </footer>
    </body>
</html>

