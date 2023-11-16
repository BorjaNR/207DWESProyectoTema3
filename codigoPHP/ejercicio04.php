<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
    <head>
        <title>ejercicio04</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h3>4. Mostrar en tu página index la fecha y hora actual en Oporto formateada en portugués.</h3>
    <?php
        // Crear una instancia de DateTime con la fecha y hora actual en portugal
        $fechaActual = new DateTime("Europe/Lisbon");
        // Formatear la fecha y hora actual en portugués
        $formato = 'l, d \d\e F \d\e Y, H:i:S';
        $fechaLisboa = $fechaActual->format($formato);
        
        echo'La hora actual en Oporto es: '.$fechaLisboa;
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

