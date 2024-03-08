<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
    <head>
        <title>ejercicio02</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body {
                box-sizing: border-box;
                font-family: Verdana;
            }

            header {
                background-color: #3399ff;
                padding: 20px;
                width: 100%;
                font-size: 1rem;
                color: white;
                margin-bottom: 50px
            }
            footer{
                position: absolute;
                bottom: 0;
                background-color: #3399ff;
                color: white;
                width: 100%;height:50px; 
                padding: 20px;
                text-align: center;
                font-size: 1.2rem;
            }
            footer a{
                color: white;
                text-decoration: none;
                margin: 10px;
            }
        </style>
    </head>
    <body>
        <header>
            <h3>2. Inicializar y mostrar una variable heredoc.</h3>
        </header>
        <?php
            /**
                * @author Borja Nuñez Refoyo
                * @version 1.2 
                * @since 11/10/2023
            */
            $texto = <<< EOT
             Mi nombre es Borja.
             Estoy estudiando DAW2.
             EOT;

            echo $texto;
        ?>
        <footer>
                <a title="Inicio" href="../indexProyectoTema3.html"><img src="../webroot/images/casa.png" width="40" height="40" alt="Inicio"/></a>
                <a title="GitHub" href="https://github.com/BorjaNR" target="blank"><img src="../webroot/images/git.png" width="40" height="40" alt="GitHub"/></a>
                <div>
                    <a>2023-24 IES los Sauces. @Todos los derechos reservados. Borja Nuñez Refoyo</a>
                </div>
        </footer>
    </body>
</html>

