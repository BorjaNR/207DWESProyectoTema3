<!DOCTYPE html>
<html>
    <head>
        <title>ejercicio24</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../webroot/css/main.css"/>
    </head>
    <body>
        <header class="text-center bg-secondary" style="height: 125px">
            <h3>24. Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas recogidas; en el caso de que 
                alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente, pero las respuestas que habíamos tecleado correctamente aparecerán en el 
                formulario y no tendremos que volver a teclearlas.</h3>
        </header>
        <main style="margin-bottom: 75px">
            <?php
            /**
             * @author Borja Nuñez Refoyo
             * @version 2.0 
             * @since 18/03/2024
             */
            //Incluimos la libreria de validación de formularios
            require_once '../core/231018libreriaValidacion.php';

            //Creamos e inicializamos las variables imprescindibles para este ejercicio
            $entradaOK = false; //Variable que nos indica que todo va bien
            //Array donde recogemos los mensajes de error
            $aErrores = [
                'codDepartamento' => '',
                'descDepartamento' => '',
                'fechaCreacion' => '',
                'volumen' => ''
            ];
            //Array donde recogeremos la respuestas correctas (si $entradaOK)
            $aRespuestas = [
                'codDepartamento' => '',
                'descDepartamento' => '',
                'fechaCreacion' => '',
                'volumen' => ''
            ];
            
            //Cargar valores por defecto en los campos del formulario
            //Para cada campo del formulario: Validar entrada y actuar en consecuencia
            if (isset($_REQUEST['enviar'])){
                $aRespuestas = [
                    'codDepartamento' => $_REQUEST['codDepartamento'],
                    'descDepartamento' => $_REQUEST['descDepartamento'],
                    'fechaCreacion' => $_REQUEST['fechaCreacion'],
                    'volumen' => $_REQUEST['volumen']
                ];
                
                //Recorremos las respuestas y las mostramos
                foreach ($aRespuestas as $campo => $respuesta) {
                    echo "$campo=>$respuesta";
                }
            }else{
                
            }
            
            //Tratamiento del formulario
            if ($entradaOK){
                //Cargar la variable $aRespuestas y tratamiento de datos OK
                
            }else{
            ?>
            <form class="w-35 position-absolute top-50 start-50 translate-middle" name="fomrulario" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="mb-3">
                    <label class="form-label">Codigo de Departamento</label>
                    <input type="text" class="form-control" name="codDepartamento">
                </div>
                <div class="mb-3">
                    <label class="form-label">Descripcion de Departamento</label>
                    <textarea class="form-control" rows="3" name="descDepartamento"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Fecha de creacion</label>
                    <input type="text" class="form-control" name="fechaCreacion">
                </div>
                <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
            </form>
            <?php
            }
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


