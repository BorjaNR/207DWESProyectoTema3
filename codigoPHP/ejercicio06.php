<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
    <head>
        <title>ejercicio01</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h3>6. Operar con fechas: calcular la fecha y el día de la semana de dentro de 60 días</h3>
    <?php
        //Obtener la fecha actual
        $fechaActual = new DateTime();
        $fechaActual->modify('+60 days');
        $fechaEn60Dias = $fechaActual->format('d-m-Y');
        $diaEn60Dias = $fechaActual->format('l');
        echo 'La fecha en 60 dias sera: '.$fechaEn60Dias."</br>";
        echo 'El dia que sera en 60 dias es: '.$diaEn60Dias;
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

