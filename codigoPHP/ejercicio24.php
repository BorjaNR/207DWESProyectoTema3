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
            
            //Creo la fecha del dia con date para que me creee la fecha actual en formato string
            $fechaActual = date('d-m-Y');
            //Cargar valores por defecto en los campos del formulario
            //Para cada campo del formulario: Validar entrada y actuar en consecuencia
            //preguntar a heraclio si es mejor el request o utilizar el post en este caso
            if (isset($_REQUEST['enviar'])) {
                //Validar entrada
                $aErrores = [
                    'codDepartamento' => validacionFormularios::comprobarAlfabetico($_REQUEST['codDepartamento'],3,3,1),//Valido que sea alfabetico con un tamaño maximo de 3 y minimo de 3 y que sea obligatorio
                    'descDepartamento' => validacionFormularios::comprobarAlfaNumerico($_REQUEST['descDepartamento'], 255, 1, 1),//Valido que sea alfanumerico con un tamaño maximo de 255 y minimo de 1 y que sea obligatorio
                    'fechaCreacion' => validacionFormularios::validarFecha($_REQUEST['fechaCreacion'], "01/01/2200", $fechaActual, 1),//Valido que la fecha maxima sea en 2200 y la minima la del dia en el que se realiza el formulario
                    'volumen' => validacionFormularios::comprobarFloat($_REQUEST['volumen'], PHP_FLOAT_MAX, PHP_FLOAT_MIN, 1)//Valido que sea un numero real y obligatorio
                ];
                //Recorremos los errores para ver si hay alguno
                foreach ($aErrores as $campo => $error) {
                    if (!is_null($error)){
                         $entradaOK = false;
                        //Limpiar campos malos
                        $_REQUEST[$campo] = '';
                    }
                }
            } else {
                $entradaOK = false;
            }

            //Tratamiento del formulario
            if ($entradaOK) {
                //Cargar la variable $aRespuestas y tratamiento de datos OK
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
            } else {
                ?>
                <form class="w-40 position-absolute top-50 start-50 translate-middle" name="fomrulario" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="mb-3">
                        <label class="form-label">Codigo de Departamento</label>
                        <input type="text" class="form-control" name="codDepartamento">
                        <?php echo (!empty($aErrores["codDepartamento"]) ? '<span style="color: red;">' . $aErrores["codDepartamento"] . '</span>' : '');//Esto es para mostrar el mensaje de error en color rojo ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descripcion de Departamento</label>
                        <textarea class="form-control" rows="3" name="descDepartamento"></textarea>
                        <?php echo (!empty($aErrores["descDepartamento"]) ? '<span style="color: red;">' . $aErrores["descDepartamento"] . '</span>' : '');//Esto es para mostrar el mensaje de error en color rojo ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Fecha de creacion</label>
                        <input type="text" class="form-control" name="fechaCreacion">
                        <?php echo (!empty($aErrores["fechaCreacion"]) ? '<span style="color: red;">' . $aErrores["fechaCreacion"] . '</span>' : '');//Esto es para mostrar el mensaje de error en color rojo ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Volumen</label>
                        <input type="text" class="form-control" name="volumen">
                        <?php echo (!empty($aErrores["volumen"]) ? '<span style="color: red;">' . $aErrores["volumen"] . '</span>' : '');//Esto es para mostrar el mensaje de error en color rojo ?>
                    </div>
                    <input class="btn btn-primary" name="enviar" type="submit" value="Enviar">
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


