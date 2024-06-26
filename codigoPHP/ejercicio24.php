<!DOCTYPE html>
<html>
    <head>
        <title>ejercicio24</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../webroot/css/main.css"/>
        <style>
            #fechaCreacion{
                background-color: #cccccc
            }
        </style>
    </head>
    <body>
        <header class="text-center bg-secondary text-white" style="height: 125px">
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
            $entradaOK = true; //Variable que nos indica que todo va bien
            //Array donde recogemos los mensajes de error
            $aErrores = [
                'codDepartamento' => '',
                'descDepartamento' => '',
                'volumen' => '',
                'bajaDepartamento' => ''
            ];
            //Array donde recogeremos la respuestas correctas (si $entradaOK)
            $aRespuestas = [
                'codDepartamento' => '',
                'descDepartamento' => '',
                'fechaCreacion' => '',
                'volumen' => '',
                'bajaDepartamento' => ''
            ];
            $_REQUEST['fechaCreacion'] = date('Y-m-d'); //Inicializamos la fecha actual ya que es un campo desabilitado
            
            //Cargar valores por defecto en los campos del formulario
            //Para cada campo del formulario: Validar entrada y actuar en consecuencia
            if (isset($_REQUEST['enviar'])) {
                //Validar entrada
                $aErrores = [
                    'codDepartamento' => validacionFormularios::comprobarAlfabetico($_REQUEST['codDepartamento'],3,3,1),//Valido que sea alfabetico con un tamaño maximo de 3 y minimo de 3 y que sea obligatorio
                    'descDepartamento' => validacionFormularios::comprobarAlfaNumerico($_REQUEST['descDepartamento'], 255, 1, 1),//Valido que sea alfanumerico con un tamaño maximo de 255 y minimo de 1 y que sea obligatorio
                    'volumen' => validacionFormularios::comprobarFloat($_REQUEST['volumen'], PHP_FLOAT_MAX, PHP_FLOAT_MIN, 1),//Valido que sea un numero real y obligatorio
                    'bajaDepartamento' => validacionFormularios::validarFecha($_REQUEST['bajaDepartamento'], "01/01/2200", date('d-m-Y'), 0)//Valido que la fecha maxima sea en 2200 y la minima la del dia en el que se realiza el formulario y es opcional
                ];
                
                //Recorremos los errores para ver si hay alguno
                foreach ($aErrores as $campo => $error) {
                    if ($error == !null){
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
                    'volumen' => $_REQUEST['volumen'],
                    'bajaDepartamento' => $_REQUEST['bajaDepartamento']
                ];

                //Recorremos las respuestas y las mostramos
                foreach ($aRespuestas as $campo => $respuesta) {
                    echo "$campo=>$respuesta<br>";
                }
            } else {
                ?>
                <form class="w-40 position-absolute top-50 start-50 translate-middle" name="fomrulario" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="mb-3">
                        <label class="form-label">Codigo de Departamento</label>
                        <input type="text" class="form-control bg-warning" name="codDepartamento" value="<?php echo (isset($_REQUEST['codDepartamento']) ? $_REQUEST['codDepartamento'] : ''); ?>">
                        <?php echo (!empty($aErrores["codDepartamento"]) ? '<span style="color: red;">' . $aErrores["codDepartamento"] . '</span>' : '');//Esto es para mostrar el mensaje de error en color rojo ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descripcion de Departamento</label>
                        <textarea class="form-control bg-warning" rows="3" name="descDepartamento"><?php echo (isset($_REQUEST['descDepartamento']) ? $_REQUEST['descDepartamento'] : ''); ?></textarea>
                        <?php echo (!empty($aErrores["descDepartamento"]) ? '<span style="color: red;">' . $aErrores["descDepartamento"] . '</span>' : '');//Esto es para mostrar el mensaje de error en color rojo ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Fecha de creacion</label>
                        <input id="fechaCreacion" type="text" class="form-control" name="fechaCreacion" placeholder="dd/mm/aaaa" value="<?php echo $_REQUEST['fechaCreacion']?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Volumen</label>
                        <input type="text" class="form-control bg-warning" name="volumen" value="<?php echo (isset($_REQUEST['volumen']) ? $_REQUEST['volumen'] : ''); ?>">
                        <?php echo (!empty($aErrores["volumen"]) ? '<span style="color: red;">' . $aErrores["volumen"] . '</span>' : '');//Esto es para mostrar el mensaje de error en color rojo ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Baja de departamento:</label>
                        <input type="text" class="form-control" name="bajaDepartamento" value="<?php echo (isset($_REQUEST['bajaDepartamento']) ? $_REQUEST['bajaDepartamento'] : ''); ?>">
                        <?php echo (!empty($aErrores["bajaDepartamento"]) ? '<span style="color: red;">' . $aErrores["bajaDepartamento"] . '</span>' : '');//Esto es para mostrar el mensaje de error en color rojo ?>
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


