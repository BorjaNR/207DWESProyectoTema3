<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
    <head>
        <title>ejercicio08</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h3>8. Mostrar la dirección IP del equipo desde el que estás accediendo.</h3>
    <?php
        $ip = $_SERVER['REMOTE_ADDR'];
        echo "La dirección IP es: " . $ip;
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

