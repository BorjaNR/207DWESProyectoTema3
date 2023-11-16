<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
    <head>
        <title>ejercicio15</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h3>15. Crear e inicializar un array con el sueldo percibido de lunes a domingo. Recorrer el array para calcular el sueldo percibido durante la
            semana. (Array asociativo con los nombres de los días de la semana).</h3>
        <?php
            /**
             * @author Borja Nuñez Refoyo
             * @version 1.0
             * @since 18/10/2023
             */
            $sumaSalario = 0;
            $aSueldoSemanal = [
                "Lunes" => 100,
                "Martes" => 120,
                "Miercoles" => 300,
                "Jueves" => 200,
                "Viernes" => 140,
                "Sabado" => 150,
                "Domingo" => 150
            ];

            echo ('Mediante foreach<br><br>');
            foreach ($aSueldoSemanal as $key => $value) {
                echo ("$key => $value <br>");
                $sumaSalario += $value;
            }

            echo ('<br>Mediante print_r <br><br>');
            print_r($aSueldoSemanal);

            echo ("<br><br>Suma de salario: $sumaSalario");
            ?>
        <footer>
            <a href="https://github.com/BorjaNR" target="blank">GitHub</a>
            <div>
                <a>2023-24 IES los Sauces. @Todos los derechos reservados. Borja Nuñez Refoyo</a>
            </div>
        </footer>
    </body>
</html>

