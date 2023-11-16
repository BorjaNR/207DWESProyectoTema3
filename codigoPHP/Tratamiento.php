<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
    <head>
        <title>Tratamiento</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                echo "Nombre: " . $_POST["nombre"] . "<br>";
                echo "Edad: " . $_POST["edad"] . "<br>";
                echo "Email: " . $_POST["email"] . "<br>";
            }
        ?>
    </body>
</html>
