<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
    <head>
        <title>ejercicio23</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            h1{
                text-align: center;
            }
            fieldset{
                margin: auto;
                width: 500px;
                padding: 20px;
                text-align: center;
                border:solid black 1px;
                border-radius: 5px;
                background: #eff3ff;
            }
            footer{
                position: absolute;
                bottom: 0;
            }
            input{
                margin-bottom: 5px;
                width: 200px;
                height: 20px;
            }
            fieldset:nth-child(1) label{
                display: inline-block;
                width: 250px;  
            }
        </style>
    </head>
    <body>
        <h3>
            23. Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas
                recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente.
        </h3>
        <?php
        include('../core/231018libreriaValidacion.php');
        $entradaOK = true; //Valida el formulario
        $aRespuestas = []; //Contiene las respuestas
        $aErrores = []; //Contiene los errores
        if (isset($_REQUEST['enviar'])) {
            //Pongo limites a las preguntas y si la rellenan mal sale el error
            $aErrores = [
                "nombre" => validacionFormularios::comprobarAlfabetico($_REQUEST["nombre"], 50, 3, 1),
                "fecha_nacimiento" => validacionFormularios::validarFecha($_REQUEST["f_nacimiento"], '01/01/2200', '01/01/1900', 1),
                "altura" => validacionFormularios::comprobarFloat($_REQUEST["altura"], 2.5, 0.3, 1),
            ];
            //Recorro el array de errores
            foreach ($aErrores as $key => $value) {
                if ($value == !null) {
                    $entradaOK = false;
                }
            }
        } else {
            $entradaOK = false;
        }
        if ($entradaOK) {
            //Aqui pongo las respuestas
            $aRespuestas = [
                "nombre" => $_REQUEST["nombre"],
                "fecha_nacimiento" => $_REQUEST["f_nacimiento"],
                "altura" => $_REQUEST["altura"]
            ];

            echo "<h2>Respuestas:</h2>";
            //Recorro el array de respuestas
            foreach ($aRespuestas as $key => $value) {
                echo "$key => $value <br>";
            }
        } else {
            ?>
            <h1>Cuestionario</h1>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <fieldset>
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre">
                    <?php if (!empty($aErrores["nombre"])){ ?>
                        <span style="color: red;"><?php echo $aErrores["nombre"]; //Hago que me salga el error e rojo combinando php cpn html?></span>
                    <?php } ?>
                    <br><br>

                    <label for="f_nacimiento">Fecha Nacimiento(AAAA-mm-dd):</label>
                    <input type="text" id="f_nacimiento" name="f_nacimiento">
                    <?php if (!empty($aErrores["fecha_nacimiento"])){ ?>
                        <span style="color: red;"><?php echo $aErrores["fecha_nacimiento"]; ?></span>
                    <?php } ?>
                    <br><br>

                    <label for="altura">Altura(m):</label>
                    <input type="text" id="altura" name="altura">
                    <?php if (!empty($aErrores["altura"])){ ?>
                        <span style="color: red;"><?php echo $aErrores["altura"]; ?></span>
                    <?php } ?>
                    <br><br>

                    <input type="submit" value="Enviar" name="enviar">
                </fieldset>
            </form>
            <?php
        }
        ?>
        <footer>
            <a href="https://github.com/BorjaNR" target="blank">GitHub</a>
            <div>
                <a>2023-24 IES los Sauces. @Todos los derechos reservados. Borja Nuñez Refoyo</a>
            </div>
        </footer>
    </body>
</html>




