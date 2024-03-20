<!DOCTYPE html>
<html>
    <head>
        <title>ejercicio04</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <link rel="stylesheet" href="../webroot/css/main.css"/>
    <body>
        <header class="text-center bg-secondary text-white" style="height: 75px">
            <h3>4. Mostrar en tu página index la fecha y hora actual en Oporto formateada en portugués.</h3>
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
                    1 => "Segunda-feira",
                    2 => "Terça-feira",
                    3 => "Quarta-feira",
                    4 => "Quinta-feira",
                    5 => "Sexta-feira",
                    6 => "Sábado"
                ];
                return $aDia[$nDia];
            }

            //Hacemos una función con un array que dependiendo el numero que nos devuelva el format de datetime sea un mes o otro
            function nombreMes($nMes) {
                $aMes = [
                    1 => "Janeiro",
                    2 => "Fevereiro",
                    3 => "Março",
                    4 => "Abril",
                    5 => "Maio",
                    6 => "Junho",
                    7 => "Julho",
                    8 => "Agosto",
                    9 => "Setembro",
                    10 => "Outubro",
                    11 => "Novembro",
                    12 => "Dezembro"
                ];
                return $aMes[$nMes];
            }

            // Crear una instancia de DateTime con la fecha y hora actual en portugal
            $oFechaActual = new DateTime("Europe/Lisbon");

            //Hacemos que la variable nDia y nMes reciba un numero de mes o de dia respectivamente
            $nDia = $oFechaActual->format('w');
            $nMes = $oFechaActual->format('n');

            //Ahora creamos una vaiable que sea el nombre del mes llamando a las funciones previamente creadas
            $nomDia = nombreDia($nDia);
            $nomMes = nombreMes($nMes);

            // Formatear la fecha y hora actual en portugués
            $fechaLisboa = $nomDia . $oFechaActual->format(' d') . ' de ' . $nomMes . ' de ' . $oFechaActual->format('Y, H:i:s');

            echo'<p>La hora actual en Oporto es: ' . $fechaLisboa . '</p>';
            
            //Ahora procederemos ha ahcerlo son setlocale
            echo '<h3>Esto con setlocale</h3>';

            //Ponemos el setlocale que cambie toda la configuracion a potugues de Protugal
            setlocale(LC_ALL, 'pt_PT.utf8');
            //Cremaos una variable fecha que y con la funcion strftime que sirve para obtener un string expresado en el lenguaje de la configuración local creamos una fecha
            $fecha = strftime("Hoje é %A, dia %d de %B de %Y, %H:%M:%S");
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

