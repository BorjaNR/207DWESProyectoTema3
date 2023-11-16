<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
    <head>
        <title>ejercicio17</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h3>17. Inicializar un array (bidimensional con dos índices numéricos) donde almacenamos el nombre de las personas que tienen reservado el asiento en un teatro de 20 filas y 
            15 asientos por fila. (Inicializamos el array ocupando únicamente 5 asientos). Recorrer el array con distintas técnicas (foreach(), while(), for()) para mostrar los asientos 
            ocupados en cada fila y las personas que lo ocupan.</h3>
        <?php
        /**
         * @author Borja Nuñez Refoyo
         * @version 1.0
         * @since 18/10/2023
         */
        // Inicializamos el array bidimensional para representar el teatro y los asientos reservados
        $ateatro = [];
        for ($fila = 1; $fila < 21; $fila++) {
            for ($asiento = 1; $asiento < 16; $asiento++) {
                $ateatro[$fila][$asiento] = '';
            }
        }
        $ateatro[2][3] = "María del mar";
        $ateatro[5][8] = "Luis";
        $ateatro[10][12] = "Juliana";
        $ateatro[15][1] = "Manolo";
        $ateatro[18][14] = "Sandra";

        // Recorrido con foreach
        echo "Recorrido con foreach:<br>";
        foreach ($ateatro as $fila => $asientos) {
            foreach ($asientos as $asiento => $persona) {
                echo "Fila $fila, Asiento $asiento - $persona<br>";
            }
        }
        // Recorrido con for
        echo "<br>Recorrido con for:<br>";
        for ($fila = 1; $fila < 21; $fila++) {
            for ($asiento = 1; $asiento < 16; $asiento++) {
                if (isset($ateatro[$fila][$asiento])) {
                    echo "Fila $fila, Asiento $asiento - " . $ateatro[$fila][$asiento] . "<br>";
                }
            }
        }
        //Recorrido con while
        echo "<br>Recorrido con while:<br>";
        while (key($ateatro) !== null) {
            $fila = key($ateatro);
            next($ateatro); // Avanza el puntero interno
            while (key($ateatro) !== null) {
                $asiento = key($ateatro);
                $nombre = current($ateatro);
                echo ("$fila, Reservado por: $nombre\n");

                next($ateatro); // Avanza el puntero interno
            }
        }
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
