<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
    <head>
        <title>ejercicio21</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h3>21. Construir un formulario para recoger un cuestionario realizado a una persona y enviarlo a una página Tratamiento.php para que muestre las preguntas y las respuestas recogidas.</h3>
        <form action="Tratamiento.php" method="post">
            <fieldset>
                <label for="nombre">Nombre:</label><br>
                <input type="text" id="nombre" name="nombre"><br><br>

                <label for="f_nacimiento">Fecha Nacimiento(AAAA-mm-dd):</label>
                <input type="text" id="f_nacimiento" name="f_nacimiento"><br><br>

                <label for="altura">Altura(m):</label>
                <input type="text" id="altura" name="altura"><br><br>

                <input type="reset" value="Borrar">
                <input type="submit" value="Enviar">
            </fieldset>
        </form>
        <?php

        ?>
    </body>
</html>