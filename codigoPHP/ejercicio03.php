<!DOCTYPE html>
<html>
    <head>
        <title>ejercicio03</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../webroot/css/main.css"/>
    </head>
    <body>
        <header class="text-center bg-secondary" style="height: 75px">
            <h3>3. Mostrar en tu página index la fecha y hora actual formateada en castellano.</h3>
        </header>
        <main style="margin-bottom: 75px" class="text-center fs-5">
            <h3>Esto con DateTime</h3>
            <?php

            /**
             * @author Borja Nuñez Refoyo
             * @version 2.0 
             * @since 07/03/2024
             */
            //Hacemos una función con un array que dependiendo el numero que nos devuelva el format de datetime sea un dia o otro
            function nombreDia($nDia) {
                $aDia = [
                    0 => "Domingo",
                    1 => "Lunes",
                    2 => "Martes",
                    3 => "Miercoles",
                    4 => "Jueves",
                    5 => "Viernes",
                    6 => "Sabado"
                ];
                return $aDia[$nDia];
            }

            //Hacemos una función con un array que dependiendo el numero que nos devuelva el format de datetime sea un mes o otro
            function nombreMes($nMes) {
                $aMes = [
                    1 => "Enero",
                    2 => "Febrero",
                    3 => "Marzo",
                    4 => "Abril",
                    5 => "Mayo",
                    6 => "Junio",
                    7 => "Julio",
                    8 => "Agosto",
                    9 => "Septiembre",
                    10 => "Octubre",
                    11 => "Noviembre",
                    12 => "Diciembre"
                ];
                return $aMes[$nMes];
            }

            //Creamos un nuevo objeto DateTime con la fecha y hora actual de la zona horaria de madrid
            $oFechaActual = new DateTime("Europe/Madrid");

            //Hacemos que la variable nDia y nMes reciba un numero de mes o de dia respectivamente
            $nDia = $oFechaActual->format('w');
            $nMes = $oFechaActual->format('n');

            //Ahora creamos una vaiable que sea el nombre del mes llamando a las funciones previamente creadas
            $nomDia = nombreDia($nDia);
            $nomMes = nombreMes($nMes);

            //Le damos un formato a la fecha actual
            $fechaHoraFormateada = $nomDia . $oFechaActual->format(' d') . ' de ' . $nomMes . ' de ' . $oFechaActual->format('Y, H:i:s');
            echo '<p>Fecha-Hora actual: ' . $fechaHoraFormateada . '</p>';

            //Ahora procederemos ha ahcerlo son setlocale
            echo '<h3>Esto con setlocale</h3>';

            //Ponemos el setlocale que cambie toda la configuracion a español de españa
            setlocale(LC_ALL, 'es_ES.utf8');
            //Cremaos una variable fecha que y con la funcion strftime que sirve para obtener un string expresado en el lenguaje de la configuración local creamos una fecha
            $fecha = strftime("Hoy es %A día %d de %B de %Y, %H:%M:%S");
            //Mostramos la fecha
            echo $fecha;
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

