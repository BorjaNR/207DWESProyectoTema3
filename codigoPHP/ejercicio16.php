<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
    <head>
        <title>ejercicio16</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h3>16. Recorrer el array anterior utilizando funciones para obtener el mismo resultado.</h3>
        <?php
        /**
         * @author Borja Nuñez Refoyo
         * @version 1.0
         * @since 18/10/2023
         */
        $aSueldoSemanal = [
            "Lunes" => 100,
            "Martes" => 120,
            "Miercoles" => 300,
            "Jueves" => 200,
            "Viernes" => 140,
            "Sabado" => 150,
            "Domingo" => 150
        ];
        
        $sumaSalario=0;

// Inicializa el puntero interno al comienzo del array
        reset($aSueldoSemanal);

        while (key($aSueldoSemanal) !== null) {
            $dia = key($aSueldoSemanal);
            $sueldo = current($aSueldoSemanal);
            $sumaSalario+=$sueldo;
            echo "$dia => $sueldo.\n";

            // Avanza el puntero interno una posición
            next($aSueldoSemanal);
        }
        echo("<br>Suma semanal: ".$sumaSalario);
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
