<!DOCTYPE html>
<html>
    <head>
        <title>ejercicio02</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../webroot/css/main.css"/>
    </head>
    <body>
        <header class="text-center bg-secondary text-white" style="height: 75px">
            <h3>2. Inicializar y mostrar una variable heredoc.</h3>
        </header>
        <main style="margin-bottom: 75px" class="fs-4">
            <?php
            /**
             * @author Borja Nuñez Refoyo
             * @version 2.0
             * @since 07/03/2024
             */
            $texto = <<< EOT
             Mi nombre es Borja.
             Esto va a salir todo en una linea.<br>
             EOT;

            $texto2 = <<< EOT
             Mi nombre es Borja.<br>
             Esto va a salir todo en varias lineas.<br>
             EOT;
            
            $texto3 = <<< EOT
             Mi nombre es Borja.'\n'
             Esto va a salir todo en varias lineas.
             EOT;
            $prueba = "palabra \n palabra2 \n palabra3";
            echo $texto;
            echo $texto2;
            echo $prueba;
            ?>
        </main>
        <footer class="text-center bg-secondary fixed-bottom py-3">
            <div class="container">
                <div class="row">
                    <div class="col text-center text-white">
                        <p>&copy;2023-24 IES los Sauces. Todos los derechos reservados. <a href="../../index.html" style="color: white; text-decoration: none">Borja Nuñez Refoyo</a></p>
                    </div>
                    <div class="col text-end">
                        <a title="Inicio" href="../indexProyectoTema3.html"><img src="../webroot/images/casa.png" width="40" height="40" alt="Inicio"/></a>
                        <a title="GitHub" href="https://github.com/BorjaNR/207DWESProyectoTema3" target="blank"><img src="../webroot/images/git.png" width="40" height="40" alt="GitHub"/></a>
                    </div>
                </div>
            </div>
        </footer>
        <script src="./webroot/js/mainjs.js" ></script>
    </body>
</html>

