<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
    <head>
        <title>ejercicio03</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h3>3. Mostrar en tu página index la fecha y hora actual formateada en castellano.</h3>
    <?php
        $fechaActual = new DateTime();
        
        $formato = 'Y-m-d H:i:s';
        $fechaFormateada = $fechaActual->format($formato);
        
        echo 'Fecha-Hora actual: '.$fechaFormateada;
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

